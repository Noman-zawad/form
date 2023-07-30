<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$db = 'contact';

$conn = mysqli_connect($servername, $username, $pass, $db);

if(!$conn){
    echo "Server error: ";
}

if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO from_detail (name, email,subject, message) VALUES ('$name', '$email','$subject','$message')";

    if(mysqli_query($conn, $sql)){
        echo"success";
        die();
    }
    else{
        echo "error: " . mysqli_error($conn);
    }
}
?>