<?php include 'helpers/session_helper.php'; start_session(); ?>
<?php include 'lib/guest.php'; ?>
<?php include 'lib/db.php'; ?>
<?php include 'helpers/sanitize_helper.php'; ?>

<?php 
    if (isset($_POST['submit'])) {
        $username = inject_checker($conn, $_POST['username']);
        $password = inject_checker($conn, $_POST['password']);

        if (empty($username)) {
            $error = "Username is Required";
        } else if (empty($password)) {
            $error = "Please Enter Password";
        } else {
            $query = "SELECT * FROM users WHERE username = '$username'";
            $user = mysqli_query($conn, $query);

            if (mysqli_num_rows($user) == 0) {
                $error = "User Not Registered With Us";
            } else {
                $row = mysqli_fetch_assoc($user);
                $is_password_matched = password_verify($password, $row['password']);

                if ($is_password_matched) {
                    session_start();
                    $_SESSION['user'] = $row['id'];
                    header('Location: dashboard.php?success_msg=Successfully Logged In');
                } else {
                    $error = "Incorrect Password";
                }
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
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username*</label>
                                <input type="text" placeholder="Enter Username" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" placeholder="Enter Password" name="password" class="form-control">
                            </div>
                            <button class="btn btn-dark btn-block" type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/partials/_footer.php'; ?>