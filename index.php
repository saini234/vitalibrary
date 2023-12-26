<?php

include 'config.php';
include 'function.php';

// if(is_admin())
// {
// 	header('location:admin/adm_login.php');
// }


// include 'header.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Library user page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">

    

</head>

<body>
  <!-- <div class="hero_area"> -->
    <?php include "header.php" ?>
    <main>

            <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12 text-center mx-auto">
                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>We give you</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">KNOWLEDGE</b>
                                    <b>CONFIDENCE</b>
                                    <b>BOOKS</b>
                                </span>
                            </h1>

                            <a class="custom-btn btn button button--atlas smoothscroll me-3" href="#intro-section">
                                <span>Books</span>

                                <div class="marquee" aria-hidden="true">
                                    <div class="marquee__inner">
                                        <span>Books</span>
                                        <span>Books</span>
                                        <span>Books</span>
                                        <span>Books</span>
                                    </div>
                                </div>
                            </a>

                            <a class="custom-btn custom-border-btn custom-btn-bg-white btn button button--pan smoothscroll" href="#services-section">
                                <span>E-Books</span>
                            </a>
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </section>


            <section class="intro-section" id="intro-section">
                <div class="container">
                    <div class="row justify-content-lg-center align-items-center">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">A Hub of &amp; Knowledge and Resources</h2>

                            <p>A library is a treasure trove of knowledge, a sanctuary for learning, and a haven for those seeking the companionship of books. More than just a collection of printed material, a library serves as a hub of information, housing a diverse array of resources that cater to the intellectual needs of its community.
                            <p>Within the quiet walls of a library, one finds an assortment of books, periodicals, and multimedia materials spanning a multitude of subjects.</p>
                        </div>

                        <div class="col-lg-6 col-12 custom-block-wrap">
                            <img src="images/girl_book.png" class="img-fluid">

                            <div class="custom-block d-flex flex-column">
                                <h6 class="text-white mb-3">Need Help? <br> Please call us:</h6>

                                <p class="d-flex mb-0">
                                    <i class="bi-telephone-fill custom-icon me-2"></i>

                                    <a href="tel: 110-220-9800">
                                        8059521601
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="services-section section-padding section-bg" id="services-section">                
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-4">Our Most Readed Books</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/CS.jpg" class="services-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Cyber Security</a>
                                            </h4>

                                            <p>Cybersecurity Books: Navigating the Digital Frontier</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Read Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/python.png" class="services-image img-fluid" alt="">
                                        

                                                
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Python</a>
                                            </h4>

                                            <p>Python Literary Odyssey: Navigating Knowledge Through Insightful Books</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Read Now</span>

                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/java.png" class="services-image img-fluid" alt="">
                                                

                                                
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Java</a>
                                            </h4>

                                            <p>Java Journeys: Exploring Knowledge in the Pages of Exceptional Books</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Read Now</span>


                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb mb-lg-0">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="images/ML.png" class="services-image img-fluid" alt="">
                                                

                                                
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h4 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">Machine Learning</a>
                                            </h4>

                                            <p>Machine Learning Masterpieces: Unraveling the World of Insightful Books</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                                <a href="services-detail.html" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                    <span>Read Now</span>

                                                    
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="testimonial-section section-padding section-bg">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="text-white mb-4">Department Books</h2>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="featured-block">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/cse.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">CSE</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">Cracking the coding interview, Introduction to Algorithms, Clean Code, Artificial Intelligence: A Modern Approach</p>
                            </div>

                            <div class="featured-block mb-lg-0">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/ca.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">Computer Application</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">Data Structure Using C, Data Structures & Applications,  Object Oriented Programming with C++, Programming Language DBMS, Software Engineering</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="featured-block">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/mba.png" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">MBA</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">MBA in a Book: Mastering Business, Zero to One, How to Win Friends and Influence People, The Ten-day MBA</p>
                            </div>

                            <div class="featured-block mb-lg-0">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/bba.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">BBA</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">Financial Accounting, Business Ethics, Advanced Cost Accounting, Business Statistics, Research Methodology</p>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="featured-block">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/HM.png" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">Hotel Management</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">The Cornell School of Hotel Administration on Hospitality, Be Our Guest, 100 Tips for Hoteliers, Hotel Housekeeping: Operations And Management</p>
                            </div>

                            <div class="featured-block mb-lg-0">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="images/nutri.jpg" class="avatar-image img-fluid">

                                    <div class="ms-3">
                                        <h4 class="mb-0">Nutrition & Dietetics</h4>

                                        <div class="reviews-icons mb-1">
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star-fill"></i>
                                            <i class="bi-star"></i>
                                            <i class="bi-star"></i>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-0">Nutrition & Dietetics, Nutrition Science, Textbook on Nutrition and Dietetics, Dietetics, How Not to Die, Become Your Own Nutritionist </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="partners-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12">
                            <h4 class="partners-section-title bg-white shadow-lg">Trusted by Many Students</h4>
                        </div>
                       
                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/pic.jpeg" class="partners-image img-fluid">
                            <h6 class="bg-white shadow-lg">Garvita</h6>
                        </div>
                        

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/capture.png" class="partners-image img-fluid">
                            <h6 class="bg-white shadow-lg">Yogesh</h6>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/jatin.jpeg" class="partners-image img-fluid">
                            <h6 class="bg-white shadow-lg">Jatin</h6>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/payal.jpeg" class="partners-image img-fluid">
                            <h6 class="bg-white shadow-lg">Payal</h6>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <img src="images/princy.jpeg" class="partners-image img-fluid">
                            <h6 class="bg-white shadow-lg">Princy</h6>
                        </div>

                    </div>
                </div>
            </section>
        </main>
    
    
        <?php include 'footer.php';?>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>
  <!-- End Google Map -->


</body>


</html>