<?php 

$con = mysqli_connect("localhost",'root',"","abdullah391100971"); 
$username=$_POST['username']; 
$password=$_POST['password']; 
 
$query = mysqli_query($con, "SELECT username FROM login WHERE username='$username' AND password='$password'"); 

if (mysqli_num_rows($query) != 0) 
{ 
header('location:./HW2.html'); 
} 
else 
{ 
echo "username or password not coorect"; 
} 
?>