    

    <section class="mobile-brand-pic-sm d-block d-sm-none">
        <div class="brand-car-image-crop">
            <img data-src="<?php echo $brand_config['brand_image']; ?>" alt="<?php echo $brand_config['brand']; ?>" class="lazyload" width="437" height="492">
        </div>
    </section>
    <section class="about-us-sec about-wrap-layout1 spacing" id="about" style="background: linear-gradient(to bottom, #183d85 0%,#5377be 100%);">
        <div class="container">
            <div class="row">
                <!-- About Us Content Area -->
                <div class="col-lg-8 col-xl-8">
                    <div class="about-us-content">
                        <!-- Title -->
                        <h1 class="about-title"><span><?php echo $brand_config['brand']; ?> <?php echo $brand_config['brand_title']; ?></span> <?php echo $brand_config['brand_title_2']; ?></h1>
                        <p><?php echo $brand_config['header_p_des']; ?> The Most Trusted <span><?php echo $brand_config['brand']; ?></span> Workshop & Auto Repair Centre.</p>
                        <p class="percent-class"><span>35% OFF</span> On <?php echo $brand_config['brand']; ?> <?php echo $brand_config['brand_title']; ?> <img src="assets/img/arrow-down.png" alt="arrow down" width="225" height="225" /></p>
                        <div class="row">
                            <div class="col-lg-6 col-xl-6">
                                <!-- Features List -->
                                <div class="features-list">
                                    <ul>
                                        <?php
                                            if(!empty($brand_config['header_li_1'])) {
                                                echo "<li>".$brand_config['header_li_1']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_2'])) {
                                                echo "<li>".$brand_config['header_li_2']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_3'])) {
                                                echo "<li>".$brand_config['header_li_3']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_4'])) {
                                                echo "<li>".$brand_config['header_li_4']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_5'])) {
                                                echo "<li>".$brand_config['header_li_5']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_6'])) {
                                                echo "<li>".$brand_config['header_li_6']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_7'])) {
                                                echo "<li>".$brand_config['header_li_7']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_8'])) {
                                                echo "<li>".$brand_config['header_li_8']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_9'])) {
                                                echo "<li>".$brand_config['header_li_9']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_10'])) {
                                                echo "<li>".$brand_config['header_li_10']."</li>";   
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <!-- Features List -->
                                <div class="features-list">
                                    <ul>
                                        <?php
                                            if(!empty($brand_config['header_li_11'])) {
                                                echo "<li>".$brand_config['header_li_11']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_12'])) {
                                                echo "<li>".$brand_config['header_li_12']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_13'])) {
                                                echo "<li>".$brand_config['header_li_13']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_14'])) {
                                                echo "<li>".$brand_config['header_li_14']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_15'])) {
                                                echo "<li>".$brand_config['header_li_15']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_16'])) {
                                                echo "<li>".$brand_config['header_li_16']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_17'])) {
                                                echo "<li>".$brand_config['header_li_17']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_18'])) {
                                                echo "<li>".$brand_config['header_li_18']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_19'])) {
                                                echo "<li>".$brand_config['header_li_19']."</li>";   
                                            }
                                            if(!empty($brand_config['header_li_20'])) {
                                                echo "<li>".$brand_config['header_li_20']."</li>";   
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Us Content Area end -->
                <!-- About Us Image Area -->
                <div class="col-lg-4 col-xl-4">
                    <div class="about-us-left">
                        <!-- About US Image -->
                        <div class="about-us-img d-none d-sm-block">
                            <div class="brang_logo">
                                <img data-src="<?php echo $brand_config['brand_logo']; ?>" alt="<?php echo $brand_config['brand']; ?>" class="lazyload" width="75" height="75">
                            </div>
                            <img data-src="<?php echo $brand_config['brand_image']; ?>" alt="<?php echo $brand_config['brand']; ?>" class="lazyload" width="437" height="492">
                        </div>
                    </div>
                    <!-- Action Area -->
                    <div class="row">
                        <div class="col-12 col-lg-6 col-xl-6">
                            <a href="tel:<?php echo $brand_config['call_now']; ?>" class="header-call-to-action mobile-mtb-10 autoCustomerCall"><img src="assets/img/call-icon.png" width="25" height="25" alt="call icon" /> <?php echo $brand_config['call_now']; ?></a>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-6">
                            <a href="https://api.whatsapp.com/send?phone=+971<?php echo $brand_config['whatsapp']; ?>" class="header-whatsapp-to-action mobile-mtb-10 autoCustomerWhatsappp"><img src="assets/img/whatsapp-icon.png" width="25" height="25" alt="whatsapp icon" /> 0<?php echo $brand_config['whatsapp']; ?></a>
                        </div>
                    </div>
                    <!-- Action Area end -->
                </div>
                <!-- About Us Image Area end -->
            </div>
        </div>
    </section>