<?php include 'session.php' ?>

<?php

$query = "SELECT * FROM my_news ORDER BY id DESC";

$result = mysqli_query($connection, $query);

if(!$result) {
    echo "QUERY FAILED...!";
    die();
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | GICCL</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/ckeditor.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>
<!-- header -->
<?php include 'header.php' ?> <!-- header ends -->

<!-- section create news -->
<section id="create_news" class="pd_top mb-5">
    <div class="container">
        <h2 class="text-center font-weight-bold mt-3 mb-3">All News</h2>
        <div class="parent_show_news">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12 mx-auto">
                <?php
                    while($row = mysqli_fetch_array($result)) {
                        print_r($row['content']) ;
                    }
                ?>
            </div>
        </div>
        </div>
    </div>
</section><!-- section create news ends -->


<!-- footer -->
<?php include 'footer.php' ?><!-- footer ends -->
<script>
    CKEDITOR.replace('content');
</script>
</body>
</html>
