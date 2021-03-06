<?php include 'session.php' ?>
<?php 
if(isset($_SESSION['login_user'])) 
{ 
  header("location: index.php"); 
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | GICCL</title>
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
    <!-- img parallax -->
    <div class="img_college parallax pd_top">
    </div><!-- img parallax ends -->
    <!-- section about -->
    <section id="about" class="p">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="text-center font-weight-bold">AT A GLANCE</h2>
            <h3 class="text-center font-weight-bold">GOVERNMENT ISLAMIA COLLEGE CIVIL LINES, LAHORE</h3>
            <div class="para_1">
              Our college is one of the first ranked institutions of the Punjab. Let us have a glance on the past history of the college. The history of the Govt. Islamia College Civil Lines, Lahore goes back to the last years of the 19th century when the Arya Samajists founded the school of Dayanand Ayur Vedic on June 1, 1886. The huge building of Dayanand Vedic College (DAV College) experienced many revolutionary changes in the last two centuries. The school started Intermediate classes in 1888 and graduate classes in 1892 and finally M.A. in 1895. The name of the college was attributed to the Hindu leader Sawami Dayanand Sarasvati, founder of the Arya Samaj moment.
            </div>
            <div class="para_2">
              In 1947, the Muslim Muhajreen from the East Punjab were accommodated in the building of this college. Later this building was divided into two institutions including Taleem-ul-Islam (which was shifted to Rabwa in 1954) and LSNF School (Licentiate State Medical Faculty). In 1955, the college building was acquired by the Anjuman-e-Himayat-i-Islam. The Anjuman gave a new name of Islamia College to this previously DAV College. Initially the administration of both Islamia College Railway Road and Islamia College Civil Lines remained with The Anjuman-e-Himayat-i-Islam. 1958, Anjuman decided to give separate identity to Islamia College Civil Lines Lahore.
            </div>
            <div class="para_3">
              The college is providing sports apart from academic activities. This college is providing the students opportunities for acquiring skill in Hockey, Football, Volley Ball, Basket Ball, Squash, Badminton, Tennis, Bodybuilding, Rowing, Hiking, Kabaddi, Weightlifting, Handball Boxing, Tug of War, Cricket, Taikvando and Athletics. Our trained players have always been bringing a good name and repute to the college and country in International Olympics and Asian Games. For instance, the name of Sami Ullah Khan, Qasim Khan, Saleem Sherwani, Naveed Alam, Ahsan Ullah, Muhammad Naeem, Anjum Saeed and Shahzad Chishti in Hockey and Mohsin Kamal, Waseem Akram, Asif Massod, Amir Nazir, Aaqib Javed, Ashraf Ali and Aleem Dar in cricket are worth mentioning. There is a long list of our best students in Athletics, Kabaddi, Volleyball, Basketball, Boxing, Squash and Juddo karate. All of them are the best assets of this college and the country.
            </div>
            <div class="para_4">
              The college has been winning the Boxing Championship held by Lahore Board and Punjab University for the last 28 years continuously. In Kabaddi we have been top position holder for the last four years and we have been the best Athletes and the best Hikers of the Punjab University and other Universities during the last 5 years. In present educational year we have been holding first and second positions in twelve matches of Lahore Board Squash, Boxing, Kabaddi, Volleyball, breitling replica Hockey, Weightlifting, Bodybuilding, Rowing, Taikvando and Wrestling, whereas we are also top position holder of other competitions. I have the honour to claim that our players are top position holders in volleyball and Athletics in Chief Ministers Sports Tournaments. It is hoped that we will be successful in maintaining our former splendid records in the coming championships and competitions.
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->
</body>
</html>