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
    <title>Contact page</title>
    <link rel="stylesheet" href="contact.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!--Navigation-->
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
    <div class="container">
        <h1> Connect With Us</h1>
        <p>We would love to respond to your queries and help you succeed.<br> Feel free to get in touch with us.</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>Sent your request</h3>
                <form>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Phone</label>
                            <input type="text" placeholder="">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="email" placeholder="">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" placeholder="">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="10" placeholder="Your Message"></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="contact-right">
                <h3>Reach Us</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>Contacttus@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>+212 612 345 678</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td> # 912 , grounf floor, casablanca<br>Some layout, Some Road</td>
                    </tr>
                </table>
            </div>
        </div>
    </div> <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="contact.php">Support</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 JobFinderHub. All rights reserved.</p>
        </div>
    </footer>
    

</body>
