<?php include_once("brand-config.php"); ?>
<!doctype html>
<html class="no-js" lang="en">

<?php 
    if(isset($brand_config['head']) && !empty($brand_config['head'])){
        $head = $brand_config['head'];
        if(file_exists($head)){
            include_once($head);          
        }
    }
?>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N9P6QT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <?php 
        if(isset($brand_config['header']) && !empty($brand_config['header'])){
            $header = $brand_config['header'];
            if(file_exists($header)){
                include_once($header);          
            }
        }
    ?>

    <!-- About Us Section -->
    <?php 
        if(isset($brand_config['about_section']) && !empty($brand_config['about_section'])){
            $about = $brand_config['about_section'];
            if(file_exists($about)){
                include_once($about);          
            }
        }
    ?>
    <!-- About Us Section end -->

    <!-- Our Service -->
    <?php 
        if(isset($brand_config['general_service']) && !empty($brand_config['general_service'])){
            $service = $brand_config['general_service'];
            if(file_exists($service)){
                include_once($service);          
            }
        }
    ?>
    <!-- Our Service end -->

    <!-- Latest Project -->
    <?php 
        if(isset($brand_config['latest_project_section']) && !empty($brand_config['latest_project_section'])){
            $latest_project = $brand_config['latest_project_section'];
            if(file_exists($latest_project)){
                include_once($latest_project);          
            }
        }
    ?>
    <!-- Latest Project end -->

    <!-- Work Process -->
    <?php 
        if(isset($brand_config['work_process_section']) && !empty($brand_config['work_process_section'])){
            $work_process = $brand_config['work_process_section'];
            if(file_exists($work_process)){
                include_once($work_process);          
            }
        }
    ?>
    <!-- Work Process end -->

    <!-- Brand Area -->
    <?php 
        if(isset($brand_config['specialized_section']) && !empty($brand_config['specialized_section'])){
            $specialized = $brand_config['specialized_section'];
            if(file_exists($specialized)){
                include_once($specialized);          
            }
        }
    ?>
    <!-- Brand Area end -->

    <!-- Our Features Area -->
    <?php 
        if(isset($brand_config['our_featured_section']) && !empty($brand_config['our_featured_section'])){
            $our_featured = $brand_config['our_featured_section'];
            if(file_exists($our_featured)){
                include_once($our_featured);          
            }
        }
    ?>
    <!-- Our Features Area end -->

    <!-- footer section start -->
    <?php 
        if(isset($brand_config['footer_area']) && !empty($brand_config['footer_area'])){
            $footer_area = $brand_config['footer_area'];
            if(file_exists($footer_area)){
                include_once($footer_area);          
            }
        }
    ?>
    <!-- footer section end -->

    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="move"></i></a>

    <!-- js file start -->

    <!-- Jquery -->
    <?php include_once('./include/js.php') ?>
    <!-- End js file -->

</body>

</html>