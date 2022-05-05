<?php
session_start();
include '../dbcon.php';

$name=$_POST['txtName'];
$txtAge=$_POST['txtAge'];
$txtcity=$_POST['txtcity'];
$cmob=$_POST['cmob'];
$txtAddress=$_POST['txtAddress'];
$cemail=$_POST['cemail'];

$sql=  mysqli_query($con,"update registration set name='$name',ADDRESS='$txtAddress',CITY='$txtcity',AGE='$txtAge',PHNO='$cmob' where EMAIL='".$_SESSION['email']."'");

if(!$sql)
{
//    die('Error'.mysqli_error());
}
echo '<script>window.location="EditProfile.php"</script>';
?>
