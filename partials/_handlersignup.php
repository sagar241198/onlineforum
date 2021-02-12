<?php
 include '_dbconnect.php';
$method=$_SERVER['REQUEST_METHOD'];

$showalert=false;
if($method=="POST"){

$name=$_POST['u_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

echo $email;
$exitmail="SELECT * FROM `users` WHERE `email`='$email'";
$result=mysqli_query($conn,$exitmail);
$num=mysqli_num_rows($result);
echo $num;
if($num > 0)
{  
    $showalert='email already exist';
    header("location: /onlineforum/index.php?sorry=$showalert");
}
else{
    if($password == $cpassword)
    {
        $crypted = password_hash($password, PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` (`username`,`email`,`user_pass`) VALUES ('$name','$email', '$crypted')";
        $result=mysqli_query($conn,$sql);

        $sql="SELECT * FROM `users` WHERE `email`='$email'";
        $result=mysqli_query($conn,$sql);
        $rows=mysqli_fetch_assoc($result);
        $name=$rows['username'];
        $showalert=true;
       header("location: /onlineforum/index.php?signupsuccessfull=$showalert & name=$name");
    }
    
}
}

?>