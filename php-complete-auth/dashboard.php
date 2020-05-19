<?php 
    include 'helpers/session_helper.php';
    start_session();
?>
<?php include 'lib/authenticate.php'; ?>

<?php include 'includes/partials/_header.php'; ?>
    <div class="container">
        <?php include 'includes/partials/_flash.php'; ?>
        <h1>Dashboard</h1>
    </div>
<?php include 'includes/partials/_footer.php'; ?>