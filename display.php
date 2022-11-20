<?php
$con = mysqli_connect("localhost",'root',"","abdullah391100971"); 

 
$sql = 'SELECT * FROM form';

$retval = mysqli_query( $con, $sql );
 
if(! $retval ) {
die('Could not get data: ' . mysql_error());
}
 
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
echo "relationship :{$row['relationship']}  <br> ".
"first visit: {$row['firstvisit']} <br> ".
"If first visit no : {$row['Iffirstvisitno']} <br> ".
"Feedback Category : {$row['FeedbackCategory']} <br> ".
"PRIMARY reason : {$row['PRIMARYreason']} <br> ".
"information : {$row['information']} <br> ".
"needed : {$row['needed']} <br> ".
"Additional Feedback : {$row['AdditionalFeedback']} <br> ".
"Name : {$row['Name']} <br> ".
"Email : {$row['Email']} <br> ".
"Verification : {$row['Verification']} <br> ".
"--------------------------------<br>";

}
echo "<br><a href='HW2.html'>Back to Home Page</a>"  ;
?>
