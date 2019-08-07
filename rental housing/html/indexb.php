<!doctype html>
<html>
<head>
<meta name="author"content="himanshu" />
<meta name="description"content="house Rental system" />
<meta name="keywords"content="give ur keyword for SEO" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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

h2{ background-color:#44147f;
	padding:2% 2%;
	color:hotpink; }
.menu ul
{
list-style-type:none;

    background-color:#a3b0c6;
	padding:1% 1%;
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
width:50%;
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
padding:2%;
background-color:darkblue;
color:white;
border:none;
margin-left:21%;
}

.main .booking-details input[type='submit']:hover{

box-shadow:0 0  7px 5px black;
}


.main .booking-details input[type='reset']:hover{

box-shadow:0 0 7px 5px red;
}



.main .booking-details input[type='reset']
{
padding:2%;
background-color:darkred;
color:white;
border:none;
}




/*css for footer*/

.footer
{
background-color:darkblue;
color:white;
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



.search-container {
  float: right;
}

.search-container input[type=text] {
	background-color:#ddd0eds;
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

 .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .search-container {
    float: none;
  }
  .search-container input[type=text], .search-container button {
    float: right;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .search-container input[type=text] {
    border: 1px solid #ccc;  
  }









</style>

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="../slider/engine1/style.css" />
<script type="text/javascript" src="../slider/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->



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
<a href="indexb.php"><li>Home</li></a>
<a href="about.html"><li>About Us</li></a>
<a href="#"><li>Houses</li></a>
<a href="contact.html"><li>Contact Us</li></a>
<a href="logi.php"><li>Log In</li></a>


<div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">

<button type="submit"> <a href="action.php"><img src="../images/search.jpg" width=30px height=30px></a> </button>
    </form>
  </div>

</ul>
</div>
</nav>
<!--Menu Ends Here-->


<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="../slider/data1/images/13.jpg" alt="Afordable Houses" title="Afordable Houses" id="wows1_0"/></li>
		<li><img src="../slider/data1/images/15.jpg" alt="Luxurious Houses" title="Luxurious Houses" id="wows1_1"/></li>
		<li><img src="../slider/data1/images/16.jpg" alt="Best Environment" title="Best Environment" id="wows1_2"/></li>
		<li><img src="../slider/data1/images/17.jpg" alt="Best Houses for rent" title="Best Houses for rent" id="wows1_3"/></li>
		<li><img src="../slider/data1/images/20.jpg" alt="Best Furnishment" title="Best Furnishment" id="wows1_4"/></li>
		<li><img src="../slider/data1/images/2.jpg" alt="Luxurious Houses At Reasonable Price" title="Luxurious Houses At Reasonable Price" id="wows1_5"/></li>
		<li><img src="../slider/data1/images/4.jpg" alt="Royal Look" title="Royal Look" id="wows1_6"/></li>
		<li><a href="http://wowslider.com"><img src="../slider/data1/images/5.jpg" alt="http://wowslider.com/" title="Smart Houses" id="wows1_7"/></a></li>
		<li><img src="../slider/data1/images/8.jpg" alt="Top Rated Renting Houses" title="Top Rated Renting Houses" id="wows1_8"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Afordable Houses"><span><img src="../slider/data1/tooltips/13.jpg" alt="Afordable Houses"/>1</span></a>
		<a href="#" title="Luxurious Houses"><span><img src="../slider/data1/tooltips/15.jpg" alt="Luxurious Houses"/>2</span></a>
		<a href="#" title="Best Environment"><span><img src="../slider/data1/tooltips/16.jpg" alt="Best Environment"/>3</span></a>
		<a href="#" title="Best Houses for rent"><span><img src="../slider/data1/tooltips/17.jpg" alt="Best Houses for rent"/>4</span></a>
		<a href="#" title="Best Furnishment"><span><img src="../slider/data1/tooltips/20.jpg" alt="Best Furnishment"/>5</span></a>
		<a href="#" title="Luxurious Houses At Reasonable Price"><span><img src="../slider/data1/tooltips/2.jpg" alt="Luxurious Houses At Reasonable Price"/>6</span></a>
		<a href="#" title="Royal Look"><span><img src="../slider/data1/tooltips/4.jpg" alt="Royal Look"/>7</span></a>
		<a href="#" title="Smart Houses"><span><img src="../slider/data1/tooltips/5.jpg" alt="Smart Houses"/>8</span></a>
		<a href="#" title="Top Rated Renting Houses"><span><img src="../slider/data1/tooltips/8.jpg" alt="Top Rated Renting Houses"/>9</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">http://wowslider.com/</a> by WOWSlider.com v8.7</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="../slider/engine1/wowslider.js"></script>
<script type="text/javascript" src="../slider/engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->




<!--Main Body  Starts here-->
<div class="main">
<div class="wrapper">
<h2>Recently Added</h2>

<!--Displaying Recently Added Houses in boxes-->

<div class="clearfix">

<div class="houses">
<img src="../images/1.JPG" >

<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>

<a href ="book.php">
<button type="button" class="btn-book">Book House</button>
</a>
</div>

<div class="houses">
<img src="../images/2.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<a href ="houseform.php">
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/3.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/4.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/5.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/6.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/7.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/8.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

</div>

<h2>Luxurious houses</h2>

<!--Displaying Luxurious  Houses in boxes-->

<div class="clearfix">

<div class="houses">
<img src="../images/12.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/16.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/15.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>

<div class="houses">
<img src="../images/16.JPG" >
<span class="House-title">karan johar house</span></br>
<span class="House-added">Added Date:1/01/2018</span></br>
<span class="House-location">Location:clement town ,dehradun</span></br>
<button type="button" class="btn-book">Book House</button>
</div>


</div>


</div>

</div>

<footer class="footer">
<div class="wrapper">
<p>&copy:<a href="#">House Rental System</a>By Himanshu Jaraut</p>
</div>

</footer>

</body>
</html>