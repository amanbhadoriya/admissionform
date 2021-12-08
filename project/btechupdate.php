<?php  
include "indexcon.php";

echo $id = $_POST['id'];
echo $name = $_POST['name'];
echo $email = $_POST['email'];
echo $phone = $_POST['phone'];
echo $ten = $_POST['ten'];
echo $tweleve = $_POST['tweleve'];

$filename = $_FILES['image']['name'];
$tmpname  = $_FILES['image']['tmp_name'];
echo $file = "upload/" .$filename;
//echo $file;
move_uploaded_file($tmpname, $file);

//$data = " update gwl set name ='$name' , email='$email', city = '$city' , image = '$file' where id= '$id' ";
if($filename==""){
    $data = " update btech set name ='$name' , email='$email', phone = '$phone',ten='$ten',tweleve='$tweleve' where id= '$id' ";
    $result = mysqli_query($con,$data);
    if($result){
        header('location:btechdisplay.php');
    }else{
        echo 'no data inserted';
    }

}
else{
     $data = " update btech set name ='$name' , email='$email', phone = '$phone',ten='$ten',tweleve='$tweleve',image='$file' where id= '$id' ";
     $result = mysqli_query($con , $data);
     if($result){
        header('location:btechdisplay.php');

     }else{
        echo 'no data updated';
     }

}

 
?>