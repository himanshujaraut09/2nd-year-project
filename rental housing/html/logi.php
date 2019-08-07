<!doctype html>
<html>
<head>
<meta name="author"content="himanshu" />
<meta name="description"content="house Rental system" />
<meta name="keywords"content="give ur keyword for SEO" />
<title>HOUSE RENTAL SYSTEM</title>
<style>

 *{
	padding:0 0;
	margin :0 0;
}
body
{

   
padding:0;
margin:0;
font-family: arial ,sana-seriff;
line-height: 25px;

	
  
}



.wrapper{
	
	width:100%;	
	marin:0 auto;
	padding:1% 1%;
	align:center;	
}
.clearfix:after
{
content: " ";
visibility:hidden;
display:block;
height:0;
clear:both;
}


.header
{
background-color:darkblue;
color:white;
margin:0;
}





/*css for menu*/


.menu ul
{
list-style-type:none;
 }

.menu ul a
{
color:darkblue;
text-decoration:none;
padding:1%;
}
.menu ul a:active {
  background-color: #4CAF50;
  color: white;
}


.menu ul a:hover
{
background-color:blue;
color:white;
}


.menu li
{
display:inline;
 }




/*css for main body*/


.main
{
margin: 10% 0;
}



h3 {
	font-size:25px ;
    color: orange;
    text-shadow: 4px 3px 5px black, 0 0 25px blue, 0 0 5px black;

}

h2 {
	font-size:40px ;
    color: white;
    text-shadow: 4px 3px 5px black, 0 0 25px blue, 0 0 5px darkblue;
}

.houses
{
width:22.5%;
border:1px solid grey;
margin:1%;
float:left;
text-align:center;
}

.houses:hover
{
box-shadow:0 0 3px 3px silver;
}

.houses img
{
width:100%;
}

.houses .House-title
{
font-weight:bold;
color:darkblue;
padding:1%;

}

.house-price{
font-size:120;
color:goldenrod;
padding:1%;
}

.houses .House-added {
font-weight:lighter;
font-size:90%;
color:darkblue;
padding:1%;

}

.houses .House-location{
font-weight:lighter;
font-size:90%;
color:darkblue;
padding:1%;

}

.houses .btn-book{
padding:3%;
margin:3%;
background-color:purple;
color:white;
border:none;
}

.houses .btn-book:hover{
background-color:darkblue;

}

.book-house img{
width:40%;
float:left;
margin:2% 2% 2% 0;
}

.book-house h2{
text-align:center;
margin:2%;
text-decoration:underline;
}

.book-house p{
text-align:justify;
padding:1%;
line-height:30px;
color:#394d6d;
}



.booking-details{

margin:0 auto;
border:2px solid darkblue;

    width: 600px;
    height: 300px;
    padding: 35px;

background-image: url("../images/nature.jpg");  
    background-repeat: no-repeat;
    background-position: center;
	border-radius:15%;

}


.main .booking-details h2{
margin-bottom:2%;
}
 


.main .booking-details .name{
width:26%;
float:center;

}

.main .booking-details input[type='text'],.main .booking-details input[type='email'],
.main .booking-details input[type='tel'],.main .booking-details textarea{
padding:5%;
margin:0.5%;
width:100%;
}

.btn
{
padding:16px 25px;
background-color:darkblue;
color:white;
border:none;
position:absolute;
top:370px;
left:600px;

}

.btn:hover{

box-shadow:0 0  7px 5px black;
}


.btn1:hover{

box-shadow:0 0 7px 5px red;
}



.btn1
{
padding:16px 25px;
background-color:darkred;
color:white;
border:none;
position:absolute;
top:370px;
left:700px;
}




/*css for footer*/

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: darkblue;
    color: white;
    text-align: center;
	padding:1% 1%;

.footer p a
{ color:lightblue;}


.footer p a:hover
{ 
text-decoration:none;
}



.footer p 
{ text-decoration:none;}

</style>


</head>
<body>
<header class="header">
<div class="wrapper">
<h1>HOUSE RENTAL SYSTEM</h1>
</div>
</header>
<!--header ends here-->

<!--Menu starts here-->
<nav class="menu">
<div class="wrapper">
<ul> 
<a href="index.html"><li>Home</li></a>
<a href="about.html"><li>About Us</li></a>
<a href="#"><li>Houses</li></a>
<a href="contact.html"><li>Contact Us</li></a>
</ul>
</div>
</nav>
<!--Menu Ends Here-->



<!--client Log In details entry-->
<div class="booking-details">
<center><h2> Log In</h2>

<br>
<br>
<body >
<table  cellspacing="5px" cellpadding="5px">
<form action="logi.php" method="post">
<tr>
<span class ="name"><h3>User Type </h3></span>
<select name=cat required>
<option value=buyer >Buyer</option>
<option value=seller >Seller</option>
</select>
</tr>
<br>
<tr>
<td><b class="name">Username:</b></td>
<td ><input type="text" name="uname" class="input"></td>
</tr>
<br>
<tr>
<td><b class="name">Password:</b></td>
<td><input type="password" name="pwd" class="input"></td>
</tr>

<input class=btn type="submit" name="submit" value="Login" placeholder="Log In"/>
<input  class=btn1 type="reset" name="reset" placeholder="RESET"/>

</form>

</table>
</center>
</span>
</div>
<?php
 if($_SERVER['REQUEST_METHOD']=='POST'){
if (isset($_POST['submit'])) {
if(empty($_POST['cat']) || empty($_POST['uname']) || empty($_POST['pwd']))
{
    echo "Invalid Details!";	
}
else{
$x=$_POST["uname"];
$y=$_POST["pwd"];
$c=$_POST["cat"];
$con=mysqli_connect("localhost","root","","house");
$sql="select * from person where first_name='$x' and password='$y' and type='$c'";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if($rows==1)
{ 
	if($c=='seller')
  { header("location:houseform.php");
}
else{
	header("location:indexb.php");
}
}
else{
echo"Invalid Login";
}


mysqli_close($con);
}
}
}
?>

<!--main body ends here-->


<!--footer starts here-->


<footer class="footer">
<div >
<p>&copy:<a href="#">House Rental System</a>.By Himanshu Jaraut</p>
</div>

</footer>
<!--footer ends here-->
</body>
</html>