<?php
session_start();
$conn=mysqli_connect('localhost','root','','fweb');
if(isset($_SESSION['S']))
{
	
	echo"<br>";
	if(isset($_POST['Submit']))
	
	{
			$user=$_SESSION['S'];
	$newpass=$_POST['Newpassword'];
	$oldpass=$_POST['Oldpassword'];
	$q="update Registration set Password='$newpass' where Username='$user' and Password='$oldpass'";
	$a=mysqli_query($conn,$q);
	if($a>0)
	{
		echo"PASSWORD CHANGED";
	header('location:login.php');
	}
	else
		echo"unable to change password";
	}
}
	if(isset ($_POST['Signout']))
	{
		session_destroy();
		header('location:login.php');
	}
	
	else
	{
		//header('location:Changepassword.php');
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
			<h1><a href="#">	EdUcation hUb </a></h1>
			<p>a new way to learn the thing...</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
                    <li ><a href="Index.php">Home</a></li>
                    <li><a href="student.html">Student</a></li>
                    <li><a href="faculty.html">Faculty</a></li>
                    <li><a href="about.html">About</a></li>			
                    <li><a href="contact.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title">				<marquee direction="right">Welcome   </marquee></h2>
				
				<p class="meta"><span class="date">Change your password</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
																										
<img src="images/wel.jpg" style="width:150px;height:150px"/>

                                        <form name="form1" method="POST">

								<h1>   <?php

	echo"WELCOME ".$_SESSION['S']." "."to education hub";
	
	?> </h1>
<table align="center"   style="background-color:lightgray ;color:black;font-family:Arial;">
<caption style="color:#32639A;"><i>please fill the information to Change password  of your account</a></caption>
 <tr style="">
 <td>Old password</td>
 <td><input type="password" name="Oldpassword"></td>
 </tr
 <tr>
 <td style="background-color:white">New Password</td>
 <td><input type="password" name="Newpassword"></td>
 </tr>
 <tr>
 <td>Confirm password</td>
 <td><input type="password" ></td>
 </tr
 <tr>
<td style="background-color:white"><input type="submit" name="Signout" value="Log out"/></td>
<td><input type="submit"  value="Btnsubmit" name="Submit"></td>
</tr>
</table>

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
						<li><a href="login.php">Login tO yOur acCount</a></li>
						<li><a href="Editprofile.php">UpdAte acCountount</a></li>
						
						<li><a href="Changepassword.php">Change Password</a></li>
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
		<p>Copyright (c) 2017 All rights reserved. Design by Shivani jaiswal</p>
	</div>
	<!-- end #footer -->
</body>
</html>
