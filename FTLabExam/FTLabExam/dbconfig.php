<?php
$con=mysqli_connect("localhost","root","","employee");
if(!$con){
    echo "Database is not connected.".mysqli_connect_errno();
}
?>