<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unique scent</title>
    <link rel="icon" href="images/logo.webp">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('config.php'); ?>
    <center>
        <main>
            <img src="images/logo.webp" alt="logo">
            <form class="form" method="POST" action="admin.php">
                <input name="user_name" type="text" class="input" placeholder="Username">
                <input type="password" class="input" placeholder="Password">
                <button name="login" class="btn">LOGIN</button>
            </form>   
        </main>
    </center>

</body>
</html>