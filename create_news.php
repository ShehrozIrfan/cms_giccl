<?php include 'session.php' ?>
<?php 
if(!isset($_SESSION['login_user'])) 
{ 
  header("location: index.php"); 
} 
?>
<?php

$msg = '';
$msgClass = '';

if(isset($_POST['create'])) {
    echo "Working";

    $title = $_POST['title'];
    $description = $_POST['description'];
    $date = date('Y-m-d');

    if(!empty(trim($title)) && !empty(trim($description))) {
        if(strlen($title) < 10) {
            $msg = "Title must be atleast 10 characters!";
            $msgClass = "danger";
        } 
        else if(strlen($description) < 15) {
            $msg = "Description must be atleast 15 characters!";
            $msgClass = "danger";
        } else {
            $query = "INSERT INTO news (title, description, date) VALUES('$title', '$description', '$date')";
            $result = mysqli_query($connection, $query);
            if(!$result) {
                die("Query Failed .. !" . mysqli_error($connection));
            }else {
                $msg = "News added successfully!";
                $msgClass = "success";
                $title = '';
                $description = '';
            }
        }
    } else {
        $msg = "Title or Description can't be blank";
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
    <title>Create News | GICCL</title>
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

    <!-- section create news -->
    <section id="create_news" class="pd_top mb-5">
    <div class="container">
            <h2 class="text-center font-weight-bold mt-3 mb-3">Create News</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                <?php if($msg != '') { ?>
                    <div class="alert alert-<?php echo $msgClass ?> text-center alert-dismissible">
                    <button type = "button" class = "close" data-dismiss = "alert" aria-hidden = "true">
                        ×
                    </button>
                    <?php echo $msg ?>
                    </div>
                <?php } ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo isset($_POST['title'])? $title : ''; ?>" required>
                          </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Description" required><?php echo isset($_POST['description'])? $description : ''; ?></textarea>
                          </div>
                        <button type="submit" name="create" class="btn btn-primary">Add News</button>
                      </form>
                </div>
            </div>
        </div>
    </section><!-- section create news ends -->


    <!-- footer -->
    <?php include 'footer.php' ?><!-- footer ends -->
    <script src="./assets/js/app.js"></script>
</body>
</html>