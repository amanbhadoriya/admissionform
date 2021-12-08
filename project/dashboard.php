<?php 
include 'session.php';


 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--icons lin--->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="">
         .navbar{
    background-color: #20c997;
    }
    .nav-link{
      margin-bottom: -3px;
      color: white; 
      font-size: 19px;
    }
.b{

    height:63px;
    width: 140px;
    border-style: #20c997;
}
body{
        background: url('1.png');
        background-repeat:  no-repeat;
        background-position: ;
        background-size: 100%;
        

    }


    </style>


</head>
<body>
    <!-----------------------------nav bar start------------------------------------------------>
    <nav class="navbar navbar-expand-md navbar-danger fixed-top" >
  <div class="container-fluid">

    <a href="" class="navbar-brand">
      <img src="logo.png" style="width:100px; height: 50px;" class="web-logo">
    </a>
    <h5 style="color: darkgreen; font-size: 19px; -13px;">Welcome   <?php echo $_SESSION['n']; ?></h5>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#pn">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id=pn>
    <ul class="navbar-nav ms-auto">
      <li><a href="index.php" class="nav-link " style="">Home</a></li>
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
<!------------------btech form---------------------------------------->
<?php
include 'indexcon.php';
$n = $_SESSION['n'];
$e = $_SESSION['e'];
$data_btech = "select * from btech where name = '$n' OR email = '$e'";
$result = mysqli_query($con, $data_btech);
$total = mysqli_num_rows($result);
$a = mysqli_fetch_array($result);
if($total==1){
  $name_reg = $a['name'];
  $email_reg = $a['email'];
  $phone_reg = $a['phone'];
  $ten_reg=$a['ten'];
  $tweleve_reg= $a['tweleve'];
  $image=$a['image']



  ?>

<center>
    <a href="" class="btn btn-danger b " data-bs-toggle="modal" data-bs-target="#btechreg" style="font-size: 20px; margin-top:100px; width: 250px;text-align: center;">Display your btech.form</a><br>
 </center>


  <div class="modal fade" id="btechreg">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header" style="background-color: white">
        <h5 class="modal-title">Btech Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background: #20c997;">
        <form >
          <div class="mb-3">
            <label><b>name:</b></label>
            <p> <?php echo $name_reg; ?></p>
          </div>
          <div class="mb-3">
            <label><b>email:</b></label>
             <p> <?php echo $email_reg; ?></p>
            
            
          </div>
          <div class="mb-3">
            <label for="phone">phone:</label>
             <p>  <?php echo $phone_reg; ?> </p>
          
          </div>
           <div class="mb-3">
            <label for="ten">ten percentage:</label>
             <p> <?php echo $ten_reg; ?></p>
            
          </div>
          <div class="mb-3">
            <label for="tweleve">tweleve percentage:</label>
            <p> <?php echo $tweleve_reg; ?></p>
          </div>
          <div class="mb-3">
            <label for="image">image:</label>
            <p> <?php echo $image; ?></p>
          </div>
          <button class="btn btn-primary">Submit</button>  
          <a ><button class="btn btn-danger" style="float:right;" formaction="btechedit.php">Edit</button></a>
        </form>
         </div><!-- modal body--->
  </div><!---model content end=--->
</div>
<!---model dialog end--->   

  </div><!---modal end--->
<?php }
else{
 


?><!-- Button trigger modal -->
 <center><a href="" class="btn btn-info b" data-bs-toggle="modal" data-bs-target="#btech" style="font-size: 40px; margin-top:70px">btech</a><br></center>

<div class="modal fade" id="btech">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header" style="background-color: white">
        <h5 class="modal-title">Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background: #20c997;">
        <form method="post" action="btechinsert.php" id="frm" enctype="multipart/form-data">
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
         </div><!-- modal body--->
  </div><!---model content end=--->
</div>
<!---model dialog end--->   

  </div><!---modal end---><?php } ?>
<!-------------------------------btech form end--------------------------------------->


<!----------------------------------mca form start----------------------------->
<?php
$data_btech = "select * from mca where name = '$n' OR email = '$e'";
$result = mysqli_query($con, $data_btech);
$total = mysqli_num_rows($result);
$a = mysqli_fetch_array($result);
if($total==1){
  $name_reg1 = $a['name'];
  $email_reg1 = $a['email'];
  $phone_reg1 = $a['phone'];
  $ten_reg1=$a['ten'];
  $tweleve_reg1= $a['tweleve'];
  $bca_reg = $a['bca'];
  $image2 = $a['image'];



  ?>

  <center>
    <a href="" class="btn btn-danger b" data-bs-toggle="modal" data-bs-target="#mcareg" style="font-size: 20px; margin-top:100px; width: 250px;">Display your Mca. form</a><br>
 </center>
  <!---mca model start---->
  <div class="modal fade" id="mcareg">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header" style="background-color: white">
        <h5 class="modal-title">Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background: #20c997;">
        <form>
          <div class="mb-3">
            <label><b>name:</b></label>
             <p> <?php echo $name_reg1; ?></p>
          </div>
          <div class="mb-3">
            <label><b>email:</b></label>
             <p> <?php echo $email_reg1; ?></p>
          </div>
          <div class="mb-3">
            <label for="phone">phone:</label>
             <p> <?php echo $phone_reg1; ?></p>
           
          </div>
           <div class="mb-3">
            <label for="ten">ten percentage:</label>
             <p> <?php echo $ten_reg1; ?></p>
          </div>
          <div class="mb-3">
            <label for="tweleve">tweleve percentage:</label>
             <p> <?php echo $tweleve_reg1; ?></p>
          </div>
          <div class="mb-3">
            <label for="bca">bca percentage:</label>
             <p> <?php echo $bca_reg; ?></p>
          </div>
          <div class="mb-3">
            <label for="file">image:</label>
             <p> <?php echo $image2; ?></p>

          </div><br>
          <button class="btn btn-primary">Submit</button>
          <a ><button class="btn btn-danger" style="float:right;" formaction="bcaedit.php">Edit</button></a>  
        </form>
         </div><!-- modal body--->
  </div><!---model content end=--->
</div>
<!---model dialog end--->   

  </div><!---modal end--->
  <?php }
