<?php
$hostname = 'localhost';
$username = 'root';
$password = 'Ruchi@888';
$database = 'userform';

$conn = new mysqli($hostname, $username, $password, $database);

if($conn->connect_error){
    echo 'some connection error';
}

$username = $_post['name'];
$phone = $_post['number'];
$email= $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];
$ip = $_SERVER['REMOTE_ADDR'];
$timestamp = date('y-m-d H:i:s');

$sql= "INSERT INTO contact_form (username, phone, email, sub_ject, msg, ip_address, timestamp) 
values ('$username','$phone', '$email', '$subject', '$message', '$ip', '$timestamp')";

if($conn->query($sql)=== True){
    echo 'new record added successfully';
}else{
    echo 'Something went wrong';
}

$conn->close();
?>