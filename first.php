<?php
require('dbconn.php');
?>

<html>
    <head>
        <!-- Style -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	
</head>
	<style>
		#allTheThings {
    width: 100%;
    max-width: 1000px;
    text-align: center;
    margin: 5em auto;
    font-size: 1.3rem;
    color: #17202A ;
    display: block;
  }
  
  a{
      color: #17202A ;
      text-decoration: none;
  }
  
  #member{
      display: inline-block;
  }
  
  #verticalLine {
      display: inline-block;
      margin-left: 30px;
      border-left: solid #343642;
  }
  
  #librarian-link{
      margin-left: 20px;
  }
  
  #member, #librarian
  {
      transition: all .2s ease-in-out;
  }
  
  #member:hover, #librarian:hover
  {
      transform: scale(1.1);
  }








		</style>
	<body>

    <img src="images/ri2.png" margin="20px">


		<div id="allTheThings">
			<div id="member">
				<a href="index.php">
					<img src="img/ic_member.svg" width="250px" height="auto"/><br />
					&nbsp;Member
				</a>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a id="librarian-link" href="signup.php">
						<img src="img/admin.jpg" width="250px" height="auto" /><br />
						&nbsp;&nbsp;&nbsp;Admin
					</a>
				</div>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a id="librarian-link" href="signup.php">
						<img src="img/ic_librarian.svg" width="250px" height="auto" /><br />
						&nbsp;&nbsp;&nbsp;Librarian
					</a>
				</div>
			</div>
		</div>
	</body>
</html>