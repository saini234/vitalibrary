<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contact | Bootstrap 5 Theme</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">
<!--


-->
    </head>
    
    <body>

        <?php
            include "header.php";
        ?>

        <main>

            <section class="banner-section d-flex justify-content-center align-items-end">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12">
                            <h1 class="text-white mb-lg-0">Contact</h1>
                        </div>

                        <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                </div>
            </section>
         

            <section class="contact-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 me-auto mb-lg-0 mb-5">
                            <h2 class="my-3">We're happy to help</h2>

                            <p>Enter your email address to follow this blog and receive notifications of new posts by email.</p>

                            <div class="contact-info bg-white shadow-lg">
                                <h3 class="mb-4">Contact Information</h3>

                                <h5 class="d-flex mt-3 mb-3">
                                    <i class="bi-geo-alt-fill custom-icon me-3"></i>
                                    Panipat, Haryana, 132103
                                </h5>

                                <h5 class="d-flex mb-3">
                                    <i class="bi-telephone-fill custom-icon me-3"></i>

                                    <a href="tel: +919518635492">
                                        +91 95186 35492
                                    </a>
                                </h5>

                                <h5 class="d-flex">
                                    <i class="bi-envelope-fill custom-icon me-3"></i>

                                    <a href="mailto:yogesh.2209401014@geetauniversity.edu.in">
                                        yogesh.2209401014@geetauniversity.edu.in
                                    </a>
                                </h5>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <form class="custom-form consulting-form bg-white shadow-lg mb-5 mb-lg-0" action="#" method="post" role="form">
                                <div class="consulting-form-header d-flex align-items-center">
                                    <h3 class="mb-4">Get a Free Quotation</h3>
                                </div>

                                <div class="consulting-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="volunteer-name" id="volunteer-name" class="form-control" placeholder="John Walker" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="volunteer-email" id="volunteer-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="yours@gmail.com" required>
                                        </div>
                                    </div>

                                    <!-- <select class="form-select form-control" name="job-salary" id="job-salary" aria-label="Default select example">
                                        <option selected>Service Type</option>
                                        <option value="1">House cleaning</option>
                                        <option value="2">Car washing</option>
                                        <option value="2">Office cleaning</option>
                                        <option value="2">Factory cleaning</option>
                                    </select> -->

                                    <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Comment (Optional)"></textarea>

                                    <div class="col-lg-6 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Submit Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <?php
            include "footer.php";
        ?>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
