<?php
include "path.php";
include (ROOT_PATH . '/app/controllers/contact.php');
require_once('includes/counter.php');  // PHP functions file

$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--==================== UNICONS ====================-->
      <link rel="stylesheet" href=" https://unicons.iconscout.com/release/v4.0.0/css/line.css"> <!-- https://unicons.iconscout.com/release/v4.0.0/css/line.css -->

        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/style.css">
        
    <title> BlueBerry Studios || Welcome  </title>
</head>
    <body>
        <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <!-- nav container -->
        <nav class="nav container">
        
        <a href="#" class="nav__logo"> BlueBerry Studios </a> 

        <!-- nav menu -->
        <div class="nav__menu" id="nav-menu">
        
        <ul class="nav__list grid">

            <li class="nav__item">
                <a href="#home" class="nav__link active-link">
                   <i class="uil uil-estate nav__icon"></i> Home
                </a>
            </li>
            <li class="nav__item">
                <a href="#about" class="nav__link">
                <i class="uil uil-user nav__icon"></i> About
                </a>
            </li>
            <li class="nav__item">
                <a href="#pricing" class="nav__link">
                <i class="uil uil-coins nav__icon"></i> Pricing
                </a>
            </li>
            <li class="nav__item">
                <a href="#gallery" class="nav__link">
                <i class="uil uil-scenery nav__icon"></i> Gallery
                </a>
            </li>
            <li class="nav__item">
                <a href="#services" class="nav__link">
                <i class="uil uil-file-alt nav__icon"></i> Services
                </a>
            </li>
            
            
            
            <li class="nav__item">
                <a href="#contact" class="nav__link">
                <i class="uil uil-message nav__icon"></i> Contact Us
                </a>
            </li>

        </ul>

        <i class="uil uil-times nav__close" id="nav-close"></i>
        </div>
        <div class="nav__btns">
        <!-- login button -->
        <a href="login.php"><i class="uil uil-lock-access nav__auth" ></i></a>
        <!-- <i class="uil uil-user-square"></i> -->
            <!-- theme change buttons -->
        <i class="uil uil-moon change-theme" id="theme-button"></i>
        <div class="nav__toggle" id="nav-toggle">
        <i class="uil uil-apps"></i> Menu
        </div>
        </div>
        </nav>
            

    </header>
                         
        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">

                    <!-- social media -->
                        <div class="home__social">
                            <a href="" target="_blank" class="home__social-icon"> 
                            <i class="uil uil-linkedin-alt"></i>

                            </a>

                            <a href="" target="_blank" class="home__social-icon"> 
                            <i class="uil uil-instagram-alt"></i>

                            </a>

                            <a href="" target="_blank" class="home__social-icon"> 
                            <i class="uil uil-facebook"></i>

                            </a>

                            <a href="" target="_blank" class="home__social-icon"> 
                            <i class="uil uil-whatsapp-alt"></i>

                            </a>
                        </div>

                        <!-- hero image -->
                        <!--  -->

                        <!-- hero text -->
                        <div class="home__data">

                        <h1 class="home__title">BlueBerry Studios</h1>

                        <h3 class="home__subtitle">
                        We Focus on simplifying the process of podcast production.
                        </h3>

                        <p class="home__description">
                        For Businesses, entrepreneurs and thought eiders.

                        </p>

                        <a href="#pricing" class="button--home button--flex">
                        Book Session<i class="uil uil-envelope-star button--home__icon"></i>
                        </a>
                        </div>
                    </div>

                    <!-- scroll down btn -->
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">

                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Scroll Down</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Us</h2>
                <span class="section__subtitle"> Introduction </span>

                <div class="about__container container grid">
                    <!-- <img src="assets/images/undraw_Profile_re_4a55.png" alt="" class="about__img"> -->

                    <div class="about__data">
                        <p class="about__description">
                        Blueberry Studios is one of the most renowned media centers in Nairobi.
                        The studio consists of 2 recording and podcasting rooms with
                        state-of-the-art hardware, plug-ins and sets that will have your projects 
                        sounding better than you could ever have imagined. 
                        The studio also has a photo / film studio, which is sure to meet your needs.
                        </p>

                        

                        <div class="about__buttons">
                            <a download="" href="#" class="button button--flex">
                                Book Audio Session<i class="uil uil-microphone button__icon"></i>

                            </a>
                            <a download="" href="#" class="button button--flex">
                                Book Audio & Video Session<i class="uil uil-video button__icon"></i>

                            </a>
                        </div>
                    </div>
                    <div>
                    <h2 class="section__title"> Opening Hours</h2><br>
                        <div class="about__info">
                        

                            <div>
                                <span class="about__info-title"> Day </span>
                                <span class="about__info-name">Monday </span>
                                <span class="about__info-name">Tuesday </span>
                                <span class="about__info-name">Wednesday </span>
                                <span class="about__info-name">Thursday </span>
                                <span class="about__info-name">Friday </span>
                                <span class="about__info-name">Saturday </span>
                                <span class="about__info-name">Sunday </span>
                            </div>

                            <div>
                                <span class="about__info-title">Time</span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                                <span class="about__info-name"> 10 A.M - 4 P.M </span>
                            </div>

                        </div>
                        </div>


                </div>

        
            </section>

            <!--==================== BREAKK SEC 1 ====================-->
            <section class="break__sec section">
            </section>

            <!--==================== PRICING ====================-->
            <section class="pricing section" id="pricing">
                <h2 class="section__title"> Packages </h2>
                <span class="section__subtitle"> Right Plan For You</span>
                <div class="plan__buttons grid">
                <h2 class="section__title"> Audio Packages </h2>
                

                </div>

                <div class="card__container grid">

                    <!--==================== CARD 1 ====================-->
                <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Kshs</span>
                        </div>
                        <span class="card__pricing-month"> 7500 </span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="assets/images/free-coin.png" alt="" class="card__header-img">
                        </div>
                        
                        <span class="card__header-subtitle"> Package </span>
                        <h1 class="card__header-title"> Entails :</h1>
                    </header>
                    <button class="card__button"> Book Now !</button>
                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Episode < 60 minutes </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Audio Recording</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Mixing and Mastering</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Flexible Booking</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Video Recording</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Video Editing</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Pro Production Support</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Teaser Video</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> 2 edit reviews </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Hosting 3 People </p>
                        </li>
                    </ul>
    
                </article>

                <!--==================== CARD 2 ====================-->
                <article class="card__content grid-card">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Kshs</span>
                        </div>
                        <span class="card__pricing-month">9000</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="assets/images/pro-coin.png" alt="" class="card__header-img">
                        </div>
    
                        <span class="card__header-subtitle">Package</span>
                        <h1 class="card__header-title">Entails :</h1>
                    </header>
                    <button class="card__button"> Book Now !</button>

                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Episode < 120 minutes </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Audio Recording</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Mixing and Mastering</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Flexible Booking</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Video Recording</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Video Editing</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Pro Production Support</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Teaser Video</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> 2 edit reviews </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Hosting 3 People </p>
                        </li>
                    </ul>
    
                </article>

                 <!--==================== CARD 3 ====================-->
                 <article class="card__content grid">
                    <div class="card__pricing">
                        <div class="card__pricing-number">
                            <span class="card__pricing-symbol">Kshs</span>
                        </div>
                        <span class="card__pricing-month"> 10000</span>
                    </div>
    
                    <header class="card__header">
                        <div class="card__header-circle grid">
                            <img src="assets/images/enterprise-coin.png" alt="" class="card__header-img">
                        </div>
    
                        <span class="card__header-subtitle">Package</span>
                        <h1 class="card__header-title">Entails :</h1>
                    </header>
                    <button class="card__button"> Book Now !</button>

                    
                    <ul class="card__list grid">
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Episode > 60 minutes </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description">Audio Recording</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Mixing and Mastering</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Flexible Booking</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Video Recording</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Video Editing</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Pro Production Support</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Teaser Video</p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> 2 edit reviews </p>
                        </li>
                        <li class="card__list-item">
                            <i class="uil uil-check card__list-icon"></i>
                            <p class="card__list-description"> Hosting 4 People </p>
                        </li>
                    </ul>
    
                </article>


                    
                </div>
            </section>

            <!--==================== BREAKK SEC 2 ====================-->
            <section class="break__sec-2 section">
            </section>

             <!--==================== GALLERY ====================-->
             <section class="gallery section" id="gallery">
                <div class="gallery__container container grid">
                    <div class="gallery__content grid">

                    <!-- social media -->
                        <div class="gallery__social">
                            <a href="" target="_blank" class="gallery__social-icon"> 
                            <i class="uil uil-linkedin-alt"></i>

                            </a>

                            <a href="" target="_blank" class="gallery__social-icon"> 
                            <i class="uil uil-instagram-alt"></i>

                            </a>

                            <a href="" target="_blank" class="gallery__social-icon"> 
                            <i class="uil uil-facebook"></i>

                            </a>

                            <a href="" target="_blank" class="gallery__social-icon"> 
                            <i class="uil uil-whatsapp-alt"></i>

                            </a>
                        </div>

                        <!-- hero image -->
                        <div class="gallery__image">
                        <image class="gallery__blob-img" src="assets/images/portfolio.png"/>


                        </div>

                        <!-- hero text -->
                        <div class="gallery__data">

                        <h1 class="gallery__title">Our Work</h1>

                        <h3 class="gallery__subtitle">
                        We Focus on simplifying the process of podcast production.
                        </h3>

                        <p class="gallery__description">
                        For Businesses, entrepreneurs and thought eiders.

                        </p>

                        <a href="#pricing" class="button--gallery button--flex">
                        View Portfolio<i class="uil uil-scenery button--home__icon"></i>
                        </a>
                        </div>
                    </div>

                </div>
            </section>


            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <h2 class="section__title">Services</h2>
                    <span class="section__subtitle">What we offer</span>
                        <div class="services__conatainer container grid">
                        <!--==================== SERVICE 1 ====================-->
                            <div class="services__content">
                                <div>
                                    <i class="uil uil-microphone services__icon"></i>
                                    <h3 class="services__title"> Recording</h3>
                                </div>
                                <span class="button button--flex button--small button--link services__button">
                                    Learn More.
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </span>

                                <div class="services__modal">
                                    <div class="services__modal-content">
                                        <h4 class="services__modal-title">Recording</h4>
                                        <i class="uil uil-times services__modal-close"></i>

                                        <ul class="services__modal-services grid">

                                            <li class="services__modal-service">
                                                <i class="uil uil-check-circle services__modal-icon"></i>
                                                <p>Whether you're recording a podcast, show, or voiceover,
                                                 we can handle it all at a small cost. We pride ourselves on the
                                                  ability to produce high-quality recordings in the most
                                                   comfortable spaces.</p>

                                            </li>                                      
   
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <!--==================== SERVICE 2 ====================-->
                            <div class="services__content">
                                <div>
                                    <i class="uil uil-sliders-v services__icon"></i>
                                    <h3 class="services__title"> Mixing & Mastering</h3>
                                </div>
                                <span class="button button--flex button--small button--link services__button">
                                    Learn More.
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </span>

                                <div class="services__modal">
                                    <div class="services__modal-content">
                                        <h4 class="services__modal-title">Mixing & Mastering</h4>
                                        <i class="uil uil-times services__modal-close"></i>

                                        <ul class="services__modal-services grid">

                                            <li class="services__modal-service">
                                                <i class="uil uil-check-circle services__modal-icon"></i>
                                                <p>The Blueberry studios are equipped with hardware and plug-ins which will
                                                    give that high quality to your projects. 
                                                    For those who prefer to record podcasts from the comforts of their own home,
                                                    we also offer online mixing services. Send us your files, and we'll mix and 
                                                    master them as if they got recorded right here.</p>

                                            </li>
  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <!--==================== SERVICE 3 ====================-->
                            <div class="services__content">
                                <div>
                                    <i class="uil uil-video services__icon"></i>
                                    <h3 class="services__title"> Space Booking </h3>
                                </div>
                                <span class="button button--flex button--small button--link services__button">
                                    Learn More.
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </span>

                                <div class="services__modal">
                                    <div class="services__modal-content">
                                        <h4 class="services__modal-title"> Space Booking </h4>
                                        <i class="uil uil-times services__modal-close"></i>

                                        <ul class="services__modal-services grid">

                                            <li class="services__modal-service">
                                                <i class="uil uil-check-circle services__modal-icon"></i>
                                                <p>Are you searching for a space to carry out your production?
                                                 Worry no more. We have an hourly charged package that is inclusive of
                                                 a camera, strobe light, and backdrops. The space is ideal for both photos
                                                 and film.</p>

                                            </li>
                                                                                   
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                

            </section>


            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
                <H2 class="section__title">Portfolio</H2>
                <span class="section__subtitle">Most Recent Work</span>

                <div class="portfolio__container container swiper-container">
                    <div class="swiper-wrapper">
                <!--==================== PORTFOLIO 1 ====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/images/portfolio1.jpg" alt="" class="portfolio__img">
                    

                    <div class="portfolio__data">
                        <h3 class="portfolio__title"> Test Data 1</h3>
                        <p class="portfolio__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                        Integer et purus eu justo ullamcorper pellentesque a quis mi.
                        Cras et sapien est. Aenean gravida lorem nec odio bibendum
                        </p>
                        <a href="" class="button button--flex button--small portfolio__button">
                            Demo 
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>

                </div>
                <!--==================== PORTFOLIO 2 ====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/images/portfolio2.jpg" alt="" class="portfolio__img">
                    

                    <div class="portfolio__data">
                        <h3 class="portfolio__title"> Test Data 2 </h3>
                        <p class="portfolio__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                        Integer et purus eu justo ullamcorper pellentesque a quis mi.
                        Cras et sapien est. Aenean gravida lorem nec odio bibendum
                        </p>
                        <a href="" class="button button--flex button--small portfolio__button">
                            Demo 
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>

                </div>
                <!--==================== PORTFOLIO 3 ====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/images/portfolio3.jpg" alt="" class="portfolio__img">
                    

                    <div class="portfolio__data">
                        <h3 class="portfolio__title"> Test Data 3 </h3>
                        <p class="portfolio__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                        Integer et purus eu justo ullamcorper pellentesque a quis mi.
                        Cras et sapien est. Aenean gravida lorem nec odio bibendum
                        </p>
                        <a href="" class="button button--flex button--small portfolio__button">
                            Demo 
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>

                </div>
                <!--==================== PORTFOLIO 4 ====================-->
                <div class="portfolio__content grid swiper-slide">
                    <img src="assets/images/portfolio1.jpg" alt="" class="portfolio__img">
                    

                    <div class="portfolio__data">
                        <h3 class="portfolio__title"> Test Data 4 </h3>
                        <p class="portfolio__description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                        Integer et purus eu justo ullamcorper pellentesque a quis mi.
                        Cras et sapien est. Aenean gravida lorem nec odio bibendum
                        </p>
                        <a href="" class="button button--flex button--small portfolio__button">
                            Demo 
                            <i class="uil uil-arrow-right button__icon"></i>
                        </a>
                    </div>

                </div>

                </div>
               
                 <!-- Add Arrows -->
                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>
                <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                </div>

                

            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
                <div class="project__bg">
                    <div class="project__container grid">
                        <div class="project__data">
                            <h2 class="project__title">You have a new project? </h2>
                                <p class="project__description">Contact me now ad get a 30% discount </p>
                                <a href="#contact" class="button button--flex button--white">
                                    Contact Me
                                    <i class="uil uil-message project__icon button__icon"></i>
                                </a>

                        </div>

                        <img src="assets/images/heflowered.png" alt="" class="project__img">
                
                    </div>
                </div>


            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                <h2 class="section__title">Testimonials</h2>
                    <span class="section__subtitle">What My Clients Say</span>
                    
                    <div class="testimonial__container container swiper-container">
                    <div class="swiper-wrapper">
                    <!--==================== TESTIMONIAL 1 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/images/dk.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name"> Test Data 1</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                            Integer et purus eu justo ullamcorper pellentesque a quis mi.
                            Cras et sapien est. Aenean gravida lorem nec odio bibendum,
                            </p>
                        </div>

                    <!--==================== TESTIMONIAL 2 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/images/giddy.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name"> Test Data 2</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                            Integer et purus eu justo ullamcorper pellentesque a quis mi.
                            Cras et sapien est. Aenean gravida lorem nec odio bibendum,
                            </p>
                        </div>

                    <!--==================== TESTIMONIAL 3 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/images/da4.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name"> Test Data 3</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                            Integer et purus eu justo ullamcorper pellentesque a quis mi.
                            Cras et sapien est. Aenean gravida lorem nec odio bibendum,
                            </p>
                        </div>

                    <!--==================== TESTIMONIAL 4 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/images/mac.jpg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name"> Test Data 4</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Maecenas ante ligula, vulputate non dictum sed, lobortis a risus. 
                            Integer et purus eu justo ullamcorper pellentesque a quis mi.
                            Cras et sapien est. Aenean gravida lorem nec odio bibendum,
                            </p>
                        </div>
                    </div>

                    <!-- add pagination -->
                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                    </div>
                

            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact Me</h2>
                    <span class="section__subtitle">Get In Touch</span>

                    <div class="contact__container container grid">
                        <div>
                            <div class="contact__information">
                                <i class="uil uil-phone contact__icon"></i>
                                <div>
                                <h3 class="contact__title"> Call Me </h3>
                                <span class="contact__subtitle"> +254 725 108407</span>
                                </div>
                            </div>

                            <div class="contact__information">
                                <i class="uil uil-envelope contact__icon"></i>
                                <div>
                                <h3 class="contact__title"> Email Me </h3>
                                <span class="contact__subtitle">example@gmail.com</span>
                                </div>
                            </div>

                            <div class="contact__information">
                                <i class="uil uil-map-marker contact__icon"></i>
                                <div>
                                <h3 class="contact__title"> Location </h3>
                                <span class="contact__subtitle"> Nairobi </span>
                                </div>
                            </div>

                        </div>
                        <form action="index.php#contact" class="contact__form grid" method="POST">
                        <?php include (ROOT_PATH . "/app/helpers/formErrors.php")?>

                        <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="contact__label"> Name </label>
                                <input type="text" class="contact__input" name="name" value="<?php echo $name?>">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label"> Email </label>
                                <input type="email" class="contact__input" name="email" value="<?php echo $email?>">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label"> Project </label>
                                <input type="text" class="contact__input" name="project" value="<?php echo $project?>">
                            </div>
                            <div class="contact__content">
                                <label for="" class="contact__label"> Message </label>
                                <textarea name="message" id="" cols="0" rows="7" class="contact__input"></textarea>
                            </div>
                            <div>
                            <button type="submit" name="submit_message" class="button button--flex" style=" border:none;">
                                    Send Message
                                    <i class="uil uil-message button__icon"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    </div>

                    


            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">BlueBerry Studios.</h1>
                        <span class="footer__subtitle">For Businesses, entrepreneurs and thought eiders.</span>
                    </div>
                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="" target="_blank" class="footer__social">
                            <i class="uil uil-facebook"></i>
                        </a>
                        <a href="" target="_blank" class="footer__social">
                        <i class="uil uil-linkedin"></i>

                        </a>
                        <a href="" target="_blank" class="footer__social">
                        <i class="uil uil-instagram-alt"></i>
                        </a>
                        <a href="" target="_blank" class="footer__social">
                        <i class="uil uil-whatsapp-alt"></i>
                        </a>
                    </div>
                </div>

                <p class="footer__copy">&#169; BlueBerry Studios. All Rights Reserved.</p>
            </div>

            
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>
        

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js//swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/mainJs.js"></script>
</body>
</html>