<?php
include "adminheader.php";
$email=$_REQUEST['q'];
$sql="delete from admin where email='$email'";
mysqli_query($conn,$sql);
header("location:view_admin.php");