<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | GICCL</title>
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
    <?php include 'header.php' ?><!-- header ends -->
    
    <!-- section parallax -->
      <section>
        <div class="header_parallax parallax pd_top text-center">
            <div class="container">
                <div class="header_parallax_text">
                  <div>
                    <h2 class="">Welcome to College Management System - GICCL</h2>
                    <?php if(!isset($_SESSION['login_user'])): ?>
                      <a href="about.php" class="btn btn-dark">Read more</a>
                    <?php endif ?>
                  </div>
                </div>
            </div>
        </div>
    </section><!-- section parallax ends-->

    <!-- section ms -->
    <section id="ms_boxes">
      <h2 class="text-center">College Management</h2>
      <div class="container">
        <div class="row justify-content-center row_ms">
          <div class="col-md-4 box_ms b_1">
            <a href="#">
              <div class="ms_img_1 ms_img_div">
              </div>
            </a>
              <div class="overlay"><h4 class="text-center text"><a href="#">Manage Accounts</a></h4></div>
              <h4 class="text-center">Account Management</h4>
          </div>
          <div class="col-md-4 box_ms b_1">
            <a href="#">
              <div class="ms_img_2 ms_img_div">
              </div>
            </a>
            <div class="overlay"><h4 class="text-center text"><a href="#">Manage Admissions</a></h4></div>
            <h4 class="text-center">Admission Management</h4>
          </div>
          <div class="col-md-4 box_ms b_1">
            <a href="#">
              <div class="ms_img_3 ms_img_div">
              </div>
            </a>
            <div class="overlay"><h4 class="text-center text"><a href="#">Manage Attendance</a></h4></div>
            <h4 class="text-center">Attendance Management</h4>
          </div>
        </div>
        <div class="row justify-content-center row_ms">
          <div class="col-md-4 box_ms b_1">
            <a href="#">
              <div class="ms_img_4 ms_img_div">
              </div>
            </a>
            <div class="overlay"><h4 class="text-center text"><a href="#">Manage Examinations</a></h4></div>
            <h4 class="text-center">Examination Management</h4>
          </div>
          <div class="col-md-4 box_ms b_1">
            <a href="#">
              <div class="ms_img_5 ms_img_div">
              </div>
            </a>
            <div class="overlay"><h4 class="text-center text"><a href="#">Manage Hostel</a></h4></div>
            <h4 class="text-center">Hostel Management</h4>
          </div>
        </div>
      </div>
    </section><!-- section ms ends -->
    
    <!-- section news-->
    <section id="s_news">
      <h2 class="text-center">News &amp; Updates</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            
            <div class="text-center mt-3 mb-3">
              <a href="./show_news.php" class="btn btn-dark btn-block">Click Here To Read News</a>
            </div>
        </div>
      </div>
    </section><!-- section news ends -->


    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->
</body>
</html>