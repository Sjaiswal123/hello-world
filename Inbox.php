<?php
session_start();
if(isset($_SESSION['S']))
{
	
	if(isset ($_POST['Signout']))
	{
		session_destroy();
		header('location:login.php');
	}
	}
	else
	{
	//header('location:Inbox.php');
	}
?>
<html>
<head>
<meta charset="utf-8">
<title>education portal</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">EdUcation hUb</a></h1>
			<p>a new way to learn the thing...</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
                    <li><a href="Index.php">Home</a></li>
                    <li><a href="student.html">Student</a></li>
                    <li><a href="faculty.html">Faculty</a></li>
                    <li><a href="about.html">About Us</a></li>			
                    <li><a href="contact.html">Contact Us</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title">				<marquee direction="right">Welcome   </marquee></h2>
				
				<p class="meta"><span class="date">ThiS is YoUr InbOx PagE</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
									
                                        <form name="form1" method="POST">
<h1>
<br>
<?php

	echo"WELCOME".$_SESSION['S']." "."to education hub";
	
	?> </h1>
	<p>This is the inbox page where you can send and receive message from 
	other user and our experienced faculty member who can guide you or help youto find your
	career and educational path thank you for been the member of our family</p>
	<img src="images/inb.jpg" style="width:400px;height:200px"/><br><br>

	
<p style="background-color:lightgray;">	<i>By clicking on the button below you will be proceeded to your account page</i>
<a href="Account.php" ><input type="button" value="Account"/></a></p>
<br><br>
<br>
<Big><center><input type="submit" name="Signout" value="Log out"/></center><br></Big>

</form>

							
                                    </p>    
				</div>
			</div
			
			
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				
				<li>
                                        <br>
					<h2>Information area</h2>
					<p>					<marquee direction="up" height="20%">1.Edutopia – 
The perennial favourite, Edutopia dishes out practical classroom strategies and tips, lesson ideas, personal stories, and innovative approaches to improving teaching practices.<br>
<br>2. Free Technology for Teachers – 
One of the most popular feeds created just for teachers, ‘Free Technology for Teachers’ does exactly what is says on the tin. Free… Technology… For… Teachers.
<br>
<br>
3. Mindshift – 
Created by KQED and NPR, MindShift explores the future of learning in all its dimensions, covering cultural and technology trends, innovations in education, groundbreaking research, education policy, and more.
</marquee></p>
				</li>
					<li>
					<h2>Members area</h2>
					<ul>
					
						<li><a href="registration.php">New User</a></li>
						<li><a href="login.php"> Login tO yOur acCount</a></li>
						<li><a href="Editprofile.php"> Update account</a></li>
				
						<li><a href="Changepassword.php"> Change Password</a></li>
                                                <li><a href="#">No Web help</a></li>
					</ul>
				</li>
				
				
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p>Copyright (c) 2018 All rights reserved. Design by Shivani jaiswal</p>
	</div>
	<!-- end #footer -->
</body>
</html>
