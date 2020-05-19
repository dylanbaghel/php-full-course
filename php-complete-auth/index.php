<?php include 'helpers/session_helper.php';
start_session(); ?>

<?php include 'includes/partials/_header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 mx-auto text-center">
            <h1>Welcome to PHP Auth</h1>
            <p>Simple Login & Register System</p>
            <?php if (is_authenticated()) : ?>
                <a href="dashboard.php" class="btn btn-dark btn-lg">Go To Dashboard Page</a>
            <?php else : ?>
                <a href="login.php" class="btn btn-dark">Login</a>
                <a href="register.php" class="btn btn-success">Register</a>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include 'includes/partials/_footer.php'; ?>