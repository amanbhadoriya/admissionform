<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <style>
    	
    	body{
		background: url('1.png');
		background-position: center;
		background-size: cover;
		color: white;
		background-repeat:  no-repeat;


		}
		
		.login{
			/*border:  2px solid red;*/
		    width: 320px;
		    height: 377px;
		    background: transparent; /*#cbc9e121*/
 		    margin-top: 190px;
 		    transform: rotate(-11deg);
 		    margin-left: 100px;
		    
		    		
			}
		.input{
			width: 304px;
			height: 32px;
			border-radius: 24px;
			border-color: whitesmoke;
			background: white;
			margin-left: -8px;
		}
		button{
			width: 127px;
			height: 30px;
			margin-top: 5px;
			background:#3c3ccd;
			color: red;
			border: 0 65px;
			border-radius: 0 24px;
		}

		.avatar{
			width: 100px;
			height: 105px;
			border-radius: 50%;
			position: absolute;
			top: -104px;
			left: calc(50% - 50px);
			}
		.a{
			float: right;
			color: white;

		}
		.b{
			float: left;
			color: black;
			background-color: #00eecd; 
			border-radius:  20px;
			
		}
    </style>
</head>
<body>
	<center>
		<div class="login">
		     <h2>Student Login</h2>

		     <hr><br>
		
	    <form method="post" action="logininsert.php">
	    	<img src="9.jpg" class="avatar">
		    <label for="email">Email:</label>
		    <input type="text" name="email" placeholder=" Enter Email" class="input form-control">
			<br>
			
			 <label for="password">Password:</label>
			<input type="Password" name="password" placeholder="Enter Password" class="input form-control" >
			<br><br>
			<button class="b">Login</button><br>
			
		</form>
		<div class="alert">
		<?php
				    
			 if(isset($_SESSION['error']))
			 {
				echo '<div class="alert alert-danger alert-dismissible fade show col-sm-12" role="alert">
				'.$_SESSION['error'].'
  								
				</div>';
				unset($_SESSION['error']);
					 }
					 ?>
					</div>
		<a href="" class="btn  " data-bs-toggle="modal" data-bs-target="#aa" style="float:right; border-radius:  20px;background:red; height: 35px; width: 127px; margin-top: 5px; color: black; margin-left: 20px; border-color: #767676; border-top-width: 2px;">Registration</a>
	</div><!---login end-->
	     </center>

	     <!--------------- Button trigger modal -------------------------------->
<div class="modal fade" id="aa">
  <div class="modal-dialog modal-lg" > <!--modal-xl,sm,lg--->
    <div class="modal-content">
      <div class="modal-header"  ;><!---header start---->
       <center><h5 class="modal-title text-black">Registration Form</h5></center>
       <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="Close"></button>

      </div><!---modal header end--->
      <div class="modal-body" style="background: #20c997;  "><!--modal body start---->
      	<form action="registrationinsert.php" method="post" enctype="multipart/form-data" >
          <div class="mb-3">
            <label for ="name" >name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for ="email">email:</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email">
          </div>
          <div class="mb-3">
            <label for ="password">password:</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
          </div>
          
           <div class="mb-3">
            <label for ="phone">phone:</label>
            <input type="Phone" name="phone" class="form-control" placeholder="Enter your Phone NO.">
          </div>
           <div class="mb-3">
            <label>image:</label>
            <input type="file" name="image" class="">

          </div>
          <button class="btn btn-info">Submit</button>  
        </form>
        
      </div><!-- modal body end--->
  </div><!---model dialog--- end=--->
</div>
<!------------------------------------modal end-------------------------> 


</body>
</html>