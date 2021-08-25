<?php

if(isset($_POST['submit'])) {
    echo "Clicked!";
    $filename = $_FILES["uploadImage"]["name"];
    $tempname = $_FILES["uploadImage"]["tmp_name"];
    $folder = "images/".$filename;

    echo $filename . "<br/>";
    echo $tempname . "<br/>";
    echo $folder . "<br/>";

    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
  }

}

?>

<?php echo exec('whoami'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div>
            <input type="file" name="uploadImage" required/>
            <br/>
            <br/>
            <input type="submit" name="submit">
        </div>
    </form>
</body>
</html>
