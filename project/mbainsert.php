<?php  
include 'indexcon.php';
 
 $a = $_POST['name'];
 $b = $_POST['email'];
 $c = $_POST['phone'];
 $d = $_POST['ten'];
 $e =$_POST['tweleve'];
 $f =$_POST['bba'];
 
 $filename = $_FILES['image']['name'];
$tmpname  = $_FILES['image']['tmp_name'];
$file = "upload/" .$filename;
//echo $file;
move_uploaded_file($tmpname, $file);//move image in upload folder

$data = "insert into mba (name,email,phone,ten,tweleve,bba,image)value('$a','$b','$c','$d','$e','$f','$file')";
$result = mysqli_query($con,$data);
if($result){
	header('location:dashboard.php');
}
else{
	echo 'no data insert';
}



?>