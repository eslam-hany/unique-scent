<?php

include('config.php');
$id=$_GET['id'];
$del="DELETE FROM items WHERE id=$id";
mysqli_query($con,$del);
header('location:admin.php');

?>