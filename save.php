<?php
include 'db.php';

$name=$_POST['name'];
$dob=$_POST['dob'];
$tob=$_POST['tob'];
$pob=$_POST['pob'];
$height=$_POST['height'];
$complexion=$_POST['complexion'];
$education=$_POST['education'];
$job=$_POST['job'];
$fatherName=$_POST['fatherName'];
$fatherJob=$_POST['fatherJob'];
$motherName=$_POST['motherName'];
$siblings=$_POST['siblings'];
$contactNumber=$_POST['contactNumber'];
$mailAddress=$_POST['mailAddress'];
$address=$_POST['address'];

$photo=$_FILES['photo']['name'];
$tmp=$_FILES['photo']['tmp_name'];
move_uploaded_file($tmp,"uploads/".$photo);

$conn->query("INSERT INTO biodata 
(name,dob,tob,pob,height,complexion,education,job,fatherName,fatherJob,motherName,siblings,contactNumber,mailAddress,address,photo)
VALUES 
('$name','$dob','$tob','$pob','$height','$complexion','$education','$job','$fatherName','$fatherJob','$motherName','$siblings','$contactNumber','$mailAddress','$address','$photo')");

header("Location:view.php");
?>