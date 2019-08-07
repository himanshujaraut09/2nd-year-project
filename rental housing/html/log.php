<!DOCTYPE html>
<html>
<head>
<style>
body{
    margin:0;
	padding:0;
}
.image{
    width:100%;
	height:100%;
	position:fixed;
}
.menu{
    position:absolute;
	top:30px;
	left:1200px;
}
.menu a{
    display:inline;
	padding:10px 21px;
	color:white;
	text-decoration:none;
	font-size:20px;
	font-family:verdana;
	border:2px solid white;
	border-radius:10px;
	margin:20px;
}
.menu a:hover{
    background-color:white;
	cursor:pointer;
	color:#3e88b9;
	border:2px solid #3e88b9;
}
.header{
	background-color:#3e88b9;
	width:100%;
	height:100px;
	position:absolute;
	top:0px;
	opacity:0.7;
}
.login{
     position:absolute;
     top:100px;
     left:200px;
     background-color:white;
	 width:320px;
	 height:250px;
	 padding:10px;
     border-radius:10px;
}
.btn{
    position:absolute;
	top:180px;
	left:100px;
	background-color:mediumseagreen;
	border:none;
	width:100px;
	padding:10px;
	border-radius:10px;
}
.text{
    font-size:15px;
	font-family:verdana;
}
.input{
    width:150px;
	height:20px;
	border:none;
}
.error{
	position:absolute;
	top:700px;
	left:500px;
	color:red;
}
</style>
</head>
<body >
<div class="login">
<table cellspacing="5px" cellpadding="5px">
<form action="login.php" method="post">
<tr>
<td><b class="text">User Type:</b></td>
<td ><select name="list" class="input"><option disabled selected>------select------</option><option value="one">Admin</option><option value="two">Student</option></select></td>
</tr>
<tr>
<td><b class="text">Enrollment-ID:</b></td>
<td ><input type="text" name="EID" class="input"></td>
</tr>
<tr>
<td><b class="text">Username:</b></td>
<td ><input type="text" name="uname" class="input"></td>
</tr>
<tr>
<td><b class="text">Password:</b></td>
<td><input type="password" name="pwd" class="input"></td>
</tr>
<center><input name="submit" type="submit" value="Login" class="btn text"></center>
</form>
</table>
</div>
<?php
 session_start();
 if($_SERVER['REQUEST_METHOD']=='POST'){
if (isset($_POST['submit'])) {
if(empty($_POST['uname']) || empty($_POST['pwd']))
{
    echo "Invalid Details!";	
}
else{
$x=$_POST["EID"];
$y=$_POST["uname"];
$con=mysqli_connect("localhost","root","","university");
$sql="select * from users where Eid='$x' and pwd='$_POST[pwd]'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows==1 && $_POST['list']=='one')
{  
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:dashboard.php");
}
else if($rows==1 && $_POST['list']=='two'){
   $_SESSION['id']=$x;
   $_SESSION['name']=$y;
   header("location:dashboard.php");
}
else{
	echo "<p class='error'>Invalid Login Details!</p>";
}
mysqli_close($con);
}
}
 }
?>
</body>
</html>
</body>
</html>