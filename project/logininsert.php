<?php 
session_start();

include 'indexcon.php';
 
 $a = $_POST['email'];
 $b = $_POST['password'];
 $data = "select * from user where email='$a' &&  password='$b' ";
 $result = mysqli_query($con , $data);
  // echo "<pre>";
  // print_r($result);
  // die();
  $total = mysqli_num_rows($result);//used to return the number of rows present in the result set.
  $a = mysqli_fetch_array($result);//to fetch rows from the database and store them as an array.
 // echo "<pre>";
 // print_r($a);
 // die();
 // echo $total;

 if ($total==1){
    $_SESSION['n']= $a['name']; //here n is variable and name is fetch from login table
    $_SESSION['e']=$a['email'];
    $_SESSION['i']=$a['image'];
    $_SESSION['p']=$a['phone'];
    header('location:dashboard.php');
 }
 else{
   $_SESSION['error']= 'wrong email password';
    header('location:index.php');
 }



?>