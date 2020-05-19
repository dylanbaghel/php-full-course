<?php include 'helpers/session_helper.php'; start_session(); ?>
<?php include 'lib/guest.php'; ?>
<?php include 'lib/db.php'; ?>
<?php include 'helpers/sanitize_helper.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $full_name = inject_checker($conn, $_POST['name']);
    $username = inject_checker($conn, $_POST['username']);
    $password = inject_checker($conn, $_POST['password']);
    $cpassword = inject_checker($conn, $_POST['cpassword']);

    if (empty($full_name)) {
        $error = "Please Enter Full Name";
    } else if (strlen($full_name) < 3) {
        $error = "Full Name Too Short";
    } else if (empty($username)) {
        $error = "Username is Required";
    } else if (strlen($username) < 6) {
        $error = "Username Too Short";
    } else if (empty($password)) {
        $error = "Please Enter Password";
    } else if (strlen($password) < 6) {
        $error = "Password Too Short";
    } else if ($password !== $cpassword) {
        $error = "Password Do Not Match";
    } else {
        $query = "SELECT * FROM users WHERE username = '$username'";
        $user = mysqli_query($conn, $query);

        if (mysqli_num_rows($user) > 0) {
            $error = 'User is Already Registered';
        } else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]);

            $stmt = mysqli_prepare($conn, "INSERT INTO users(full_name, username, password) VALUES (?, ?, ?)");
            mysqli_stmt_bind_param($stmt, "sss", $full_name, $username, $hashed_password);
            mysqli_stmt_execute($stmt);
            header('Location: login.php?success_msg=Successfully Logged In, Please Login');
        }
    }
}

?>

<?php include 'includes/partials/_header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <?php include 'includes/partials/_flash.php'; ?>
            <div class="card">
                <div class="card-header">
                    <h1>Register</h1>
                </div>
                <div class="card-body">
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" placeholder="Enter Full Name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username">Username*</label>
                            <input type="text" placeholder="Enter Username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password*</label>
                            <input type="password" placeholder="Enter Password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cpassword">Confirm Password*</label>
                            <input type="password" placeholder="Enter Confirm Password" name="cpassword" class="form-control">
                        </div>
                        <button class="btn btn-dark btn-block" type="submit" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/partials/_footer.php'; ?>