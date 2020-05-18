<?php include 'db.php'; ?>
<?php
$error = null;
$username = '';
$password = '';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (!$username) {
        $error = 'Please Enter Username';
    } else if (strlen($username) < 3) {
        $error = 'Username Too Short';
    } else if (!$password) {
        $error = 'Please Enter Password';
    } else if (strlen($password) < 6) {
        $error = 'Password Too Short';
    }

    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Worst Login</title>
</head>

<body>
    <div class="container">
        <?php if ($error) : ?>
            <div class="mt-5 alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <h1 class="text-center mt-5">Login</h1>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username*</label>
                        <input type="text" name="username" class="form-control" 
                            <?php if ($username): ?>
                                value="<?php echo $username; ?>"
                            <?php endif; ?>
                        >
                    </div>
                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <button name="submit" type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>