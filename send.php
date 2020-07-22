<?php
include 'connection.php';

$message = $_POST['message'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject = $_POST['subject'];

$sql = "INSERT INTO `mydata` (`message`, `fullname`, `email`, `subject`) VALUES('$message','$fullname','$email','$subject')";

$result = mysqli_query($conn,$sql);
if($result){
    echo "record added";
} else{
    echo "something wrong";
}
?>