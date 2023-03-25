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
    <center>
        <main>
            <img src="images/logo.webp" alt="logo">
            <form class="form" method="POST" action="uploaditem.php" enctype="multipart/form-data">
                    <p class="heading">Insert product</p>
                    <div class="field">
                        <input type="text" name="name" class="input" placeholder="Product Name" autocomplete="off">
                    </div>
                    <div class="field">
                        <input type="text" name="price" class="input" placeholder="Product Price" autocomplete="off">
                    </div>
                    <div class="btn1">
                        <input type="file" id="file" name='image' style="display: none;">
                        <label class="btn" for="file">Insert photo</label>
                        <button  class="btn"  name="add">Add</button>
                    </div>
                    <a href="admin.php" class="heading" >All products</a>
            
            </form>   
        </main>
    </center>
</body>
</html>