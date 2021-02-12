<?php
$method=$_SERVER['REQUEST_METHOD'];
include '_dbconnect.php';
$loginAlert=false;
if($method=="POST"){  
     $email=$_POST['email'];
    $passwordlogin=$_POST['password'];
    $exitmail="SELECT * FROM `users` WHERE email='$email'";
    $result=mysqli_query($conn,$exitmail);
    $num=mysqli_num_rows($result);
         if( $num == 1){
             $rows=mysqli_fetch_assoc($result);
             if(password_verify($passwordlogin,$rows['user_pass'])){
             session_start();
             $_SESSION['loggedin']=true;
             $_SESSION['usermail']=$email;
             $_SESSION['username']=$rows['username'];
             $name=$rows['username'];
            
             header("location: /onlineforum/index.php?username=$name");
             exit();
             }
             else{
                  $error=true;
               header("location: /onlineforum/index.php?error=$error");
             }
        }
              else
            {
                $loginalert="false";
                header("location: /onlineforum/index.php?loginerror=$loginalert");
               //  exit();
             } 
    
} 
?>