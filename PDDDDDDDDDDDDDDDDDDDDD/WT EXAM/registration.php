<?php
$host="localhost";
$user="root";
$pwd="";
$con=mysqli_connect($host,$user,$pwd,'form');
if(!$con)
die("could not connect".mysqli_error());
else
echo "successfully connect";



if(isset($_POST['submit']))
{
    $f=$_POST['firstname'];
    $m=$_POST['middlename'];
    $l=$_POST['lastname'];
    $c=$_POST['course'];
    $ct=$_POST['category'];
    $g=$_POST['gender'];
    $p=$_POST['phone'];
    $a=$_POST['address'];
    $e=$_POST['email'];
    $b=$_POST['dob'];
    $p=$_POST['percentile'];
    $ins="Insert into vitregistration"."(FirstName,MiddleName,LastName,Course,Category,Gender,Phone,Address,Email,DOB,MHTCET)"." VALUES('$f','$m',
    '$l','$c','$ct','$g','$p','$a','$e','$b','$p')";

    if(mysqli_query($con,$ins))
    echo"Record Inserted";
    else
    echo"Record Not Inserted";
       
}

?>