<?php require_once 'session.php' ?>
<?php require_once 'global_update_profile.php' ?>
<?php
   $msg = '';
   $msgClass = '';
   if(isset($_POST['update'])) {
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $password = $_POST['password']; 
        $password_confirmation = $_POST['confirm_password'];
        if(trim($username) == '') {
            $msg = "Username can't be blank!";
            $msgClass = "danger";
        } else if(strlen(trim($username)) < 3) {
            $msg = "Username must be atleast 3 characters!";
            $msgClass = "danger";
        } else if(strlen($password) < 6) {
            $msg = "Password must be atleast 6 characters!";
            $msgClass = "danger";
        }
        else {
            if($password != $password_confirmation) {
                $msg = "Password and Confirm Password didn't match!";
                $msgClass = "danger";
            } else {
                $password = md5(mysqli_real_escape_string($connection,$_POST['password']));

                $query = "UPDATE login SET username = '$username', password = '$password' WHERE login_id ='$id'";

                $result = mysqli_query($connection,$query);

                if(!$result) {
                    echo 'Query Update Profile Failed..!';
                    die();
                } else {
                    $msg = "Profile Updated Successfully!";
                    $msgClass = "success";
                }

            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Login | GICCL</title>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <?php include 'header.php'; ?> <!-- header ends -->
    <!-- contact section -->
    <section id="contact" class="pd_top">
        <div class="container">
            <h2 class="text-center font-weight-bold mt-3 mb-3">Update Login Details</h2>
            <?php if ($msg != ''): ?>
              <div class="alert alert-<?php echo $msgClass ?> text-center col-md-6 mx-auto mt-3 mb-3">
                <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                          ×
                </button>
                <?php echo $msg ?>
              </div>
            <?php endif ?>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="update_profile.php" method="post">
                        <div class="form-group">
                            <label for="username">New Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter Userame" required>
                          </div>
                        <div class="form-group">
                          <label for="password">New Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                          <label for="password">Confirm Password</label>
                          <input type="password" name="confirm_password" class="form-control" id="password" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                        <button type="submit" name="update" class="btn btn-primary">Change</button>
                      </form>
                </div>
            </div>
        </div>
    </section><!-- contact section ends -->
    
    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->

    <script src="./assets/js/app.js"></script>
</body>
</html>