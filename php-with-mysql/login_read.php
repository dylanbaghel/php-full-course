<?php include 'db.php'; ?>

<?php
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Login Users</title>
</head>

<body>
    <div class="container">
        <?php if (count($users) > 0) : ?>
            <div class="list-group mt-5">
                <?php foreach ($users as $user) : ?>
                    <li class="list-group-item"><?php echo $user['username'] ?></li>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p>No Users Created</p>
        <?php endif; ?>
    </div>
</body>

</html>