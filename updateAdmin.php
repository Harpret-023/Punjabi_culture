<?php
include "adminheader.php";

$email = $_POST['email'];
$name = $_POST['name'];
$type = $_POST['type'];
$sql="UPDATE admin SET name='$name',type='$type' WHERE email='$email'";
mysqli_query($conn,$sql);
header("location:view_admin.php");
