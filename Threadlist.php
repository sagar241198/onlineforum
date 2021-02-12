<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Onlineforum</title>
</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'?>
    <?php

$catid=$_GET['catid'];

$sql = "SELECT*FROM `catetories` WHERE categories_id=$catid ";

$result =mysqli_query($conn,$sql);
while($rows=mysqli_fetch_assoc($result))
{
    $c_name =$rows['categories_name'];
    $desc =$rows['categories_descr.'];
   
}
?>
    <?php

$catid=$_GET['catid'];


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
     $mail=$_SESSION['usermail'];

    $sql="SELECT * FROM `users` WHERE `email`= '$mail'";
    $result=mysqli_query($conn,$sql);
   
    $name=mysqli_fetch_assoc($result);
    
    $u_name=$name['username'];
    
    $method=$_SERVER['REQUEST_METHOD'];

   if($method=="POST")
    {
    
    $titlename=$_POST['problem'];
    $titleDiss=$_POST['disciption'];

    $sql = "SELECT*FROM `thread`";
    $result =mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    $num +=1;

    $sql=" INSERT INTO `thread` (`thread_id`, `thread_title`, `thread_desc`, `T_username`,`categories_id` , `tread_time`)
    VALUES ('$num','$titlename',' $titleDiss', '$u_name', '$catid', current_timestamp())";
       
    $result=mysqli_query($conn,$sql);

}

}
?>

    <div class="container my-4">

        
   
        <div class="jumbotron">
            <h1 class="display-4">welcome To <?php echo $c_name?><forum</h1>
            <p class="lead"><?php echo $desc?></p>
            <hr class="my-4">
            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </p>
        </div>
        
    </div>


    <!-- problem/question -->

    <div class="container my-4">

        <?php 

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
        {
            echo ' <h4>Start Discussion</h4>';
echo 
      ' <form action= '.$_SERVER['REQUEST_URI'].' method="POST">
            <div class="form-group">
                <label for="problem">Proble/title</label>
                <input type="text" class="form-control" id="problem" name="problem" aria-describedby="emailHelp"
                    placeholder="type problem/title">
            </div>
            <div class="form-group">
                <label for="disciption">problem/Disciption</label>
                <input type="text" class="form-control" id="disciption" name="disciption" placeholder="disciption">
                <small class="form-text text-muted">Eleborate your problem in short as posible</small>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>';
    }
    else{
        echo '<p class="text-success"><b>please login and participate in the disscussion.!!</b></p>';
    }
        ?>
    </div>
    <div class="container my-4">
        <h4>Browse Questions!</h4>
        <hr>
        <?php     


    $sql = "SELECT*FROM `thread` WHERE categories_id= $catid";

    $result =mysqli_query($conn,$sql);
    
    while($rows=mysqli_fetch_assoc($result))
    {
        $name =$rows['thread_title'];
        $desc=$rows['thread_desc'];
        $tid = $rows['thread_id'];
        $time=$rows['tread_time'];
        $t_u_name=$rows['T_username'];
      echo '  <ul class="list-unstyled">
            <li class="media">
                <img class="mr-3" src="user_image/user1.png" width="30" height="30" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0 mb-1"><a class="text-dark" href="thread.php?tid='.$tid.'">'.$name.' </a></h5>
                   '.$desc.' 
                </div>
                <div class="mr-1"><p class="mr-0"> posted by :'.$t_u_name.' at: <b>   '.$time.'</b></p></div>
            </li> 
            
            ';
        }
            ?>

        </ul>


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