else{
 


?>
<center><a href=""  class="btn btn-info b" data-bs-toggle="modal" data-bs-target="#mca" style="font-size: 40px; margin-top:100px">MCA</a></center><br>
<div class="modal fade" id="mca">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header" style="background-color: white">
        <h5 class="modal-title">Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background: #20c997;">
        <form method="post" action="mbainsert.php" id="frm" enctype="multipart/form-data">
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
            <label for="bca">bca percentage:</label>
            <input type="Percentage" name="bba" class="form-control" placeholder="Enter your bba Percentage">
          </div>
          <div class="mb-3">
            <label for="file">image</label>
            <input type="file" name="image" class="">

          </div><br>
          <button class="btn btn-primary">Submit</button>  
        </form>
         </div><!-- modal body--->
  </div><!---model content end=--->
</div>
<!---model dialog end--->   

  </div><!---modal end---><?php } ?>

  <!---------------------------------mca end------------------------------------->

  <!--------------------------mba start------------------------------------------>
  <?php
$data_btech = "select * from mba where name = '$n' OR email = '$e'";
$result = mysqli_query($con, $data_btech);
$total = mysqli_num_rows($result);
$a = mysqli_fetch_array($result);
if($total==1){
  $name_reg2 = $a['name'];
  $email_reg2 = $a['email'];
  $phone_reg2 = $a['phone'];
  $ten_reg2=$a['ten'];
  $tweleve_reg2= $a['tweleve'];
  $bba_reg = $a['bba'];
  $image1=$a['image'];



  ?>

  <center>
    <a href="" class="btn btn-danger b" data-bs-toggle="modal" data-bs-target="#mbareg" style="font-size: 20px; margin-top:100px; width: 250px;">Display your Mba form</a><br>
 </center>
  <!---mca model start---->
  <div class="modal fade" id="mbareg">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header" style="background-color: white">
        <h5 class="modal-title">Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background: #20c997;">
        <form>
          <div class="mb-3">
            <label><b>name:</b></label>
             <p> <?php echo $name_reg2; ?></p>
          </div>
          <div class="mb-3">
            <label><b>email:</b></label>
             <p> <?php echo $email_reg2; ?></p>
          </div>
          <div class="mb-3">
            <label for="phone">phone:</label>
             <p> <?php echo $phone_reg2; ?></p>
           
          </div>
           <div class="mb-3">
            <label for="ten">ten percentage:</label>
             <p> <?php echo $ten_reg2; ?></p>
          </div>
          <div class="mb-3">
            <label for="tweleve">tweleve percentage:</label>
             <p> <?php echo $tweleve_reg2; ?></p>
          </div>
          <div class="mb-3">
            <label for="bca">bca percentage:</label>
             <p> <?php echo $bba_reg; ?></p>
          </div>
          <div class="mb-3">
            <label for="file">image:</label>
            <p> <?php echo $image1; ?></p>

          </div><br>
          <button class="btn btn-primary">Submit</button>
          <a ><button class="btn btn-danger" style="float:right;" formaction="mbaedit.php">Edit</button></a>  
        </form>
         </div><!-- modal body--->
  </div><!---model content end=--->
</div>
<!---model dialog end--->   

  </div><!---modal end--->
  <?php }
else{
 


?>
<center><a href="" class="btn btn-info b" data-bs-toggle="modal" data-bs-target="#mba" style="font-size: 40px; margin-top:100px">MBA</a><br></center>
<div class="modal fade" id="mba">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header" style="background-color: white">
        <h5 class="modal-title">Registration Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background:#20c997;">
        <form method="post" action="mbainsert.php" id="frm" enctype="multipart/form-data">
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
            <label for="bba">bba percentage:</label>
            <input type="Percentage" name="bba" class="form-control" placeholder="Enter your bba Percentage">
          </div>
          <div class="mb-3">
            <label for="file">image:</label>
            <input type="file" name="image" class="">

          </div><br>
          <button class="btn btn-primary">Submit</button>  
        </form>
         </div><!-- modal body--->
  </div><!---model content end=--->
</div>
<!---model dialog end--->   

  </div><!---modal end---><?php } ?>




  <!-------------------------------------------mba model end----------------------->
  











</body>
</html>