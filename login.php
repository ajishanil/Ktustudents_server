<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Ktu Students</title>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/reactjs/redux/master/logo/logo.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="https://www.digitalplatforms.co.za/wp-content/uploads/2015/11/Website-Design-Background.png" style= "background-size: 100%;">
  <img src="http://1.bp.blogspot.com/-t7xws0CYdWo/VlCcSDHeoHI/AAAAAAAAMz8/QwOQfWJyXzU/s500/logo_favcon.png" alt="Mountain View"></img>
<div class="topnav" id="myTopnav">
<a href="index.php"><font face="Comic Sans MS"><b>Ktu Students</b></font></a>  
  <a href="index.php" class="active"><font face="helvetica">Home</font></a>

<div class="dropdown">
    <button class="dropbtn"><font face="helvetica">Syllabus</font>
          <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><font face="Comic Sans MS">S1</font></a>
      <a href="#"><font face="Comic Sans MS">S2</font></a>
      <a href="#"><font face="Comic Sans MS">S3</font></a>
      <a href="#"><font face="Comic Sans MS">S4</font></a>
      <a href="#"><font face="Comic Sans MS">S5</font></a>
      <a href="#"><font face="Comic Sans MS">S6</font></a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn"><font face="helvetica">Text Books</font>
          <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><font face="Comic Sans MS">S1 And S2</font></a>
      <a href="#"><font face="Comic Sans MS">S3 And S4</font></a>
      <a href="#"><font face="Comic Sans MS">S5 and S6</font></a>
      <a href="#"><font face="Comic Sans MS">Buy</font></a>
      <a href="#"><font face="Comic Sans MS">Sell</font></a>
      
    </div>
  </div> 


<div class="dropdown">
    <button class="dropbtn"><font face="helvetica">Notes</font>
          <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><font face="Comic Sans MS">S1 And S2</font></a>
      <a href="#"><font face="Comic Sans MS">S3 And S4</font></a>
      <a href="#"><font face="Comic Sans MS">S5 and S6</font></a>
      <a href="#"><font face="Comic Sans MS">Upload</font></a>
     
      
    </div>
  </div> 



<div class="dropdown">
    <button class="dropbtn"><font face="helvetica">Question Papers</font>
          <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#"><font face="Comic Sans MS">Model</font></a>
      <a href="#"><font face="Comic Sans MS">Previos Year</font></a>
      <a href="#"><font face="Comic Sans MS">Solved</font></a>
      
      
    </div>
  </div> 

  <a href="https://ktu.edu.in/home.htm"><font face="helvetica">News</font></a>
  <a href="http://www.ktustudents.in/p/contact-us.html"><font face="helvetica">Contact</font></a>
  <a href="http://www.ktustudents.in/2015/08/about-ktu.html"><font face="helvetica">About</font></a>
  <input type="text" placeholder="Search..."></input>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
   <a href="login.php"><font face="helvetica" color="red">LogIn</font></a>

</div>


<style type="text/css">


.card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 200px;
    margin: auto;
    text-align: center;
}

.title {
    color: black;
    font-size: 18px;
}

button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

.footer a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}

button:hover, a:hover {
    opacity: 0.7;
}




body{
      background-repeat: no-repeat;
    background-attachment: fixed;
}
  .footer {
    background-color: grey;
    margin-top: 100%
  bottom: 3px;
  position:absolute;
  opacity: 0.8;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 130px;
  
}

  .dropdown {
       float: left;
       overflow: hidden;
  
}


/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #5DADE2;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
.topnav input[type=text] {
    float: right;
    padding: 6px;
    border: 1px solid #ccc;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
}

.navbar-brand{
   background-color: #333;
    overflow: hidden;
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;}
.topnav {

    background-color: #333;
    overflow: hidden;
}


.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}


.active {
    background-color: #4CAF50;
    color: white;
}

.topnav .icon {
     display: none;
        }
  
  /* Below line is used for online Google font */
@import url(http://fonts.googleapis.com/css?family=Raleway);

.logcontainer h2{ 
padding: 30px 35px;
margin: -10px -50px;
text-align:center;
border-radius: 10px 10px 0 0;
}

div.logcontainer{

width: 900px;
height: 610px;
margin:65px auto;
font-family: 'Raleway', sans-serif;
}
div.logmain{
  background-image: url("http://ncmm.org/wordpress/wp-content/uploads/2016/04/grey-website-background-illusionapparel2-768x480.jpg");

width: 300px;
padding: 10px 50px 25px;
border: 2px solid gray;
border-radius: 10px;
font-family: raleway;
float:left;
margin-left:30%;
margin-top:1%;
}
.logcontainer input[type=text],input[type=password]{
width: 100%;
height: 30px;
padding: 5px;
margin-bottom: 25px;
margin-top: 5px;
border: 3px solid #ccc;
color: #4f4f4f;
font-size: 16px;
border-radius: 5px;
}
.logcontainer label{
color: #D6D6D6  ;
text-shadow: 0 1px 0 #fff;
font-size: 18px;

}

.note{
color:white;
}
.valid{
color:#D6D6D6   ;
}

.btn{
font-size: 16px;
margin-left: 25%;
background: #6BF477  ;
border: 3px ;
color: #4E4D4B;
font-weight: bold;
cursor: pointer;
width: 50%;
border-radius: 8px;
padding: 10px 0;
outline:none;
}
.btn:hover{
background: linear-gradient(#6BF477  5%, white 100%);
 }
 .registertext a
{
  color: grey;
}
</style>




<div class="logcontainer">
  <div class="logmain">

  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <div class="registertext"><br/>
  	<p ><a href="#forgot" ><font face = "Verdana" size="3">Forgot Password</font></a>&nbsp&nbsp&nbsp&nbsp&nbsp<a href="register.php"><font face = "Verdana" size="3"> Register Account</font></a></p>
  </div>
  </form>
</div>
</div>





<footer class="footer">
  <div id="share-buttons" align="middle">
    
     
    <!-- Facebook -->
    <a href="https://www.facebook.com/ajish.anil.5">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
    
    <!-- Google+ -->
    <a href="https://plus.google.com/share?url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
    
    <!-- LinkedIn -->
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://simplesharebuttons.com" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
    
    
    <!-- Tumblr-->
    <a href="http://www.tumblr.com/share/link?url=https://simplesharebuttons.com&amp;title=Simple Share Buttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
    </a>
     
    <!-- Twitter -->
    <a href="https://twitter.com/share?url=https://simplesharebuttons.com&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
    
   

</div>
     <div class="text-muted" align="center"><font face = "Comic sans MS"><p >Posted by:Ajish Anil</p>
      <p>Contact information: <a href="ajishanil50@gmail.com">
  Ajishanil50@gmail.com</a></p></div></font>
  
     
    </footer>



</body>
</html>