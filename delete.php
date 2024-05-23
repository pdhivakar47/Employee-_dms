<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"employee");
$delete = $_GET['del'];


$sql = "delete from employee_dms where id = '$delete'";


if(mysqli_query($connection,$sql))
           {

            echo '<script> location.replace("home.php")</script>';  
           }
           else
           {
           echo "Some thing Error" . $connection->error;

           }

?>