<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique scent</title>
    <link rel="icon" href="images/logo.webp">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200&family=Cairo:wght@200;300;400;500;600&family=Dosis:wght@200;300;400&family=Manrope:wght@300&family=Montserrat+Alternates:ital,wght@0,100;1,500;1,600&family=Poppins:ital,wght@0,300;1,200&family=Tajawal:wght@300;400&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel="stylesheet" href="index.css">
</head>
<body>
     
            <div class = 'navbar'>
            
                <?php 
                    if(isset($_POST['login'])){
                        $user_name = $_POST['user_name'];

                        echo " <a href='#'>hi: $user_name </a>";
                    }
                ?>
               
           
            <a href='#'>all products</a>
            <a class='add' href='insert.php'>add product</a>
        </div>
         <br> <br> <br> <br> <br>
 
    <?php
    
        include("config.php");
        $insert="SELECT * FROM items";
        $query=mysqli_query($con,$insert);
        while($row=mysqli_fetch_array($query)){

            echo "
            <div class='container'>
            <div class='main'>
            <div class='box'>
            <img src='$row[image]'>
                <div class='info'>
                    <p>$row[name]</p>
                    <p>$row[price] $</p>
                    <a href='del.php?id=$row[id]'> <button class='btn'>delete</button></a>
                   
                </div>
            </div>
            </div>
          
         
                </div>
            ";
        }
    ?>
         
          
  
        
       <script src="main.js"></script>
</body>
</html>