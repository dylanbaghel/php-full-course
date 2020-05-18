<?php include 'db.php'; ?>

<?php 
    $db = new DB();

    $query = "SELECT * FROM posts";
    $posts = $db->conn->query($query);

    if (isset($_POST['submit'])) {
        $title = mysqli_real_escape_string($db->conn, $_POST['title']);
        $body = mysqli_real_escape_string($db->conn, $_POST['body']);

        if ($title && $body) {
            $stmt = $db->conn->prepare("INSERT INTO posts(title, body) VALUES (?, ?)");
            $stmt->bind_param("ss", $title, $body);
            $stmt->execute();
            header('Location: index.php');
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_GET['id'];
        $stmt = $db->conn->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql OOP Style</title>
</head>
<body>
    <header>
        <h1>MySQL OOP Style</h1>
    </header>
    <div class="container">
        <div id="posts">
            <?php if ($posts->num_rows > 0): ?>
                <?php while($row = $posts->fetch_assoc()): ?>
                <h1><?php echo $row['title']; ?><button onclick="javascript:{document.getElementById('delete-form').submit()}">Delete</button></h1>
                    <p><?php echo $row['created_at']; ?></p>
                    <p><?php echo $row['body']; ?></p>
                    <form id="delete-form" action="index.php?id=<?php echo urlencode($row['id']); ?>" method="POST">
                    <input type="hidden" name="delete">
                </form>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No Posts Created Yet</p>
            <?php endif; ?>
        </div>
        <div id="add-post-form">
            <form action="index.php" method="POST">
                <input type="text" name="title" placeholder="Enter Post Title">
                <textarea placeholder="Enter Post Body" name="body" ></textarea>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>