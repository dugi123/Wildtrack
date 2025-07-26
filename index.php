<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Wild Tracks</title>
    <link rel="icon" type="image/x-icon" href="img/wildtrackslklogo.png" />
    <link rel="stylesheet" href="styles/styles.css" />
  </head>
  <body>
    <div class="background-image"></div>
    <header>
      <nav class="top-nav">
        <a class="link" href="index.php"
          ><img class="logo" src="img/wildtrackslklogo.png" alt="logo"
        /></a>
        <button class="btn menu-btn" id="menu-btn" onclick=popupmenu()>
          <img class="icon" src="img/menu_icon.png" alt="menu_icon" />
        </button>
        <ul class="top-nav-list">
          <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
          <li class="list-item"><a href="rooms.php">Tours</a></li>
          <li class="list-item"><a href="facilities.php">Facilities</a></li>
          <li class="list-item"><a href="about.php">About Us</a></li>
          <li class="list-item"><a href="contact.php">Contact</a></li>
          <?php if (isset($_SESSION['username'])) {
            include 'includes/profile.inc.php';
          }
          else {
            include 'includes/signupandlogin.inc.php';
          }
          ?>
        </ul>
      </nav>
      <nav class="mobile-nav" id="mobile-nav">
        <button onclick=popupmenu() class="btn"><img class="icon" src="img/close-icon.jpg" alt="close-icon"></button>
      <ul class="mobile-nav-list">
        <?php if (isset($_SESSION['username'])) {
          echo '<li class="list-item"><a class="profile-container" href="userprofile.php"><img class="profile" src="img/ProfileUser-black.png" alt="ProfileUser">';
          echo getUsername($conn, $_SESSION['username']);
          echo '</a></li>';
        }
        else {
          echo '<li class="list-item f-btn"><a href=login.php>Login</a></li>';
          echo '<li class="list-item f-btn"><a class=signup-btn href=signup.php>Sign up</a></li>';
        }
        ?>
        <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
        <li class="list-item"><a href="rooms.php">Tours</a></li>
        <li class="list-item"><a href="about.php">About Us</a></li>
        <li class="list-item"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    </header>
    <section class="hero-section">
      <div class="canvas"></div>
      <div class="container">
        <div class="hero__content">
          <div class="hero__text">
            <p class="hero__body">
            IMMERSE YOURSELF IN THE THRILL OF THE WILD! EXPERIENCE THE LUXURY OF NATURE’S BOUNTY WITH AN UNFORGETTABLE WILDLIFE SAFARI ADVENTURE! 🌍🦁🐘🦓
            </p>
            <h1 class="hero__heading">FIND PEACE IN THE WILD! </h1>
            <a class="rooms-link" href="rooms.php">DIVE INTO US</a>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutus__section">
      <div class="container">
        <div class="aboutus__content">
          <div class="aboutus__text">
            <span class="aboutus__title">ABOUT US</span>
            <h1 class="aboutus__heading">Wild Tracks LK</h1>
            <p class="aboutus__body p1">
            WELCOME TO OUR WILDLIFE SAFARI! We are a prime destination for nature enthusiasts seeking thrill, adventure, and unparalleled wildlife encounters. Our safari is nestled in the heart of the wilderness, offering easy access to the most diverse ecosystems, breathtaking landscapes, and exotic animal habitats. Experience the luxury of nature with us!
            </p>
            <p class="aboutus__body p2">
            WHEN IT COMES TO EMBARKING ON THE PERFECT WILDLIFE SAFARI, BE IT A LUXURY LODGE, TENTED CAMP, OR TREEHOUSE, WE’VE GOT YOU COVERED. EXPERIENCE THE WILD LIKE NEVER BEFORE!
            </p>
            <a class="aboutus__link" href="About.php">READ MORE</a>
          </div>
          <div class="aboutus__images">
            <div class="image__container">
              <img
                class="aboutus__image"
                src="img/home1.jpg"
                alt="aboutus__image"
              />
            </div>
            <div class="image__container">
              <img
                class="aboutus__image"
                src="img/home2.jpg"
                alt="aboutus__image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services__section">
      <div class="container">
        <span class="WhatWeDo__text">WHAT WE DO</span>
        <h3 class="main__services__heading">Discover Our Services</h3>
        <div class="services__grid">
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/car-parking.png"
              alt="car-parking-icon"
            />
            <h4 class="service__heading">Car Parking</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/homecookedmeals.png"
              alt="home cooked meals-icon"
            />
            <h4 class="service__heading">Hoome Cooked Meals</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/childrendaycare.jpg"
              alt="children day care-icon"
            />
            <h4 class="service__heading">Children Day Care</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/hire-driver.png"
              alt="hire-driver-icon"
            />
            <h4 class="service__heading">Hire Drivers</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img class="icon-medium" src="img/bar-icon.png" alt="bar-icon" />
            <h4 class="service__heading">Bar & Drink</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="room_type__section"> 
        <span class="WhatWeDo__text">OUR TOURS</span>
        <h3 class="room-type__heading">Featured Tours</h3>
        <div class="rooms__grid">
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/premiumtour.jpg" alt="tour-1" />
            </div>
            <div class="room__description">
              <h3 class="room-type-heading">Premium Room</h3>
              <p class="room-type-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.              </p>
              <span class="WhatWeDo__text">$3000 / Day</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/familytour.png" alt="tour-1" />
            </div>
            <div class="room__description">
              <h3 class="room-type-heading">Family Room</h3>
              <p class="room-type-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.              </p>
              <span class="WhatWeDo__text">$5000 / day</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/deluxetour.png" alt="tour-1" />
            </div>
            <div class="room__description">
              <h3 class="room-type-heading">Deluxe Room</h3>
              <p class="room-type-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.              </p>
              <span class="WhatWeDo__text">$2500 / Day</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/suitetour.jpg" alt="tour-1" />
            </div class="room__description">
            <div>
              <h3 class="room-type-heading">Suite Room</h3>
              <p class="room-type-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.              </p>
              <span class="WhatWeDo__text">$3500 / day</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
        </div>
    </section>
    <section class="testimonials__section">
      <div class="container">
        <span class="WhatWeDo__text">TESTIMONIALS</span>
        <h3 class="testimonials__section__heading">What Customers Say?</h3>
        <div class="feedback-grid">
          <div class="feedback">
            <p class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna."
            </p>
            <p class="customer_name">- Nethum</p>
          </div>
          <div class="feedback">
            <p class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna."
            </p>
            <p class="customer_name">- Sisitha</p>
          </div>
          <div class="feedback">
            <p class="comment">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna."
            </p>
            <p class="customer_name">- Prasandu</p>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer__section">
      <div class="footer__content">
        <div class="container">
          <div class="footer__description">
            <div class="about__block">
              <img class="logo" src="img/grandroyale-logo-white.png" alt="logo" />
              <p>
              Explore our safari lodge's immersive experiences and authentic amenities, delve into our rustic yet luxurious tented accommodations and intimate bush camps.
              </p>
            </div>
            <div class="contactus__block">
              <span class="contact__title">CONTACT US</span>
              <ul class="footer__contact-list">
                <li>(12) 3456789</li>
                <li>wildtrackslk@gmail.com</li>
                <li>wild Tracks Lk 123 Main Street Cityville, State 12345 Colombo</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__content">
        <div class="container">
          <div class="copyright__option">
            <ul class="copyright__option-list">
              <li><a href="contact.php">Contact</a></li>
              <li><a href="#">Terms of use</a></li>
              <li><a href="privacy.php">Privacy Policy and Refund Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/mobilenav.js"></script>
  </body>
</html>
