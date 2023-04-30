<?php include_once("brand-config.php"); ?>
<!doctype html>
<html class="no-js" lang="en">


  <head>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">

    
  </head>

<?php include_once('./include/head.php'); ?>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N9P6QT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include_once('./include/header.php'); ?>

    <!-- hero Section -->
 <?php include_once('./sections/vedio.php'); ?>
    <!-- hero Section end -->
    
    <!-- About Us Section -->
    <?php include_once('./sections/about.php'); ?>
    <!-- About Us Section end -->

    <!-- Our Service -->
    <?php include_once('./sections/general-service.php'); ?>
    <!-- Our Service end -->

    <!-- Latest Project -->
    <?php include_once('./sections/latest-project.php'); ?>
    <!-- Latest Project end -->

    <!-- Work Process -->
    <?php include_once('./sections/work-process.php'); ?>
    <!-- Work Process end -->

    <!-- Our Features Area -->
    <?php include_once('./sections/our-featured.php') ?>
    <!-- Our Features Area end -->

    <!-- Our Service -->
    <?php include_once('./sections/specialized.php'); ?>
    <!-- Our Service end -->

    <!-- footer section start -->
    <?php include_once('./include/footer-area.php') ?>
    <!-- footer section end -->

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="move"></i></a>

    <!-- js file start -->

    <!-- Jquery -->
    <?php include_once('./include/js.php') ?>
    <!-- End js file -->

</body>

</html>