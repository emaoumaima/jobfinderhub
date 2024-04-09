<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About page</title>
    <link rel="stylesheet" href="about.css"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
   <!--Navigation-->
   <nav>
    <img src="gra.png" alt="logo">
<div class="navigation">
<ul>
    <?php
        session_start(); // Start session on every page load
    ?>
    <li><a href="welcome.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="logout.php">Logout</a></li>
    <li><a href="about.php">About</a></li>
    

</ul>

    
</div>
</nav>


<div class="heading">
    <h2>About Us</h2>
    <p>Welcome to JobFinderHub, your premier destination for home maintenance services. At JobFinderHub, we specialize in connecting skilled professionals with individuals and businesses in need of top-notch home services.</p>
    <p>With our dedication to excellence and a wide range of services, we aim to make home maintenance hassle-free for everyone.</p>
</div></p>
</div>
    <div class="container">
        <div class="about">
            <div class="about-image">
                <img src="img2.jpg"></div>
            <div class="about-content">
            <p>JobFinderHub is a leading platform dedicated to connecting skilled professionals with individuals and businesses seeking top-notch home maintenance services. With a focus on reliability, quality, and convenience, JobFinderHub offers a wide range of services including repairs, construction work, professional cleaning, and household fittings. Our platform serves as a hub for both job seekers and service providers, facilitating seamless connections and ensuring satisfaction for all parties involved. Whether you're looking to hire a skilled professional for a home project or seeking employment opportunities in the home maintenance industry, JobFinderHub is your trusted partner.
                <span id="dots">...</span>
                <span id="more">Join Our platform serves as a hub for both job seekers and service providers, facilitating seamless connections and ensuring satisfaction for all parties involved. Whether you're looking to hire a skilled professional for a home project or seeking employment opportunities in the home maintenance industry, JobFinderHub is your trusted partner. Join our community today and experience the ease and efficiency of finding or offering home services with JobFinderHub.</span></p>
                <a href="#" onclick="myFunction()" id="myBtn">Read more</a>
            </div>
        </div>
        
    </div>
    <script>
        function myFunction(){
            let dots = document.getElementById('dots');
            let moreText = document.getElementById('more');
            let btnText = document.getElementById('myBtn');
            if(dots.style.display === 'none'){
                dots.style.display='inline';
                btnText.innerHTML='Read more';
                moreText.style.display='none';
            }else{
                dots.style.display='none';
                btnText.innerHTML='Read less';
                moreText.style.display='inline';
            }
        }
    </script>
     <footer>
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
</html>
