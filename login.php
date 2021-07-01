<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($connection,$_POST['username']);
    //   $password = md5(filter_var($_POST["password"], FILTER_SANITIZE_STRING));
    $password = md5(mysqli_real_escape_string($connection,$_POST['password'])); 
      
      $query = "SELECT login_id FROM login WHERE username = '$username' and password = '$password'";

      $result = mysqli_query($connection,$query);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
    //   $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: dashboard.php");
      } else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | GICCL</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="./assets/styles/style.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- header -->
    <?php include 'header.php' ?> <!-- header ends -->
    <!-- contact section -->
    <section id="contact" class="pd_top">
        <div class="container">
            <h2 class="text-center font-weight-bold">Admin Login</h2>
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['message']; ?>
                </div>
            <?php } ?>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="login.php" method="post">
                        <?php 
                            if(isset($_SESSION["errorMessage"])) {
                        ?>
                        <div class="error-message">
                            <?php  echo $_SESSION["errorMessage"]; ?>
                        </div>
                        <?php 
                            unset($_SESSION["errorMessage"]);
                            } 
                        ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Userame" required>
                          </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="login" class="btn btn-dark">Login</button>
                      </form>
                </div>
            </div>
        </div>
    </section><!-- contact section ends -->
    
    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->
</body>
</html>