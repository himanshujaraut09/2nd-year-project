<?php
$con=mysqli_connect("localhost","root","","university");
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
    margin:0;
	padding:0;
	background-color:grey;
}
.image{
    width:100%;
	height:100%;
	position:fixed;
}
.menu{
    position:absolute;
	top:30px;
	left:500px;
}
.menu a{
    display:inline;
	padding:15px 24px;
	color:black;
	text-decoration:none;
	font-size:20px;
	font-family:verdana;
}
.menu a:hover{
    border-bottom:3px solid black;
	cursor:pointer;
}
.login{
     position:absolute;
     top:200px;
     left:500px;
     background-color: #2471a3;
	 width:400px;
	 height:450px;
	 padding:10px;
     border-radius:10px;
}
.btn{
    position:absolute;
	top:400px;
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
</style>
</head>
<body onload="">
<div class="menu">
<a href="index.php" class="link"><b>Home</b></a>
<a href="login.php" target="_self" class="link"><b>Login</b></a>
<a class="link"><b>Register</b></a>
<a class="link"><b>Contact Us</b></a>
<a class="link"><b>About Us</b></a>
</div>
<div class="login">
<table cellspacing="5px" cellpadding="5px">
<form action="register.php" method="post">
<tr>
<td><b class="text">Enrollment-ID:</b></td>
<td ><input type="text" name="EID" class="input"></td>
</tr>
<tr>
<td><b class="text">Name:</b></td>
<td><input type="text" name="uname" class="input"></td>
<td><b class="text">Father's Name:</b></td>
<td><input type="text" name="fname" class="input"></td>
</tr>
<tr>
<td><b class="text">Password:</b></td>
<td><input type="password" name="pwd" class="input"></td>
</tr>
<tr>
<td><b class="text">Email:</b></td>
<td><input type="email" name="email" class="input"></td>
</tr>
<tr>
<td><b class="text">Course:</b></td>
<td>
<?php
$x='select * from courses';
$result=mysqli_query($con,$x); 
echo "<select name='course' class='input'>";
echo "<option disabled selected>----select----</option>";
while($row=mysqli_fetch_array($result)){
echo "<option value='$row[ccode]'>".$row["cname"]."</option>";
}
echo "</select>";
?>
</td>
<td><b class="text">Branch:</b></td>
<td><input type="text" name="branch" class="input"></td>
</tr>
<tr>
<td><b class="text">Semester:</b></td>
<td><input type="number" name="sem" class="input"></td>

</tr>
<tr>
<td><b class="text">Address:</b></td>
<td><textarea name="addr" rows=2 cols=15></textarea></td>
</tr>
<tr>
<td><b class="text">Phone No.:</b></td>
<td><input type="number" name="phn" class="input"></td>
</tr>
<center><input name="submit" type="submit" value="Register" class="btn text"></center>
</form>
</table>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$sql="Insert into users values('$_POST[EID]','$_POST[uname]','$_POST[fname]','$_POST[pwd]','$_POST[email]','$_POST[course]','$_POST[branch]','$_POST[sem]','$_POST[addr]','$_POST[phn]')";
mysqli_query($con,$sql);
echo "<h1 color='red'>".'Registered Successfully!'."</h1>";
}
?>
</body>
</html>