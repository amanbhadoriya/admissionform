<?php 
include "indexcon.php";
include "session.php";

$id = $_GET['id'];
// echo "$a";
// die();
$data = "select * from btech where id = '$id' ";
$result = mysqli_query($con,$data);
$a = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--icons lin--->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<style type="">
         .navbar{
        background-color: #20c997;
        /*border-style: groove;*/
    }
.nav-link{
      margin-bottom: -11px;
      color: white; 
      font-size: 19px;
    }
.b{
    height:63px;
    width: 140px;
    border-style: groove;
}
body{
        background: url('1.png');
        background-repeat:no-repeat;
        background-position: ;
        background-size: 100%;
        

    }
.login{
        /*border:  2px solid red;*/
        width: 450px;
        height: 550px;
        background:  #20c997;
        margin-top: -70px;
        border-style: solid;

    }


    </style>
<body>
    <!-----------------------------nav bar start------------------------------------------------>
    <nav class="navbar navbar-expand-md navbar-danger fixed-top" >
  <div class="container-fluid">

    <a href="" class="navbar-brand">
      <img src="logo.png" style="width:100%; height: 50px;" class="web-logo">
    </a>
    <h5 style="color: darkgreen;">Welcome   <?php echo $_SESSION['n']; ?></h5>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#pn">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id=pn>
    <ul class="navbar-nav ms-auto">
      <li><a href="index.php" class="nav-link " style=""> Home</a></li>
      <li><a href="about.php" class="nav-link" style="">About</a></li>
      <li><a href="contact.php" class="nav-link" style="">Contact us</a></li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" ><img src="<?php echo $_SESSION['i']; ?>" style="width: 50px; border-radius:25px;"></a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="logout.php" style="color: grey; border-radius: 10px;">Signout</a></li>
        </li>   
       
     
 </ul> 
 
  </div><!-------------------------collapse end---------------------------->
  </div><!-------------------------------------------container-fluid------------------------------------------------------>
</nav><!--------------------------------------nav end--------------------------------------------><br><br><br><br><br>
    <br><br><br>
<center>
    <form method="post" action="btechupdate.php" id="frm" enctype="multipart/form-data" class="login">
          <input type="hidden" name="id" value="<?php echo $a['id'] ?>">
          <div class="mb-3">
            <label><b>name:</b></label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $_SESSION['n']; ?>">
          </div>
          <div class="mb-3">
            <label><b>email:</b></label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $_SESSION['e']; ?>">
          </div>
          <div class="mb-3">
            <label for="phone">phone:</label>
            <input type="Phone" name="phone" class="form-control" placeholder="Enter your Phone NO." value="<?php echo $_SESSION['p']; ?>">
          </div>
           <div class="mb-3">
            <label for="ten">ten percentage:</label>
            <input type="Percentage" name="ten" class="form-control" placeholder="Enter your ten percentage">
          </div>
          <div class="mb-3">
            <label for="tweleve">tweleve percentage:</label>
            <input type="Percentage" name="tweleve" class="form-control" placeholder="Enter your Tweleve Percentage">
          </div>
          <div class="mb-3">
            <label for="file">image:</label>
            <input type="file" name="image" class="">

          </div><br>
          <button class="btn btn-primary">Submit</button>  
        </form>
</center>

</body>
</html>