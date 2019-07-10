<?php
if(isset($_POST['Username']))
{
	
	$user=$_POST['Username'];
	$pass=$_POST['Password'];
	$email=$_POST['Email_id'];
	$mob=$_POST['Mobile_number'];
	$age=$_POST['Age'];
	$qual=$_POST['Qualification'];
	$squesion=$_POST['Security_question'];
	$ans=$_POST['Answer'];
	$gen=$_POST['Gender'];
	$hobby=implode(",",$_POST['Hobby']);
$conn=mysqli_connect('localhost','root','','fweb');
$q="insert into Registration values('$user','$pass','$email',$mob,$age,'$qual','$squesion','$ans','$gen','$hobby')";
$res=mysqli_query($conn,$q);
if($res>0)
	
     header('location:login.php');
	 echo"Registration successfful";
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
				
				<p class="meta"><span class="date">		New User</span></p>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
                                    <p>
									<center>																	
<img src="images/new.jpg" style="width:150px;height:150px"/></center>

                                        <form name="form1" method="POST">
<table align="center"   style="background-color:lightgray ;color:black;font-family:Arial;">
<caption style="color:#32639A;"><i>Makes the Entries below and be part of our family</a></caption>
 <tr style="">
<td style="background-color:">Username</td>
<td><input type="text" name="Username" required ></td>
</tr>
<tr>
<td style="background-color:white">Password</td>
<td><input type="password" name="Password" required ></td>
</tr>
<tr>
<td style="background-color:">Repassword</td>
<td><input type="password" name="Repassword" required ></td>
</tr>
<tr>
<td style="background-color:white">Email id</td>
<td><input type="text" name="Email_id" required ></td>
</tr>
<tr>
<td style="color:">Mobile number</td>
<td><input type="text" name="Mobile_number" required ></td>
</tr>
<tr>
<td  style="background-color:white">Age</td>
<td><input type="text" name="Age"  required></td>
</tr>
<tr>
<td style="background-color:">Qualification</td>
<td><input type="text" name="Qualification" required></td>
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
<tr  >
<td colspan="2" style="background-color:white" ><center><input type="submit" name="submit" value="Btnsubmit"></center></td>
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
					<p>					<marquee direction="up" height="50%">1.Edutopia – 
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
		<p>designed by shivani jaiswal</p>
	</div>
	<!-- end #footer -->
</body>
</html>
