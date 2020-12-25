<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>First Class Office Cleaning | Services</title>
        <link rel="stylesheet" href="style.css" />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
            integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
            crossorigin="anonymous"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Roboto"
            rel="stylesheet"
        />
        <link rel="icon" href="img/logo1.png" type="image/x-icon" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        
    </head>

    <body>
        <div id="header_navbar">
            <header id="header">
                <div class="header_logo">
                    <a href="index.php"
                        ><img src="img/logo1.png" alt="Name and Logo"
                    /></a>
                </div>
                <div class="header_social">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                </div>
            </header>
            <div id="navbar_drop">&#9776</div>
            <nav id="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php" class="active">Services</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>

        <div id="jumbotron_2">
            <div class="jumbotron_content">
                <h3>Our Services</h3>
                <h5>Here's What We Can Do For You</h5>
            </div>
        </div>

        <div id="main">
            <div class="main_heading">
                <h3>Get Your Dishes Done</h3>
            </div>
            <div class="main_grid">
                <div class="services_content">
                    <img src="img/dishwashing.jpg" alt="Office" />
                    <h4 class="services_h4">Monthly Dishwashing</h4>
                    <p>Rs. 10000 per month</p>
                    <a href="request.php"><button class="request">Request</button></a>
                </div>
                <div class="services_content">
                    <img src="img/dishwashing.jpg" alt="Carpet" />
                    <h4 class="services_h4">Daily Dishwashing</h4>
                    <p>Rs. 500 per day</p>
                    <a href="request.php"><button class="request">Request</button></a>
                </div>
            </div>
        </div>

        <footer>
            <div id="footer">
                <div class="footer_grid">
                    <ul class="footer_logo">
                        <a href="index.php"
                            ><img src="img/logo1.png" alt="Name and Logo"
                        /></a>
                        <li>
                            Helping Hands For You is here to help you in your needs. We are just a message
                            or a call away. Contact us.
                        </li>
                    </ul>
                    <ul>
                        <h4>Links</h4>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <ul>
                        <h4>Info</h4>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                        <li><a href="">Support</a></li>
                    </ul>
                    <div>
                        <ul>
                            <h4>Milad Street, Lahore</h4>
                        </ul>
                        <ul>
                            Call or email us
                            <li><i class="fa fa-phone"></i>+923340001264</li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                helpinghands@gmail.com
                            </li>
                        </ul>
                        <ul>
                            <h4>Follow us</h4>
                            <li>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="copyright">                    
                        <h5>&copy; 2020 Helping Hands For You</h5>                    
                </div>
            </div>
        </footer>
        <script src="main.js"></script>        
    </body>
    <script>
        $('.request').click(function() {
            var siblings = $(this).parent().siblings();
            var serviceInfo = siblings[1].textContent + " Price: " + siblings[2].textContent;
            document.cookie = "serviceInfo = " + serviceInfo;
        });
    </script>
</html>
