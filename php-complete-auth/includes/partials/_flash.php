<?php if (isset($_GET['error_msg'])) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error: </strong> <?php echo $_GET['error_msg']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (isset($error)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error: </strong> <?php echo $error; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (isset($_GET['success_msg'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success: </strong> <?php echo $_GET['success_msg']; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>