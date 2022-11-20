<?php

$con = mysqli_connect("localhost",'root',"","abdullah391100971"); 

if (isset($_POST['submit']))
{
$checkbox1  = $_POST['relationship'];
$firstvisit = $_POST['firstvisit'];

$Iffirstvisitno =  $_POST['Iffirstvisitno'];
$FeedbackCategory = $_POST['FeedbackCategory'];
$PRIMARYreason = $_POST['PRIMARYreason'];
$information =$_POST['information'];
$needed=$_POST['needed'];
$AdditionalFeedback=$_POST['AdditionalFeedback'];
$Name=$_POST['Name'];
$Email =$_POST['Email'];
$Verification=$_POST['Verification'];

$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  

$query = "INSERT INTO form(relationship, firstvisit, Iffirstvisitno, FeedbackCategory, PRIMARYreason, information, needed, AdditionalFeedback, Name, Email, Verification) VALUES ('$chk','$firstvisit','$Iffirstvisitno','$FeedbackCategory','$PRIMARYreason','$information','$needed','$AdditionalFeedback','$Name','$Email','$Verification')";
$data = mysqli_query ($con,$query)or die(mysql_error());
echo "Thanks for contacting with us. We will reply you soon<br>";
echo "<br><a href='HW2.html'>Back to Home Page</a>";
echo "<br><a href='display.php'>Display</a>";
}
?>

