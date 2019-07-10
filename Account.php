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
	
		else	//header('location:Account.php');
	
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
				
				<p class="meta"><span class="date">This is yOur AcCouNt</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
																		
<img src="images/wel.jpg" style="width:150px;height:150px">

                                       <form name="form1" method="POST">
									<h1>   <?php

	echo"Welcome ".$_SESSION['S']." "."to education hub";
	
	?> </h1>
	<br>
 A representation of something in outline; especially a human head or face represented or seen in a side view
 an outline seen or represented in sharp relief contour
 a side or sectional elevation: such as
 a drawing showing a vertical section of the ground
 a vertical section of a soil from the ground surface to the underlying unweathered material<br>
 																		
<center><img src="images/pro.jpg" style="width:250px;height:250px"/><center>

 <br>
<a href="Editprofile.php"> <input type="button" value="Update  yOUr  AcCouNts"/> </a><br><br>
									   <a href="Changepassword.php"><input type="button" value="CHanGe paSswoRd"/></a><br>
				<br>					   
									   
									   
<input type="submit" name="Signout" value="Log out"/><br>






</form>

							
                                    </p>    
				</div>
			</div>
			
			
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
                                                <li><a href="noweb.html">No Web help</a></li>
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
