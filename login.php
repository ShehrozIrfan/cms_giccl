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
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter Userame" required>
                          </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-dark">Login</button>
                      </form>
                </div>
            </div>
        </div>
    </section><!-- contact section ends -->
    
    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->
</body>
</html>