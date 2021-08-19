<?php include 'session.php'; ?>
<?php
$msg = '';
$msgClass = '';

if(isset($_POST['submit'])) {
    $content = $_POST['content'];
    $created_at = date('Y-m-d');

    if(!empty(trim($content))) {
        $query = "INSERT INTO my_news(content,created_at) VALUES ('$content','$created_at')";
        $result = mysqli_query($connection, $query);

        if($result) {
            $_SESSION['success'] = "News posted successfully!";
            header("location: test_ckeditor.php");
            die();
        } else {
            echo "Please try again.!";
        }
    } else {
        $msg = "News content can't be emtpy!";
        $msgClass = "danger";
    }
}
?>
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
    <!-- ckeditor -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
</head>
<body>
<!-- header -->
<?php include 'header.php' ?> <!-- header ends -->

<!-- section create news -->
<section id="create_news" class="pd_top mb-5">
<div class="container">
    <h2 class="text-center font-weight-bold mt-3 mb-3">Post News</h2>
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success text-center alert-dismissible">
        <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
            ×
        </button>
        <?php echo $_SESSION['success']; ?>
        </div>
    <?php endif; ?>

    <?php unset($_SESSION['success']); ?>

    <?php if($msg != '') { ?>
        <div class="alert alert-<?php echo $msgClass ?> text-center alert-dismissible">
        <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
            ×
        </button>
        <?php echo $msg ?>
        </div>
    <?php } ?>

    <form action="" method="post">
        <textarea name="content" required></textarea>
        <div class="mt-3">
            <button class="btn btn-primary btn-block" name="submit">Post News</button>
            <a href="" class="btn btn-secondary btn-block mt-3">Show News</a>
        </div>
    </form>
    </div>
</section><!-- section create news ends -->


<!-- footer -->
<?php include 'footer.php' ?><!-- footer ends -->

<script>
    CKEDITOR.replace('content', {
      uiColor: '#CCEAEE'
    });
</script>
<script src="./assets/js/app.js"></script>
</body>
</html>
