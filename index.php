<!DOCTYPE html>

<html lang="en">
<?php
$info = '';

if (isset($_POST["submit"])) {
    if (empty($_POST["email"]) || (empty($_POST["message"]) && empty($_POST["subject"]))) {
        $info = "Please Fill important field to continue";
    } else {
        session_start();
        $_SESSION["name"] = $_POST["name"];
        $name = $_SESSION["name"];
        $info = "Hi $name, Message Sent, we will get back to you.";
    }
}
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Nafiu Resume - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v3.3.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">

            <div class="profile">
                <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">Sulaiman Nafiu</a></h1>
                <div class="social-links mt-3 text-center">
                    <a href="https://twitter.com/TheAIOS" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://linkedin.com/in/sulaimannafiu" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

            >
            <!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->


    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="">
                    <h3 class="text-secondary"><?php echo $info ?></h3>
                </div>

                <div class="section-title">
                    <h2>About</h2>
                    <p>A graduate of Electrical Electronics Engineering with interest in Backend Development and Data
                        Science.</p>
                </div>

            </div>
        </section><!-- End About Section -->



        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p>Currently undergoing backend development internship at HNGi8 x Zuri x I4G</p>
                </div>

                <div class="row">
                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>B.Eng. Electrical Electronics Engineering</h4>
                        <h5>2013 - 2018</h5>
                        <p><em>University of Ilorin</em></p>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Resume Page</p>
                    <p>Automated Medicine Dispenser</p>
                    <p>Bluetooth Controlled DC Fan with smartphone</p>
                    <p><a href="https://github.com/iamnaf">Find More Here</a></p>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Learning Stack</h2>
                    <p>Python</p>
                    <p>Flutter for Android</p>
                    <p>HTML, CSS and Javascript</p>
                </div>
            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="index.php" method="post" class="row gx-3 gy-2 align-items-center p-3"
                        style="padding-top:none;">

                        <input type="text" name="name" class="form-control my-2 shadow-none" id="" placeholder="Name">
                        <input type="email" name="email" class="form-control my-2 shadow-none" id=""
                            placeholder="Email">
                        <input type="text" name="subject" class="form-control my-2 shadow-none" id=""
                            placeholder="Subject">
                        <input type="text" name="message" class="form-control my-2 shadow-none" id=""
                            placeholder="Message">
                        <button type="submit" name='submit' lass="btn btn-primary shadow-none">Submit</button>

                    </form>
                </div>

            </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Powered by <strong><span> <a href="https://zuri.team">Zuri</a></span></strong>
                <br>
                <img class="text-center" src="assets/img/favicon.png" alt="" style="width: 30px;">
                <img class="text-center" src="assets/img/favicon2.png" alt="" style="width: 30px;">
                <img class="text-center" src="assets/img/favicon3.png" alt="" style="width: 30px;">
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>

</html>
