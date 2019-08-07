<?php
$con=mysqli_connect("localhost","root","","house");
?>

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
font-family: arial ,sana-seriff;
line-height: 25px;
}



.wrapper{
	
	width:100%;	
	marin:0 auto;
	padding:1% 1%;
	align:left;	
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
}

.btn1
{
padding:10px 15px;
background-color:darkred;
color:white;
border:none;
position:absolute;
top:10px;
left:1220px;
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
margin: 1% 0;
}

.margin h2
{
color:purpule;
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

.main .booking-details{
width:50%;
margin:0 auto;
border:2px solid darkblue;
padding:2%;
margin:2px auto;
}


.main .booking-details h2{
margin-bottom:2%;
}


.main .booking-details .name{
width:18%;
float:left;
}

.main .booking-details input[type='text'],.main .booking-details input[type='email'],
.main .booking-details input[type='tel'],.main .booking-details textarea{
padding:1%;
margin:0.5%;
width:75%;
}

.main .booking-details input[type='submit']
{
padding:16px 25px;
background-color:darkblue;
color:white;
border:none;
//margin-left:21%;
position:absolute;
top:540px;
left:550px;

}

.main .booking-details input[type='submit']:hover{

box-shadow:0 0  7px 5px black;
}


.main .booking-details input[type='reset']:hover{

box-shadow:0 0 7px 5px red;
}



.main .booking-details input[type='reset']
{
padding:16px 25px;
background-color:darkred;
color:white;
border:none;
position:absolute;
top:540px;
left:670px;

}




/*css for footer*/

.footer
{
background-color:darkblue;
color:white;
position:absolute;
top:600px;
width:100%;
padding:5px 10px;

}


.footer p{

text-align:center;
}


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

<form action=logi.php method=post>

<input  class="btn1" type="submit" name="reset" value="Logout" placeholder="Logout" >
  
</form>



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
<a href="logi.php"><li>Log In</li></a>

</ul>
</div>
</nav>
<!--Menu Ends Here-->


<!--Main Body  Starts here-->


<div class="main">
<div class="wrapper">
<!--client signup entry-->

<div class="booking-details">
<h2>Seller Form</h2>

<form action=img.php method=post enctype=multipart/form-data>

<span class ="name">House Name </span>
<input type="text" name="house_name" placeholder="Enter house Name "/><br/>


<span class ="name">Room Set </span>
<input type="text" name="room_set" placeholder="Enter Room Set "/><br/>



<span class ="name">Monthly Rent </span>
<input type="text" name="monthly_rent" placeholder="Enter monthly rent "/><br/>



<span class ="name">Contact no. </span>
<input type="tel" name="contact" placeholder="Enter Contact No. "/><br/>



<span class ="name">Address </span>
<textarea name="address"placeholder="Your Address Please"></textarea><br/>

<span class ="name">Landmark </span>
<input type="text" name="landmark" placeholder="Enter Landmark "/><br/>


<span class ="name">House No. </span>
<input type="text" name="hno" placeholder="Enter House no. "/><br/>

 Upload images: <input type="file" name="image" multiple>
  <input type="submit">


<input  type="submit" name="submit" placeholder="BOOK NOW"/>
<input  type="reset" name="reset" placeholder="RESET"/>
</form>






</div>
</div>
</div>
<!--main body ends here-->


<!--footer starts here-->


<footer class="footer">
<div class="wrapper">
<p>&copy:<a href="#">House Rental System</a>.By Himanshu Jaraut</p>
</div>

</footer>
<!--footer ends here-->
</body>
</html>