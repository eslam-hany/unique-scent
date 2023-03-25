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
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200&family=Cairo:wght@200;300;400;500;600&family=Dosis:wght@200;300;400&family=Manrope:wght@300&family=Montserrat+Alternates:ital,wght@0,100;1,500;1,600&family=Poppins:ital,wght@0,300;1,200&family=Tajawal:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
     *{
    --main-color:#e2ac7a;
    --secound-color:#EADDCA;
    --main-transition:0.5s;
    font-family: 'Poppins', sans-serif;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
}
ul li{
    display: inline-block;
}
body{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: sans-serif;
   background-color: whitesmoke;
}
header{
    width: 100%;
    height: 200px;
    background-color: var(--secound-color);
    
}
.navbar{
    background-color: var(--secound-color);
    position: fixed;
    width: 100%;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    z-index: 2;
   
}
.navbar .logo {
    flex: 2;
}
.navbar .logo img{
   width: 150px;
   cursor: pointer;
   margin-left: 50px;
}
.toggle{
    cursor: pointer;
}
.span{
    display: none;
}

.navbar .menu ul li{
    position: relative;
    padding: 15px;
    text-transform: capitalize;
}
.navbar .menu ul li::after{
    position: absolute;
    content: "";
    width: 0%;
    height: 3px;
    bottom: 0;
    left: 0;
    background-color: var(--main-color);
    transition: var(--main-transition);
}
.navbar .menu ul li:hover:after{
    width: 100%;
}
.navbar .menu ul li a {
   color: var(--main-color);
   font-size: 18px;
   font-weight: bold;
   letter-spacing: 2.7px;
}
.search{
    background-color: var(--secound-color);
   
    width: 100%;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    
}
.group {
    margin-left: 50px;
    display: flex;
    flex: 3;
    line-height: 28px;
    align-items: center;
    position: relative;
    max-width: 500px;
    top: 120px;
}
   
.input {
    width: 100%;
    height: 40px;
    line-height: 28px;
    padding: 0 1rem;
    padding-left: 2.5rem;
    border: 2px solid transparent;
    border-radius: 8px;
    outline: none;
    background-color: #f3f3f4;
    color: var(--main-color);
    transition: var(--main-transition) ease;
}
   
   .input::placeholder {
    color: var(--main-color);
   }
   
   .input:focus, input:hover {
    outline: none;
    border-color: rgba(234,76,137,0.4);
    background-color: #fff;
    box-shadow: 0 0 0 4px rgb(234 76 137 / 10%);
   }
   
@media screen and (max-width: 768px) {
    .span{
        display: block;
        margin: 10px;
        width: 40px;
        height: 3px;
        background-color: var(--main-color);
    } 
     
    .navbar .menu{
      position: absolute;
      transform: scale(0);
      top: 75px;
      right: 10px;
      border-radius: 20px;
      background-color: var(--main-color);
      transition: var(--main-transition);
}
.toggle:hover .menu{
    transform: scale(1);
    transition: var(--main-transition);
  
}
.navbar .menu ul li{
    display: block;
}
.navbar .menu ul li a{
    color: var(--secound-color);
}

.group {
    position: absolute;
    width: 50%;
    margin-left: 50px;  
}

}
   .icon {
    position: absolute;
    left: 1rem;
    fill: #9e9ea7;
    width: 1rem;
    height: 1rem;
   }

.container{
    display: inline-block;
 }
.main{
    
    padding: 50px 0;
    margin-left: 40%;
    display: grid;
    grid-template-columns:auto auto auto auto;
    gap: 20px;
    
}
.box {
    width: 230px;
  position: relative;
  padding-top: 10px;
  background: var(--main-color);
  border-radius: 10px;
  transition: all 0.5s;
  overflow: hidden;
}
.box i{
    font-size: 20px;
    float: right;
    margin-right: 5px;
    cursor: pointer;
    color: red;
}
.box img{
    width: 100%;
    height: 260px;
}
.box:hover {
  box-shadow: 5px 5px 5px 5px #212121;
  transition: all 0.5s;
}

.box .info {
  position: absolute;
  width: 100%;
  height: 15%;
  bottom: 0;
  left: 0;
  background-color: var(--secound-color);
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  display: block;
  padding-left: 10px;
  text-transform: capitalize;
  color: var(--main-color);
  font-weight: bold;
  cursor: pointer;
  transition: all 0.5s;
}

.box .info button{
    width: 90%;
    border-radius: 10px;
    outline: none;
    border: none;
    color: white;
    background-color: #E5AA70;
    font-weight: bold;
    letter-spacing: 0.1em;
    transition: .4s ease-in-out opacity,.1s ease-in-out active;
    padding: 1em;
    box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0, 0, 0, 0.5);
    cursor: pointer;
    text-transform: capitalize;
}
 
.box .info button:hover {
    opacity: 0.8;
  }
  
  .box .info button:active {
    transform: translateX(0.1em) translateY(0.1em);
    box-shadow: none;
  }
.box:hover .info {
  content: "information";
  height: 50%;
}

    </style>

</head>

<body>
<header>
        <div class="navbar">
            <div class="logo">
                <img src="images/minilogo.webp" alt="minilogo">
            </div>
            <i class="fas fa-bars"></i>
            <div class="toggle">
                <span class="span"></span>
                <span class="span"></span>
                <span class="span"></span>
                <div class="menu">
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="about.html">about</a></li>
                        <li><a href="Testimonials.html">testimonials</a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </div>
           
        </div>
        <div class="search">
            <div class="group">
                <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                    <g>
                        <path
                            d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                        </path>
                    </g>
                </svg>
                <input placeholder="Search" type="search" class="input">
            </div>
          
        </div>
    </header>
   

    <?php
        include("config.php");
        $insert="SELECT * FROM items";
        $query=mysqli_query($con,$insert);
        while($row=mysqli_fetch_array($query)){

echo "
    
        <div class='container'>
            <div class='main'>
                <div class='box'>
                    <svg class='heart-icon' id='my-element' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 3512 512' fill='#fff'>
                    <path d='M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z'/>
                    </svg>
                    <img name='image' src='$row[image]'>
                    <div class='info'>
                        <p name='name'>$row[name]</p>
                        <p name='price'>$row[price]$</p>
                        <button name='add' class='btn' id='cartBtn'>Add to cart</button>
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