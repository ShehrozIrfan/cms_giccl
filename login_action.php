
<!-- <?php include 'connection.php' ?> -->

<?php 

if(isset($_POST['login'])) {
    $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $password = md5(filter_var($_POST["password"], FILTER_SANITIZE_STRING));

    $query = "INSERT INTO login(username, password) ";
    $query .= "VALUES('$username','$password')";
    
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query Failed .. !" . mysqli_error($connection));
    } else {
       echo 'error 405';
    }
    
}


?>

