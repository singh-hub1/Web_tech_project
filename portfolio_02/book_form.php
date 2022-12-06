<?php
 if(isset($_POST['send']))
 {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

$servername="localhost";
$username="root";
$password="";
$dbname="booking";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("sorry we failed to connect".mysqli_connect_error());
}
   
$sql="INSERT INTO `ticketbooking` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());";

  
$result=mysqli_query($conn,$sql);
 if($result)
 {
   header('location:home.php'); 
 }
else{
      echo 'something went wrong please try again!';
   }
 }
?>