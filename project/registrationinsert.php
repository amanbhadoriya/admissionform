<?php
session_start();
include"indexcon.php";
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['phone'];
$filename=$_FILES['image']['name'];

$tmpname=$_FILES['image']['tmp_name'];
$file="upload/" .$filename;

move_uploaded_file($tmpname, $file);
$query= mysqli_query($con,"select * from user where email ='$b'");
  if(mysqli_num_rows($query))
  {
     // echo " Email is alreday use";
     $_SESSION['error']='Email is alreday use';
    header('location:index.php');
  }
else
  {
$data="insert into user(name,email,password,phone,image)value('$a','$b','$c','$d','$file')";
$result=mysqli_query($con,$data);
if ($result) {
  header('location:index.php');
}
else
{
  echo"no data insert";
}
}
?>