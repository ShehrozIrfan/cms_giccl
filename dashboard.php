<?php include('session.php'); ?>
<?php 
if(!isset($_SESSION['login_user'])){
    header("location: login.php");
    die();
 }
?>

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
    
    <h1>Welcome <?php echo $login_session; ?></h1> 

    </div>
      
    
    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->

    <script src="./assets/js/app.js"></script>
</body>
</html>