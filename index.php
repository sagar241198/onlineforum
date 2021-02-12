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
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>WELCOME...'. $_SESSION['username'].'</strong> You have logged in successfully.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
  }

?>



    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slid1.jpg" width="700" height="400" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slid2.jpg" width="700" height="400" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slid3.jpg" width="700" height="400" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div class="container ">
        <h4 class="text-center my-4">iDisscuss-Categories</h4>
        <div class="row ">

            <?php 
           
            // echo $name;
        $sql = "SELECT*FROM `catetories`";

        $result =mysqli_query($conn,$sql);
      
        while($rows=mysqli_fetch_assoc($result))
        {
            $name =$rows['categories_name'];
            $desc=$rows['categories_descr.'];
            $id=$rows['categories_id'];
            // $name1=$_GET['username'];
            // echo $rows['categories_name'];
          echo ' <div class="card col-dm-4  ml-5 my-2" style="width: 18rem;">
          <img class="card-img-top" src="img/slid1.jpg" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title"><a href="Threadlist.php?catid='.$id.'">'.$name.'</h5>
              <p class="card-text">'.substr($desc,0,40).'...</p>
              <a href="Threadlist.php?catid='.$id.'" class="btn btn-primary">Go on  Disscussion</a>
          </div>
      </div>';

        }

        ?>
            <?php include 'partials/_loginmodal.php'; 
 include 'partials/_signupmodal.php'; ?>
        </div>
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