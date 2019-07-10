<?php
$row=null;
session_start();
	$conn=mysqli_connect('localhost','root','','fweb');

	if(isset($_SESSION['S']))
{

	$user=$_SESSION['S'];
	$q="SELECT `Username`,'password', `Emailid`, `Moblieno`, `Age`, 
	`Qualification`, `Security_question`, `Answer`, `Gender`, `Hobby` FROM `registration` WHERE Username='$user'";
	$res=mysqli_query($conn,$q);
	$num=mysqli_num_rows($res);
		$row=mysqli_fetch_row($res);
	
		

	}
			
	if(isset ($_POST['Signout']))
	{
		session_destroy();
		header('location:login.php');
	}
		else
	{
		//header('location:Editprofile.php');
	}
	if(isset($_POST['Submit']))
	
	{
		
		$user1=$_SESSION['S'];
		
	
	$user=$_POST['Username'];
	$email=$_POST['Emailid'];

	$age=$_POST['Age'];
	$qual=$_POST['Qualification'];
	$sq=$_POST['Security_question'];
	$ans=$_POST['Answer'];
	$gen=$_POST['Gender'];
	$hobby=implode(",",$_POST['Hobby']);
	//	$q="UPDATE `registration` SET `Username`=['$user'],`Emailid`=['$email'],`Moblieno`=['$mob'],`Age`=['$age'],
	//	`Qualification`=['$qual'],`Security_question`=['$squesion'],`Answer`=['$ans'],`Gender`=['$gen'],`Hobby`=['$hobby'] WHERE Username='$user1' ";
$q="update Registration set Answer='$ans',Emailid='$email',Username='$user',Age='$age',Qualification='$qual',
Gender='$gen',Security_question='$sq',Hobby='$hobby' where Username='$user1'";
		//$conn=mysqli_connect('localhost','root','','fweb');

		$a=mysqli_query($conn,$q);
		if($a>0)
		{
		echo"Profile Updated";
	header('location:Index.php');
		}
	
	else
		echo"Unable to Update your Account please try after some time ";
	
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
			<h1><a href="#">	Educate Yourself  </a></h1>
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
				
				<p class="meta"><span class="date">Update your profile</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
																		
<img src="images/wel.jpg" style="width:150px;height:150px"/>

	
                                     <form name="form1" method="POST">
									 
								<h1>   <?php

	echo"WELCOME".$_SESSION['S']." "."to education hub";
	
	?> </h1>
<table align="center"   style="background-color:lightgray ;color:black;font-family:Arial;">
<caption style="color:#32639A;"><i>Make the changes whereever you want to update your profile</a></caption>
 <tr style="">
<td style="background-color:white">Username</td>
<td><input type="text" name="Username" value='<?php echo$row[0]?>' ></td>
</tr>
<tr>
<td style="background-color:">Email id</td>
<td><input type="text" name="Emailid" value='<?php echo$row[2]?>' ></td>
</tr>

<tr>
<td style="background-color:white">Age</td>
<td><input type="text" name="Age"  value='<?php echo$row[4]?>'></td>
</tr>
<tr>
<td>Qualification</td>
<td><input type="text" name="Qualification" value='<?php echo$row[5]?>'></td>
</tr>
<tr>
<td style="background-color:white">Security question</td>
<td>
<select name="Security_question" required>
<option> Please select any one security question</option>
<option>fname</option>
<option>lname</option>
<option>Petname</option>
</select>
<tr>
<td style="background-color:">Answer</td>
<td><input type="text" name="Answer"  required></td>
</tr>
<tr>
<td style="background-color:white">Gender</td>
<td><input type="radio" name="Gender"  value="Male">Male
<input type="radio" name="Gender"  value="Female">Female
</td>
</tr>
<tr>
<td style="background-color:">Hobby</td>
<td>
Playing <input type="checkbox" name="Hobby[]" value="Playing">
Singing <input type="checkbox" name="Hobby[]" value="Singing">
Reading <input type="checkbox" name="Hobby[]" value="Reading">
</td>
</tr>
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
						<li><a href="Editprofile.php">Update account</a></li>
						
						<li><a href="Changepassword.php">Change Password</a></li>
                                   
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
		<p>Copyright (c) 2018 Design by Shivani Jaiswal</p>
	</div>
	<!-- end #footer -->
</body>
</html>
