<?php
$f=$_POST['firstname'];
$l=$_POST['lastname'];
$e=$_POST['email'];
$p=$_POST['phone'];
$m=$_POST['message'];

$con=mysqli_connect('localhost','root','','form');

$ins="insert into contactus"."(firstname,lastname,email,phone,message)"."values('$f',
'$l','$e','$p','$m')";

if(mysqli_query($con,$ins))
echo "Record is inserted";
else
alert("Record Not Inserted");


?>