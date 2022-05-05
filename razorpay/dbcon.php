
<?php
$con= mysqli_connect('localhost','root','');
if(!$con)
{
    die('error'.mysqli_error());
}
mysqli_select_db($con,'artgallery');
   
?>