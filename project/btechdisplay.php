<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
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
    border-style: groove;
}
body{
        background: url('1.png');
        background-repeat: no-repeat;
        background-position: ;
        background-size: 100%;
        

    }


    </style>
<body>
	 <!-----------------------------nav bar start------------------------------------------------>
    <nav class="navbar navbar-expand-md navbar-danger fixed-top" >
  <div class="container-fluid">

    <a href="" class="navbar-brand">
      <img src="logo.png"  style="width:100px; height: 50px;" class="web-logo">
    </a>
    <h5 style="color: darkgreen;">Welcome <?php echo $_SESSION['n']; ?> </h5>
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
	<div class="container">
		<table class="table table-bordered text-center" style="background:#20c997;">
			<tr>
				<th colspan="8" class="text-black" style="background:white;">Data Display</th>
			</tr>
			<tr style="background:lightblue;">
				<th >id</th>
				<th>name</th>
				<th>email</th>
				<th>phone</th>
				<th>ten</th>
				<th>tweleve</th>
				<th>image</th>
				<th>Action</th>
			</tr>
			<?php 
			include "indexcon.php";
			$data = "select  * from btech order by id desc";
			$result = mysqli_query($con,$data);
			// echo "<pre>";
			// print_r($result);
			// die();
			//display upto this line in the browser

			$a = mysqli_fetch_array($result);//humara data ko array ke form mai lane ke liye 
			// echo "<pre>";
			// print_r($a);
			// die();

		  while($a=mysqli_fetch_array($result))
		{
			
				//  echo "<pre>";
			   //print_r($a);
			   //die(); 
			  //pura data ko showkrne ke liye while loop lagane

			






			?>
			<tr>
				<td><?php echo $a['id'] ?></td>
				<td><?php echo $a['name'] ?></td>
				<td><?php echo $a['email'] ?></td>
				<td><?php echo $a['phone'] ?></td>
				<td><?php echo $a['ten'] ?></td>
				<td><?php echo $a['tweleve'] ?></td>
				<td><img src="<?php echo $a['image'] ?>	" style="width: 100px ; height: 100px; border-radius: 20px;"></td>
				<td>
					
					<a href="btechedit.php?id=<?php echo $a['id']?>" class="btn btn-warning">Edit</a>
				</td>
			</tr>
		<?php  
		  } 
		?>
		</table>
	</div>

</body>
</html>