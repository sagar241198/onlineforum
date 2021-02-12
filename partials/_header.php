<?php
include 'partials/_dbconnect.php';
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">iDisscuss</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="partials/_About.php">About</a>
      </li> 
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Top Categories
       </a>';
      $sql="SELECT `categories_name` FROM `catetories`LIMIT 3 ";
      $result=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($result);
        if($num >0) {
      echo'<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
      while($rows=mysqli_fetch_assoc($result)){
      $name=$rows['categories_name'];
      echo  '<a class="dropdown-item" href="#">'.$name.'</a> ';
      }
        }
     echo '</div><li class="nav-item">
        <a class="nav-link " href="partails/_contact.php">Contact</a>
      </li></ul>';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  echo'
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <b class="text-light ml-2">'.$_SESSION['usermail'].'</b></form> 
      <a href="partials/_logout.php" class="btn btn-outline-success ml-2 my-2 my-sm-0"  >logout</a>
      ';
   }
   else{
      echo
      '  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
    <button class="btn btn-outline-success ml-2 my-2 my-sm-0" data-toggle="modal" data-target="#loginmodal" >login</button>
    <button class="btn btn-outline-success ml-2 my-2 my-sm-0" data-toggle="modal" data-target="#signupmodal" >SignUp</button>
    ';
   }
   echo ' </div></nav>';
 include 'partials/_loginmodal.php'; 
 include 'partials/_signupmodal.php'; 
//  include 'partials/_handlerlogin.php';

if(isset($_GET['error']) && $_GET['error']==true)
{
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <img src="img/error.jpg" alt="" width="40" height="30" class="pl-2">
  <strong>  </strong> You have typped wrong password or email..!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

if(isset($_GET['loginerror']) && $_GET['loginerror']==true)
{
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <img src="img/error.jpg" alt="" width="40" height="30" class="pl-2">
  <strong>  </strong> sorry this email does not exist.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
if(isset($_GET['signupsuccessfull']) && $_GET['signupsuccessfull']==false){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <img src="img/done.jpg" alt="" width="40" height="30" class="pl-2">
  <strong>WELCOME   '.$_GET['name'].' !</strong> You have signup successfully.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

 ?>