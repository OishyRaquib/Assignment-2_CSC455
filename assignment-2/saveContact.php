<?php
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$email_add=$_POST["address"];
$phone_num=$_POST["phone_number"];
$messages=$_POST["message"];
$connection=mysqli_connect("localhost","root","","assignment2") or die("Could not connect to database!");

$sql="INSERT INTO contact_table(first_name,last_name,email,phone,message) VALUES ('{$first_name}',
'{$last_name}','{$email_add}','{$phone_num}','{$messages}')";

$store=mysqli_query($connection,$sql) or die("Unable to store data!");

header("location: http://localhost/assignment-2/contactUs.php");

mysqli_close($connection);

?>