<!-- getiing discussion /Answering the Question.. -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Discussion</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <?php

$catid=$_GET['tid'];
$sql = "SELECT*FROM `thread` WHERE thread_id =$catid ";
$result =mysqli_query($conn,$sql);
while($rows=mysqli_fetch_assoc($result))
{
    $name =$rows['thread_title'];
    $desc=$rows['thread_desc'];
    $t_u_name=$rows['T_username'];
    echo'   <div class="container my-4">
            <div class="jumbotron">
            <h3 class="display-4">   '.$name. ' </h3>
    <p class="lead"> '.$desc.'</p>
    <hr class="my-4">
   
        <p class="text-right">posted by : <b>'.$t_u_name.'</b></p>
    </p>
    </div>
    </div>';
    }
    ?>
    <!-- form for Comment -->
    <div class="container">
        <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {
      echo '  <form action='.$_SERVER['REQUEST_URI'].' method="post">
            <label for="comment">Solution for the Above Dobt/Comment</label>
            <textarea class="form-control" id="comment" name="suggestion" rows="3"
                placeholder="type some suggestion.."></textarea>
            <button type="submit" class="btn btn-success my-2">Submit</button>
        </form>';
    }
    else{
        echo '<p class="text-success"><b>please login and participate in the disscussion.!!</b></p>';
    }
        ?>
    </div>
    <div class="container">

        <h4>Comments/Suggestion</h4>
        <hr>


        <?php
        $method=$_SERVER['REQUEST_METHOD'];
       
        if($method=="POST")
        {
            $commentid=$_GET['tid'];
            // echo $commentid;
            $sql="SELECT * FROM `commenr`";
            $result=mysqli_query($conn,$sql);

           //this is for the checking the number of rows in the table 

           $num=mysqli_num_rows($result);
           $num = $num+1; 
    
    $commentsuggestion=$_POST['suggestion'];

    

    // $sql="INSERT INTO `commenr` (`sno`,`comments`,`comments_id`,`Time`) VALUES ('$num','$commentsuggestion','$commentid',current_timestamp())";

    //this is for the insertion the data into the table 
    $sql="  INSERT INTO `commenr` (`sno`, `comments`, `comments_id`, `Time`)
     VALUES (NULL, '$commentsuggestion', '$commentid', current_timestamp())";

    $result=mysqli_query($conn,$sql);

    // echo var_dump($result);

    if($result)
     {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thanks For Your Suggestion!</strong> Your Suggestion Added bellow successfully.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
     }

   }
   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
   {
    $commentid=$_GET['tid'];
    $sql="SELECT * FROM `commenr` WHERE comments_id='$commentid'";
    $result=mysqli_query($conn,$sql);

   while($rows=mysqli_fetch_assoc($result))  //this is for the displaying the data from the table to the web page
   {
     $comment=$rows['comments'];  
     $commenttime=$rows['Time'] ;
     echo '  <ul class="list-unstyled">
     <li class="media">
         <img class="mr-3" src="user_image/user1.png" width="30" height="30" alt="Generic placeholder image">
         
         <div class="media-body"> 
         <p class="mt-0 mb-1">posted by:<strong>' .$_SESSION['username']. '</strong>At '.$commenttime.'</p>
          '. $comment.'  
         </div>
     </li> 
     </ul>';
   }
   }
   else{
    $sql="SELECT * FROM `commenr`";
    $result=mysqli_query($conn,$sql);

   while($rows=mysqli_fetch_assoc($result))  //this is for the displaying the data from the table to the web page
   {
     $comment=$rows['comments'];  
     $commenttime=$rows['Time'] ;
     echo '  <ul class="list-unstyled">
     <li class="media">
         <img class="mr-3" src="user_image/user1.png" width="30" height="30" alt="Generic placeholder image">
         
         <div class="media-body"> 
         <p class="mt-0 mb-1">At '.$commenttime.'</p>
          '. $comment.'  
         </div>
     </li> 
     </ul>';
   }
   }
    
 
    ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>