<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services page</title>
    <link rel="stylesheet" href="service.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
      
<body>
    <!--Navigation-->
    <style>
        nav {
            background-color: #fff;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 0.1vw 2vw;
            box-shadow: 4px 4px 20px rgba(26, 135, 150, 0.2);
            width: 100%;
    
        }

    </style>
    <nav>
        <img src="gra.png" alt="logo">
    <div class="navigation">
    <ul>
        <li><a href="welcome.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="about.php">About</a></li>

    </ul>
    </div>
    </nav>
     
    
<div class="gallery">
    <div class="content">
        <h3>Chef</h3>
        <img src="chef.jpg">
        <p>My name is Ahmed. I'm a chef. I can help you</p>
        <h6>$700.00</h6>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <button class="buy-1">Buy Now</button>
    </div>
    <div class="content">
        <h3>Cleaner</h3>
        <img src="cleaner.jpg">
        <p>My name is arwa. I'm a Cleaner. I can help you </p>
        <h6>$500.00</h6>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <button class="buy-2">Buy Now</button>
    </div>
    <div class="content">
        <h3>Nanny</h3>
        <img src="nany.jpg">
        <p>My name is imane. I'm a Nanny. I can help you </p>
        <h6>$100.00</h6>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <button class="buy-3">Buy Now</button>
    </div>

<div class="content">
        <h3>Painter</h3>
        <img src="pinter.jpg">
        <p>My name is yahya. I'm a Painter. I can help you </p>
        <h6>$900.00</h6>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <button class="buy-4">Buy Now</button>
    </div>
    <div class="content">
        <h3>Plumber</h3>
        <img src="plumber.jpg">
        <p>My name is adil. I'm a Plumber. I can help you </p>
        <h6>$200.00</h6>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star"></i></li>
        </ul>
        <button class="buy-5">Buy Now</button>
    </div>
    <div class="content">
        <h3>Electrician</h3>
        <img src="electrition.jpg">
        <p>My name is saad. I'm a Electrician. I can help you </p>
        <h6>$300.00</h6>
        <ul>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
            <li><i class="fa fa-star checked"></i></li>
        </ul>
        <button class="buy-6">Buy Now</button>
    </div>

</div>
</body>
</html>
