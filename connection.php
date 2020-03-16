<?php
error_reporting(0);
$conn=mysqli_connect("localhost","root","","punjabi_culture");
if(!$conn)
{
    die("connection failed due to".mysqli_connect_error());
}

