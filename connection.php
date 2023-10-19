<?php
$servername ="localhost";
$username="root";
$password="";
$dbname="User_Details";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "";
}
else
{
    echo "Connection Failled";
}
?>
