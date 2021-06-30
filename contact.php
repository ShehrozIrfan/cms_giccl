<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | GICCL</title>
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
            <h2 class="text-center font-weight-bold">Get In Touch</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                          </div>
                        <div class="form-group">
                          <label for="email">Email address</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" placeholder="Enter your message" required></textarea>
                          </div>
                        <button type="submit" class="btn btn-dark">Send Message</button>
                      </form>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <ul class="list-group">
                        <li class="list-group-item text-center font-weight-bold">Contact Us</li>
                        <li class="list-group-item">
                            <i class="fa fa-map-marker pr-2" aria-hidden="true"></i>Govt. Islamia College, Civil Lines Lahore, Pakistan</li>
                        <li class="list-group-item">
                            <i class="fa fa-phone pr-2" aria-hidden="true"></i>+92-042-99210676-7</li>
                        <li class="list-group-item"><i class="fa fa-rss pr-2" aria-hidden="true"></i>www.giccl.edu.pk</li>
                      </ul>
                </div>
            </div>
        </div>
    </section><!-- contact section ends -->
    
    <?php include 'footer.php' ?>
</body>
</html>