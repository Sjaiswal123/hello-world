<?php
session_start();
if(isset($_POST['Username']))
{
	$user=$_POST['Username'];
	$pass=$_POST['Password'];
	
	$conn=mysqli_connect('localhost','root','','fweb');
	$q="select Username,Password from Registration where Username='$user' and Password='$pass'";
	$res=mysqli_query($conn,$q);
	$num=mysqli_num_rows($res);
	$r=mysqli_fetch_row($res);
	if($num>0)
	{
		$_SESSION['S']=$r[0];
		
	header('location:Inbox.php');
	}
	else
		echo"invalid username or password";
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
			<h1><a href="#">	EdUcation hUb  </a></h1>
			<p>a new way to learn the thing...</p>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
                    <li ><a href="Index.php">Home</a></li>
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
				
				<p class="meta"><span class="date">Log In Page</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
	
								
									
                                        <form name="form1" method="POST">
										
<table align="center"   style="background-color:lightgray 
	">
<caption style="color:#32639A;"><i>please fill the information to Log in to your account</a></caption>
 <tr style="">
<td style="background-color:">Username</td>
<td><input type="text" name="Username" required ></td>
</tr>
<tr>
<td style="background-color:white"> Password</td>
<td><input type="password" name="Password"></td>
</td>
<tr >
<td><a href="registration.php">Sign up</a></td>
<td style="background-color:white" ><center><input type="submit" name="submit" value="Btnsubmit"></center></td>
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
					                     <li><a href="noweb.html">No Web help</a></li>
					</ul
				
				
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
		<p>Copyright (c) Designed by Shivani Jaiswal</p>
	</div>
	<!-- end #footer -->
</body>
</html>
