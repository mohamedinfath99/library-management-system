<?php
require('dbconn.php');
?>


<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->

	<!-- Style -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->
<style>
	body {
    font-family: 'Roboto', sans-serif;
    text-align: center;
    background: url("images/book.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
}

.container {
    width: 50%;
    margin:  auto;
	margin-top: 50px;
    padding: 40px;
    background-color: rgba(10, 10, 10, 0.77);
    border: 2px ridge rgba(238, 238, 238, 0.13);
    border-radius: 5px;
    -moz-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    -webkit-box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    box-shadow: 0 -5px 10px 1px rgba(16, 16, 16, 0.57);
    border-bottom: none;
    border-bottom-left-radius: initial;
    border-bottom-right-radius: initial;
}
	</style>

<!-- Body -->
<body>
<img src="images/ri2.png">

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="index.php" method="post">
				<input type="text" Name="RollNo" autocomplete="off" placeholder="Username" required="">
				<input type="password" Name="Password" placeholder="Password" required="">
			
			
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="index.php" method="post">
				<input type="text" Name="Name" autocomplete="off"  placeholder="Name" required>
				<input type="text" Name="Email" id="emailid" autocomplete="off" onBlur="checkAvailability()" placeholder="Email" required>
				<span id="user-availability-status" style="font-size:12px;"></span> 
				<input type="password" Name="Password" autocomplete="off" placeholder="Password" required>
				<input type="text" Name="PhoneNumber" autocomplete="off" maxlength="10" placeholder="Phone Number" required>
				<input type="text" Name="RollNo" autocomplete="off" placeholder="ID " required="">
				
				<select name="Category" id="Category">
					<option value="GEN">Founndation</option>
					<option value="OBC">Bsc</option>
					<option value="SC">Msc</option>
					<option value="ST">Phd</option>
				</select>
				<br>
			
			
			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<p>By creating an account, you agree to our <a class="underline" href="library.pdf " target="_blank">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		
		
	</div>

<?php
if(isset($_POST['signin']))
{$u=$_POST['RollNo'];
 $p=$_POST['Password'];
 $c=$_POST['Category'];

 $sql="select * from LMS.user where RollNo='$u'";

 $result = $conn->query($sql);
$row = $result->fetch_assoc();
$x=$row['Password'];
$y=$row['Type'];
if(strcasecmp($x,$p)==0 && !empty($u) && !empty($p))
  {//echo "Login Successful";
   $_SESSION['RollNo']=$u;
   

  if($y=='Admin')
   header('location:admin/index.php');
   else if($y=='Librarian')
   header('location:librarian/index.php');
  else
  	header('location:student/index.php');
        
  }
else 
 { echo "<script type='text/javascript'>alert('Failed to Login! Incorrect RollNo or Password')</script>";
}
   

}

if(isset($_POST['signup']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$password=$_POST['Password'];
	$mobno=$_POST['PhoneNumber'];
	$rollno=$_POST['RollNo'];
	$category=$_POST['Category'];
	$type='Student';

	$sql="insert into LMS.user (Name,Type,Category,RollNo,EmailId,MobNo,Password) values ('$name','$type','$category','$rollno','$email','$mobno','$password')";

	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}
if (isset($_POST['Email'])==true && empty($_POST['Email'])==false){
	$email = $_POST['Email'];
	if(filter_var($email, FILTER_VALIDATE_EMAIL)==true){
        echo'Valid email address';   
	}else{
		echo' Not Valid email address';
	}
}

?>

</body>
<!-- //Body -->

</html>
