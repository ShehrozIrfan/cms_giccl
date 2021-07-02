<?php include('session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | GICCL</title>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- stylesheet -->
    <link rel="stylesheet" href="./assets/styles/style.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- header -->
    <?php include 'header.php' ?> <!-- header ends -->
    <div class="pd_top"></div>
    <div class="container">
    <?php if (isset($_SESSION['success_message'])) { ?>
        <div class="alert alert-success text-center mx-auto font-weight-bold alert-dismissible mt-3 mb-3" role="alert">
            <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                ×
            </button>
            <?php echo $_SESSION['success_message']; ?>
        </div>
    <?php } ?>
    <h1>Welcome <?php echo $login_session; ?></h1> 
    </div>
      
    
    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->

    <script src="./assets/js/app.js"></script>
</body>
</html>