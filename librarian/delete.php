<?php
require('dbconn.php');

$name=$_GET['id1'];

$category=$_GET['id2'];

$rno=$_GET['id3'];

$email=$_GET['id4'];

$mobno=$_GET['id5'];

$sql="delete from LMS.record where MobNo='$mobno' EmailID='$email' RollNo='$rno' Category='$category' and Name='$name'";

if($conn->query($sql) === TRUE)
{

echo "<script type='text/javascript'>alert('Success')</script>";
header( "Refresh:0.01; url=student.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Error')</script>";
    header( "Refresh:0.01; url=student.php", true, 303);

}




?>