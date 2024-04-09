<?php
// Initialize the session
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>jobfinderhub</title>
    <link rel="stylesheet" href="style.css"><link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <!--Font Awesome Icons CDN-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"/>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</head>
      
<body>
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
    <!--Navigation-->
        <nav>
                <img src="gra.png" alt="logo">
            <div class="navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Services</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
            
    <!--    <div class="profile-dropdown">
                <div class="profile-dropdown-btn" onclick="toggle()">
                    <div class="profile-img">
                    </div>
                    <span>
                        My profile
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </span>
                </div>
                <ul class="profile-dropdown-list">
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <ion-icon name="person-circle-outline"></ion-icon>
                            Edit Profile
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <ion-icon name="mail-outline"></ion-icon>
                            Inbox
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <ion-icon name="analytics-outline"></ion-icon>
                            Analytics
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <ion-icon name="settings-outline"></ion-icon>
                            Settings
                        </a>
                    </li>
                    <li class="profile-dropdown-list-item">
                        <a href="#">
                            <ion-icon name="log-in-outline"></ion-icon>
                            Log out 
                        </a>
                    </li>
                </ul>
            </div>-->
            </div>
        </nav>
<script>
        let profileDropdownlist = document.querySelector(".profile-dropdown-list");
        let btn = document.querySelector(".profile-dropdown-btn");
    
        const toggle = () => profileDropdownlist.classList.toggle("active");
    
        window.addEventListener("click", function (e) {
            if (!btn.contains(e.target)) profileDropdownlist.classList.remove("active");
        });
</script>
    

        
        <!-- home -->
        <section id="home">
            <h2>Welcome to JobFinderHub</h2>
            <p>Where jobs meet talent. Let's get started!</p>
            
        </section>
        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="login.php">Services</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Resources</h4>
                            <ul>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="contact.html">Support</a></li>
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
</html>
