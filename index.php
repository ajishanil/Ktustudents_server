<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ktu Students</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<link rel="shortcut icon" href="https://raw.githubusercontent.com/reactjs/redux/master/logo/logo.png" />
<link rel="stylesheet" type="text/css" href="index.css">
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
   <a href="index.php?logout='1'"><font face="helvetica" color="red">LogOut</font></a>


</div>




<style>
.card {
    margin-left: 90%;
    box-shadow: 0 9px 10px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 110px;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.9);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
</style>
</head>
<body>




<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

<div class="card">
  <img src="https://www.boukrima.com/assets/img/photo.png" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b><font color="white"><strong><?php echo $_SESSION['username']; ?></strong></font></b></h4>
  </div>
</div>

      <p><font color="white" face="Comic Sans MS"> Welcome <strong><?php echo $_SESSION['username']; ?></strong></font></p>
   
    <?php endif ?>
</div>

<div class="card1">
  <img src="http://vbu.ac.in/wp-content/uploads/2015/08/books-2.png" alt="John" style="width:100%"></img>
  <h1>Book Name</h1>
  <p class="title">Author</p>
  <p>About</p>
   
  <p><button>Download</button></p>
  
</div>

<br/><br/><br/>


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
     <div class="text-muted" align="center"><p>Posted by:Ajish Anil</p>
      <p>Contact information: <a href="ajishanil50@gmail.com">
  Ajishanil50@gmail.com</a></p></div>
  
     
    </footer>




		
</body>
</html>