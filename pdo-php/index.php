<?php include 'db.php'; ?>

<?php
try {
    $db = new DB();

    $stmt = $db->conn->query("SELECT * FROM posts");
    $stmt->execute();

    $posts = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];

        if ($title && $body) {
            $stmt = $db->conn->prepare("INSERT INTO posts(title, body) VALUES (:title, :body)");
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":body", $body);
            $stmt->execute();
            header('Location: index.php');
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_GET['id'];
        $stmt = $db->conn->prepare("DELETE FROM posts WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        header('Location: index.php');
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO TEST</title>
</head>

<body>
    <header>
        <h1>PDO TEST</h1>
    </header>
    <div class="container">
        <div id="posts">
            <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <h1><?php echo $row['title']; ?> <button onclick="javascript:{document.getElementById('delete-form').submit();}">Delete</button></h1>
                <p><?php echo $row['created_at']; ?></p>
                <p><?php echo $row['body']; ?></p>
                <form action="index.php?id=<?php echo urlencode($row['id']); ?>" method="POST" id="delete-form">
                    <input type="hidden" name="delete">
                </form>
            <?php endwhile; ?>
        </div>
        <div id="add-post">
            <form action="index.php" method="POST">
                <input type="text" placeholder="Enter Title" name="title">
                <textarea name="body" placeholder="Enter Post Body"></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>

    </div>
</body>

</html>