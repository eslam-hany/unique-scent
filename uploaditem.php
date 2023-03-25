
<?php
include('config.php');

if(isset($_POST['add'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $image=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="images/".$image_name;
    $insert="INSERT INTO items(name,price,image) VALUES ('$name','$price','$image_up')";
    mysqli_query($con,$insert);
     
    header("location:insert.php");
 }
 

?>
