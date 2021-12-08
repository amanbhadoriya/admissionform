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
      margin-bottom: 7px;
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
    <h5 style="color: darkgreen;">Welcome   </h5>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#pn">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id=pn>
    <ul class="navbar-nav ms-auto">
      <li><a href="index.php" class="nav-link " style=""> Home</a></li>
      <li><a href="about.php" class="nav-link" style="">About</a></li>
       <li><a href="contact.php" class="nav-link" style="">Contact us</a></li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" ></a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left: -44px;">
            <li><a class="dropdown-item" href="logout.php" style="color: grey; border-radius: 10px; ">Signout</a></li>
        </li>   
       
     
 </ul> 
 
  </div><!-------------------------collapse end---------------------------->
  </div><!-------------------------------------------container-fluid------------------------------------------------------>
</nav><!--------------------------------------nav end--------------------------------------------><br><br><br><br><br>
<div class="container">
    <table class="table table-bordered text-center" style="background: #20c997;">
      <tr>
        <th colspan="7" class="text-black" style="background:white;">Data Display</th>
      </tr>
      <tr style="background:lightblue;">
        
        <th >S.NO.</th>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>10%</th>
        <th>12%</th>
        <th>image</th>
        
      </tr>
      <?php
      $i=1; 
      include "indexcon.php";
      //$data = "select  * from btech order by id desc";
      $data= "select * from user   join btech on user.email = btech.email";
      $result = mysqli_query($con,$data);
      

      while($a=mysqli_fetch_array($result))
    {
      
        

      ?>
      <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $a['name'] ?></td>
        <td><?php echo $a['email'] ?></td>
        <td><?php echo $a['phone'] ?></td>
        <td><?php echo $a['ten'] ?></td>
        <td><?php echo $a['tweleve'] ?></td>
        <td><img src="<?php echo $a['image'] ?> " style="width: 100px ; height: 100px; border-radius: 20px;"></td>
      </tr>
    <?php  
      } 
    ?>
    </table>
  </div>

</body>
</html>