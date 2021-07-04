<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="./assets/styles/style.css">
</head>
<body>
    <!-- header -->
    <header>
        <!-- nav-bar -->
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="index.php"><img src="assets/images/main_logo.jpeg" id="main_logo" ></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-5">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Management
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Accounts Management</a>
                    <a class="dropdown-item" href="#">Admission Management</a>
                    <a class="dropdown-item" href="#">Attendance Management</a>
                    <a class="dropdown-item" href="#">Examination Management</a>
                    <a class="dropdown-item" href="#">Hostel Management</a>
                    </div>
                </li><!-- Dropdown ends -->
                <?php if(!isset($_SESSION['login_user'])): ?>
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item mr-5">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                <?php endif ?>
                  <?php  if(!isset($_SESSION['login_user'])) { ?>
                    <li class="nav-item mr-5">
                    <a class="nav-link" href="login.php">Login</a>  
                    </li>
                  <?php } else {  ?>
                    <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    News
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="create_news.php">Create News</a>
                    <a class="dropdown-item" href="show_news.php">Show All News</a>
                    </div>
                    </li><!-- Dropdown ends -->
                    <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Settings
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="dashboard.php">Profile</a>
                    <a class="dropdown-item" href="update_profile.php">Update Profile</a>
                    <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                    </li><!-- Dropdown ends -->
                  <?php } ?>
                     
              </ul>
            </div>  
          </nav><!-- navbar ends -->
    </header><!-- header ends -->

    
</body>
</html>