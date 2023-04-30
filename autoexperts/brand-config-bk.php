<?php
$brand_page = false;
$brand_config = array(
    'head'=>'',
    'header'=>'',
    'about_section'=>'',
    'general_service'=>'',
    'work_process_section'=>'',
    'latest_project_section'=>'',
    'our_featured_section'=>'',
    'specialized_section'=>'',
    'footer_area'=>''
);

/*****************************************************************************************
Audi Cars Maintenance
******************************************************************************************/

/*** Audi Maintenance ***/
if(isset($_GET['audi-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Maintenance Dubai ***/
if(isset($_GET['audi-maintenance-dubai'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-maintenance-dubai";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Car Maintenance ***/
if(isset($_GET['audi-car-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-car-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Car Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Car Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A1 Maintenance ***/
if(isset($_GET['audi-a1-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a1-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A1";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A1 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A3 Maintenance ***/
if(isset($_GET['audi-a3-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a3-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A3";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A3 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a3.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A4 Maintenance ***/
if(isset($_GET['audi-a4-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a4-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A4";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A4 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a4.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A5 Maintenance ***/
if(isset($_GET['audi-a5-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a5-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A5";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A5 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a5.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A6 Maintenance ***/
if(isset($_GET['audi-a6-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a6-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A6";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A6 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a6.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A7 Maintenance ***/
if(isset($_GET['audi-a7-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a7-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A7";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A7 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a7.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi A8 Maintenance ***/
if(isset($_GET['audi-a8-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-a8-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi A8";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi A8 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a8.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Q2 Maintenance ***/
if(isset($_GET['audi-q2-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-q2-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi Q2";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Q2 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-q2.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Q3 Maintenance ***/
if(isset($_GET['audi-q3-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-q3-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi Q3";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Q3 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-q3.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Q5 Maintenance ***/
if(isset($_GET['audi-q5-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-q5-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi Q5";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Q5 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-q5.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Q7 Maintenance ***/
if(isset($_GET['audi-q7-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-q7-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi Q7";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Q7 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-q7.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Q8 Maintenance ***/
if(isset($_GET['audi-q8-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-q8-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi Q8";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Q8 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-q8.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi R8 Maintenance ***/
if(isset($_GET['audi-r8-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-r8-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi R8";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi R8 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-r8.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi S3 Maintenance ***/
if(isset($_GET['audi-s3-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-s3-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi S3";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi S3 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s3.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi RS3 Maintenance ***/
if(isset($_GET['audi-rs3-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-rs3-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi RS3";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi RS3 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-rs3.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi S4 Maintenance ***/
if(isset($_GET['audi-s4-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-s4-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi S4";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi S4 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s4.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi RS4 Maintenance ***/
if(isset($_GET['audi-rs4-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-rs4-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi RS4";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi RS4 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-rs4.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi S5 Maintenance ***/
if(isset($_GET['audi-s5-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-s5-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi S5";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi S5 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s5.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi RS5 Maintenance ***/
if(isset($_GET['audi-rs5-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-rs5-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi RS5";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi RS5 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s5.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi S6 Maintenance ***/
if(isset($_GET['audi-s6-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-s6-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi S6";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi S6 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s6.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi RS6 Maintenance ***/
if(isset($_GET['audi-rs6-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-rs6-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi RS6";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi RS6 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-rs6.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi S7 Maintenance ***/
if(isset($_GET['audi-s7-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-s7-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi S7";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi S7 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s7.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi RS7 Maintenance ***/
if(isset($_GET['audi-rs7-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-rs7-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi RS7";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi RS7 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-rs7.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi S8 Maintenance ***/
if(isset($_GET['audi-s8-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-s8-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi S8";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi S8 Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-s8.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi TT Maintenance ***/
if(isset($_GET['audi-tt-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-tt-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi TT";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi TT Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-tt.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi E Tron Maintenance ***/
if(isset($_GET['audi-e-tron-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-e-tron-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Audi e-tron";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Maintenance.';
    $brand_config['header_li_3'] = 'Audi Transmission Maintenance.';
    $brand_config['header_li_4'] = 'Audi Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Audi AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Maintenance.';
    $brand_config['header_li_9'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_10'] = 'Audi Wheel Balance Maintenance.';
    $brand_config['header_li_11'] = 'Audi Battery Maintenance.';
    $brand_config['header_li_12'] = 'Audi Tires Maintenance.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Maintenance.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi e-tron Maintenance In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-e-tron.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Maintenance ***/
if(isset($_GET['volkswagen-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Golf Maintenance ***/
if(isset($_GET['volkswagen-golf-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-golf-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Golf";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Golf Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Golf Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Golf Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Golf Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Golf AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Golf Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Golf Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Golf Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Golf Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Golf Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Golf Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Golf Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Golf Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Golf Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Golf Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Golf Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Golf Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Golf Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Golf Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Passat Maintenance ***/
if(isset($_GET['volkswagen-passat-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-passat-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Passat";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Passat Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Passat Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Passat Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Passat Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Passat AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Passat Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Passat Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Passat Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Passat Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Passat Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Passat Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Passat Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Passat Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Passat Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Passat Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Passat Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Passat Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Passat Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Passat Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-passat.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen jetta Maintenance ***/
if(isset($_GET['volkswagen-jetta-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-jetta-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Jetta";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Jetta Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Jetta Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Jetta Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Jetta Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Jetta AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Jetta Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Jetta Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Jetta Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Jetta Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Jetta Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Jetta Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Jetta Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Jetta Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Jetta Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Jetta Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Jetta Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Jetta Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Jetta Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Jetta Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-jetta.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen CC Maintenance ***/
if(isset($_GET['volkswagen-cc-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-cc-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen CC";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen CC Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen CC Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen CC Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen CC Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen CC AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen CC Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen CC Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen CC Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen CC Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen CC Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen CC Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen CC Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen CC Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen CC Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen CC Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen CC Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen CC Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen CC Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen CC Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-cc.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Beetle Maintenance ***/
if(isset($_GET['volkswagen-beetle-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-beetle-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Beetle";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Beetle Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Beetle Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Beetle Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Beetle Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Beetle AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Beetle Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Beetle Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Beetle Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Beetle Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Beetle Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Beetle Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Beetle Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Beetle Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Beetle Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Beetle Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Beetle Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Beetle Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Beetle Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Beetle Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-beetle.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Tiguan Maintenance ***/
if(isset($_GET['volkswagen-tiguan-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-tiguan-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Tiguan";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Tiguan Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Tiguan Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Tiguan Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Tiguan Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Tiguan AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Tiguan Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Tiguan Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Tiguan Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Tiguan Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Tiguan Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Tiguan Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Tiguan Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Tiguan Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Tiguan Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Tiguan Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Tiguan Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Tiguan Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Tiguan Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Tiguan Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-tiguan.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Touareg Maintenance ***/
if(isset($_GET['volkswagen-touareg-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-touareg-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Touareg";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Touareg Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Touareg Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Touareg Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Touareg Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Touareg AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Touareg Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Touareg Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Touareg Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Touareg Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Touareg Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Touareg Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Touareg Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Touareg Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Touareg Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Touareg Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Touareg Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Touareg Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Touareg Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Touareg Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-touareg.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Polo Maintenance ***/
if(isset($_GET['volkswagen-polo-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-polo-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Polo";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Polo Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Polo Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Polo Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Polo Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Polo AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Polo Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Polo Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Polo Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Polo Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Polo Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Polo Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Polo Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Polo Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Polo Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Polo Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Polo Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Polo Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Polo Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Polo Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-polo.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen caddy Maintenance ***/
if(isset($_GET['volkswagen-caddy-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-caddy-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Caddy";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Caddy Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Caddy Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Caddy Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Caddy Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Caddy AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Caddy Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Caddy Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Caddy Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Caddy Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Caddy Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Caddy Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Caddy Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Caddy Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Caddy Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Caddy Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Caddy Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Caddy Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Caddy Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Caddy Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-caddy.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen eos Maintenance ***/
if(isset($_GET['volkswagen-eos-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-eos-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen EOS";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen EOS Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen EOS Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen EOS Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen EOS Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen EOS AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen EOS Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen EOS Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen EOS Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen EOS Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen EOS Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen EOS Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen EOS Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen EOS Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen EOS Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen EOS Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen EOS Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen EOS Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen EOS Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen EOS Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-eos.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen scirocco Maintenance ***/
if(isset($_GET['volkswagen-scirocco-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-scirocco-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Scirocco";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Scirocco Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Scirocco Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Scirocco Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Scirocco Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Scirocco AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Scirocco Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Scirocco Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Scirocco Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Scirocco Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Scirocco Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Scirocco Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Scirocco Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Scirocco Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Scirocco Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Scirocco Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Scirocco Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Scirocco Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Scirocco Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Scirocco Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-scirocco.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Teramont Maintenance ***/
if(isset($_GET['volkswagen-teramont-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-teramont-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Teramont";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Teramont Minor Maintenance.';
    $brand_config['header_li_3'] = 'Volkswagen Teramont Major Maintenance.';
    $brand_config['header_li_4'] = 'Volkswagen Teramont Suspension Maintenance.';
    $brand_config['header_li_5'] = 'Volkswagen Teramont Brake Pads Maintenance.';
    $brand_config['header_li_6'] = 'Volkswagen Teramont AC Repair & Maintenance.';
    $brand_config['header_li_7'] = 'Volkswagen Teramont Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Teramont Gearbox Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Volkswagen Teramont Engine Repair & Maintenance.';
    $brand_config['header_li_10'] = 'Volkswagen Teramont Transmission Repair & Maintenance.';
    $brand_config['header_li_11'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_12'] = 'Volkswagen Teramont Oil Leaks Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Teramont Computer Reprogramming.';
    $brand_config['header_li_14'] = 'Volkswagen Teramont Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Volkswagen Teramont Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Teramont Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Teramont Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Teramont Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Teramont Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Teramont Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Maintenance - We Are Specialized Volkswagen Teramont Maintenance & Service In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-teramont.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Leak Repair
******************************************************************************************/

/*** Car Leak Repair ***/
if(isset($_GET['car-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Car Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Car Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Car Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Car Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Car Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Car Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Car Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Car Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Car Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Car Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Car Radiator Leak.';
    $brand_config['header_li_12'] = 'Car Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Car Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Car Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Car Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Car Fluid Leak.';
    $brand_config['header_li_17'] = 'Car Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Car Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Car Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Car Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Any Type Of Car leakage Repair Workshop In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Leak Repair ***/
if(isset($_GET['volkswagen-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Volkswagen Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Volkswagen Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Volkswagen Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Volkswagen Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Volkswagen Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Volkswagen Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Volkswagen Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Volkswagen Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Volkswagen Radiator Leak.';
    $brand_config['header_li_12'] = 'Volkswagen Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Volkswagen Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Volkswagen Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Volkswagen Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Volkswagen Fluid Leak.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Any Type Of Volkswagen Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Tiguan Leak ***/
if(isset($_GET['volkswagen-tiguan-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-tiguan-leak";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Tiguan Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Volkswagen Tiguan Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Volkswagen Tiguan Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Volkswagen Tiguan Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Volkswagen Tiguan Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Volkswagen Tiguan Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Volkswagen Tiguan Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Volkswagen Tiguan Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Volkswagen Tiguan Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Volkswagen Tiguan Radiator Leak.';
    $brand_config['header_li_12'] = 'Volkswagen Tiguan Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Volkswagen Tiguan Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Volkswagen Tiguan Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Volkswagen Tiguan Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Volkswagen Tiguan Fluid Leak.';
    $brand_config['header_li_17'] = 'Volkswagen Tiguan Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Tiguan Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Tiguan Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Tiguan Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Volkswagen Tiguan Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-tiguan.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Polo Leak ***/
if(isset($_GET['volkswagen-polo-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-polo-leak";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Polo Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Volkswagen Polo Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Volkswagen Polo Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Volkswagen Polo Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Volkswagen Polo Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Volkswagen Polo Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Volkswagen Polo Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Volkswagen Polo Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Volkswagen Polo Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Volkswagen Polo Radiator Leak.';
    $brand_config['header_li_12'] = 'Volkswagen Polo Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Volkswagen Polo Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Volkswagen Polo Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Volkswagen Polo Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Volkswagen Polo Fluid Leak.';
    $brand_config['header_li_17'] = 'Volkswagen Polo Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Polo Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Polo Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Polo Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Volkswagen Polo Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-polo.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Jetta Leak ***/
if(isset($_GET['volkswagen-jetta-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-jetta-leak";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Jetta Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Volkswagen Jetta Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Volkswagen Jetta Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Volkswagen Jetta Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Volkswagen Jetta Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Volkswagen Jetta Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Volkswagen Jetta Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Volkswagen Jetta Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Volkswagen Jetta Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Volkswagen Jetta Radiator Leak.';
    $brand_config['header_li_12'] = 'Volkswagen Jetta Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Volkswagen Jetta Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Volkswagen Jetta Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Volkswagen Jetta Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Volkswagen Jetta Fluid Leak.';
    $brand_config['header_li_17'] = 'Volkswagen Jetta Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Jetta Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Jetta Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Jetta Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Volkswagen Jetta Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-jetta.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Passat Leak ***/
if(isset($_GET['volkswagen-passat-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-passat-leak";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Passat Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Volkswagen Passat Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Volkswagen Passat Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Volkswagen Passat Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Volkswagen Passat Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Volkswagen Passat Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Volkswagen Passat Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Volkswagen Passat Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Volkswagen Passat Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Volkswagen Passat Radiator Leak.';
    $brand_config['header_li_12'] = 'Volkswagen Passat Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Volkswagen Passat Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Volkswagen Passat Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Volkswagen Passat Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Volkswagen Passat Fluid Leak.';
    $brand_config['header_li_17'] = 'Volkswagen Passat Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Passat Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Passat Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Passat Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Volkswagen Passat Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen-passat.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Golf Leak ***/
if(isset($_GET['volkswagen-golf-coolant-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-golf-coolant-leak";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen Golf Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Volkswagen Golf Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Volkswagen Golf Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Volkswagen Golf Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Volkswagen Golf Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Volkswagen Golf Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Volkswagen Golf Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Volkswagen Golf Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Volkswagen Golf Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Volkswagen Golf Radiator Leak.';
    $brand_config['header_li_12'] = 'Volkswagen Golf Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Volkswagen Golf Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Volkswagen Golf Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Volkswagen Golf Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Volkswagen Golf Fluid Leak.';
    $brand_config['header_li_17'] = 'Volkswagen Golf Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Volkswagen Golf Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Volkswagen Golf Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Volkswagen Golf Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Volkswagen Golf Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Leak Repair ***/
if(isset($_GET['audi-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Audi Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Audi Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Audi Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Audi Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Audi Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Audi Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Audi Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Audi Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Audi Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Audi Radiator Leak.';
    $brand_config['header_li_12'] = 'Audi Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Audi Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Audi Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Audi Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Audi Fluid Leak.';
    $brand_config['header_li_17'] = 'Audi Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Audi Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Audi Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Audi Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Audi Leakage Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Range Rover Leak Repair ***/
if(isset($_GET['range-rover-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?range-rover-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Range Rover";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Range Rover Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Range Rover Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Range Rover Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Range Rover Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Range Rover Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Range Rover Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Range Rover Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Range Rover Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Range Rover Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Range Rover Radiator Leak.';
    $brand_config['header_li_12'] = 'Range Rover Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Range Rover Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Range Rover Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Range Rover Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Range Rover Fluid Leak.';
    $brand_config['header_li_17'] = 'Range Rover Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Range Rover Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Range Rover Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Range Rover Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Range Rover Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/range-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Land Rover Leak Repair ***/
if(isset($_GET['land-rover-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?land-rover-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Land Rover";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Land Rover Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Land Rover Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Land Rover Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Land Rover Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Land Rover Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Land Rover Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Land Rover Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Land Rover Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Land Rover Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Land Rover Radiator Leak.';
    $brand_config['header_li_12'] = 'Land Rover Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Land Rover Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Land Rover Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Land Rover Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Land Rover Fluid Leak.';
    $brand_config['header_li_17'] = 'Land Rover Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Land Rover Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Land Rover Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Land Rover Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Land Rover Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/land-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Porsche Leak Repair ***/
if(isset($_GET['porsche-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Porsche Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Porsche Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Porsche Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Porsche Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Porsche Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Porsche Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Porsche Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Porsche Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Porsche Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Porsche Radiator Leak.';
    $brand_config['header_li_12'] = 'Porsche Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Porsche Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Porsche Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Porsche Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Porsche Fluid Leak.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Porsche Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Porsche Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized Porsche Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Bentley Leak Repair ***/
if(isset($_GET['bentley-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bentley-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Bentley";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Bentley Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Bentley Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Bentley Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Bentley Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Bentley Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Bentley Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Bentley Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Bentley Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Bentley Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Bentley Radiator Leak.';
    $brand_config['header_li_12'] = 'Bentley Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Bentley Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Bentley Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Bentley Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Bentley Fluid Leak.';
    $brand_config['header_li_17'] = 'Bentley Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Bentley Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Bentley Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Bentley Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Bentley Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bentley.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bentley-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bentley/bentley.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Jeep Leak Repair ***/
if(isset($_GET['jeep-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jeep-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jeep";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Jeep Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Jeep Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Jeep Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Jeep Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Jeep Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Jeep Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Jeep Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Jeep Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Jeep Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Jeep Radiator Leak.';
    $brand_config['header_li_12'] = 'Jeep Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Jeep Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Jeep Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Jeep Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Jeep Fluid Leak.';
    $brand_config['header_li_17'] = 'Jeep Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Jeep Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Jeep Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Jeep Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'American Cars Leak Repair - We Are Specialized Jeep Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jeep.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jeep-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jeep/jeep-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mini Cooper Leak Repair ***/
if(isset($_GET['mini-cooper-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mini-cooper-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mini Cooper";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Mini Cooper Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Mini Cooper Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Mini Cooper Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Mini Cooper Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Mini Cooper Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Mini Cooper Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Mini Cooper Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Mini Cooper Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Mini Cooper Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Mini Cooper Radiator Leak.';
    $brand_config['header_li_12'] = 'Mini Cooper Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Mini Cooper Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Mini Cooper Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Mini Cooper Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Mini Cooper Fluid Leak.';
    $brand_config['header_li_17'] = 'Mini Cooper Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Mini Cooper Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Mini Cooper Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Mini Cooper Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'American Cars Leak Repair - We Are Specialized Mini Cooper Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mini-cooper.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mini-cooper-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mini-cooper/mini-cooper.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Cadillac Leak Repair ***/
if(isset($_GET['cadillac-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?cadillac-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Cadillac";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Cadillac Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Cadillac Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Cadillac Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Cadillac Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Cadillac Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Cadillac Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Cadillac Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Cadillac Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Cadillac Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Cadillac Radiator Leak.';
    $brand_config['header_li_12'] = 'Cadillac Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Cadillac Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Cadillac Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Cadillac Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Cadillac Fluid Leak.';
    $brand_config['header_li_17'] = 'Cadillac Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Cadillac Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Cadillac Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Cadillac Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'American Cars Leak Repair - We Are Specialized Cadillac Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/cadillac-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/cadillac-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/cadillac/cadillac-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Dodge Leak Repair ***/
if(isset($_GET['dodge-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?dodge-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Dodge";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Dodge Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Dodge Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Dodge Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Dodge Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Dodge Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Dodge Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Dodge Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Dodge Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Dodge Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Dodge Radiator Leak.';
    $brand_config['header_li_12'] = 'Dodge Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Dodge Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Dodge Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Dodge Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Dodge Fluid Leak.';
    $brand_config['header_li_17'] = 'Dodge Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Dodge Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Dodge Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Dodge Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'American Cars Leak Repair - We Are Specialized Dodge Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/dodge.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/dodge-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/dodge/dodge-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** GMC Leak Repair ***/
if(isset($_GET['gmc-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?gmc-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "GMC";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'GMC Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair GMC Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair GMC Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair GMC Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair GMC Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair GMC Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair GMC Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair GMC Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair GMC Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair GMC Radiator Leak.';
    $brand_config['header_li_12'] = 'GMC Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair GMC Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair GMC Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair GMC Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair GMC Fluid Leak.';
    $brand_config['header_li_17'] = 'GMC Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'GMC Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'GMC Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'GMC Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'American Cars Leak Repair - We Are Specialized GMC Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/gmc.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/gmc-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/gmc/gmc-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Jaguar Leak Repair ***/
if(isset($_GET['jaguar-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jaguar-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jaguar";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Jaguar Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair Jaguar Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair Jaguar Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair Jaguar Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair Jaguar Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair Jaguar Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair Jaguar Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair Jaguar Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair Jaguar Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair Jaguar Radiator Leak.';
    $brand_config['header_li_12'] = 'Jaguar Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair Jaguar Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair Jaguar Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair Jaguar Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair Jaguar Fluid Leak.';
    $brand_config['header_li_17'] = 'Jaguar Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Jaguar Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Jaguar Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Jaguar Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Jaguar Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jaguar.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jaguar-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jaguar/jaguar-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Leak Repair ***/
if(isset($_GET['bmw-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'BMW Leak Repair.';
    $brand_config['header_li_3'] = 'Fix & Repair BMW Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Fix & Repair BMW Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Fix & Repair BMW Engine Oil Leak.';
    $brand_config['header_li_6'] = 'Fix & Repair BMW Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Fix & Repair BMW Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Fix & Repair BMW Water Leak.';
    $brand_config['header_li_9'] = 'Fix & Repair BMW Air Suspension Leak.';
    $brand_config['header_li_10'] = 'Fix & Repair BMW Suspension Leak.';
    $brand_config['header_li_11'] = 'Fix & Repair BMW Radiator Leak.';
    $brand_config['header_li_12'] = 'BMW Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Fix & Repair BMW Coolant Leak.';
    $brand_config['header_li_14'] = 'Fix & Repair BMW Transmission Leak.';
    $brand_config['header_li_15'] = 'Fix & Repair BMW Sunroof Leak.';
    $brand_config['header_li_16'] = 'Fix & Repair BMW Fluid Leak.';
    $brand_config['header_li_17'] = 'BMW Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'BMW Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'BMW Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'BMW Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'German Cars Leak Repair - We Are Specialized BMW Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Oil Leak Repair ***/
if(isset($_GET['aston-martin-oil-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-oil-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin";
    $brand_config['brand_title'] = "Oil Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Aston Martin Oil Leak.';
    $brand_config['header_li_3'] = 'Aston Martin Coolant Leak.';
    $brand_config['header_li_4'] = 'Aston Martin Air Leak.';
    $brand_config['header_li_5'] = 'Aston Martin Differential Leak.';
    $brand_config['header_li_6'] = 'Aston Martin Gearbox Leak.';
    $brand_config['header_li_7'] = 'Aston Martin Sunroof Leak.';
    $brand_config['header_li_8'] = 'Aston Martin Suspension Leak.';
    $brand_config['header_li_9'] = 'Aston Martin Shocks Leak.';
    $brand_config['header_li_10'] = 'Aston Martin Transmission Leak.';
    $brand_config['header_li_11'] = 'Aston Martin Vacuum Leak.';
    $brand_config['header_li_12'] = 'Aston Martin Water Pump Leak.';
    $brand_config['header_li_13'] = 'Aston Martin Leaking Fluid.';
    $brand_config['header_li_14'] = 'Aston Martin Brake Fluid Leak.';
    $brand_config['header_li_15'] = 'Aston Martin Strut Leak.';
    $brand_config['header_li_16'] = 'Aston Martin Thermostat Leak.';
    $brand_config['header_li_17'] = 'Aston Martin Power Steering Leak.';
    $brand_config['header_li_18'] = 'Aston Martin Engine Leak.';
    $brand_config['header_li_19'] = 'Aston Martin Oil Cooler Leaking.';
    $brand_config['header_li_20'] = 'Aston Martin Axle Leak.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Aston Martin Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Ferrari Leak Repair ***/
if(isset($_GET['ferrari-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?ferrari-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Ferrari";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Ferrari Oil Leak.';
    $brand_config['header_li_3'] = 'Ferrari Coolant Leak.';
    $brand_config['header_li_4'] = 'Ferrari Air Leak.';
    $brand_config['header_li_5'] = 'Ferrari Differential Leak.';
    $brand_config['header_li_6'] = 'Ferrari Gearbox Leak.';
    $brand_config['header_li_7'] = 'Ferrari Sunroof Leak.';
    $brand_config['header_li_8'] = 'Ferrari Suspension Leak.';
    $brand_config['header_li_9'] = 'Ferrari Shocks Leak.';
    $brand_config['header_li_10'] = 'Ferrari Transmission Leak.';
    $brand_config['header_li_11'] = 'Ferrari Vacuum Leak.';
    $brand_config['header_li_12'] = 'Ferrari Water Pump Leak.';
    $brand_config['header_li_13'] = 'Ferrari Leaking Fluid.';
    $brand_config['header_li_14'] = 'Ferrari Brake Fluid Leak.';
    $brand_config['header_li_15'] = 'Ferrari Strut Leak.';
    $brand_config['header_li_16'] = 'Ferrari Thermostat Leak.';
    $brand_config['header_li_17'] = 'Ferrari Power Steering Leak.';
    $brand_config['header_li_18'] = 'Ferrari Engine Leak.';
    $brand_config['header_li_19'] = 'Ferrari Oil Cooler Leaking.';
    $brand_config['header_li_20'] = 'Ferrari Axle Leak.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Ferrari Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/ferrari-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/ferrari-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/ferrari/ferrari.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mclaren Leak Repair ***/
if(isset($_GET['mclaren-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mclaren-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mclaren";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Mclaren Oil Leak.';
    $brand_config['header_li_3'] = 'Mclaren Coolant Leak.';
    $brand_config['header_li_4'] = 'Mclaren Air Leak.';
    $brand_config['header_li_5'] = 'Mclaren Differential Leak.';
    $brand_config['header_li_6'] = 'Mclaren Gearbox Leak.';
    $brand_config['header_li_7'] = 'Mclaren Sunroof Leak.';
    $brand_config['header_li_8'] = 'Mclaren Suspension Leak.';
    $brand_config['header_li_9'] = 'Mclaren Shocks Leak.';
    $brand_config['header_li_10'] = 'Mclaren Transmission Leak.';
    $brand_config['header_li_11'] = 'Mclaren Vacuum Leak.';
    $brand_config['header_li_12'] = 'Mclaren Water Pump Leak.';
    $brand_config['header_li_13'] = 'Mclaren Leaking Fluid.';
    $brand_config['header_li_14'] = 'Mclaren Brake Fluid Leak.';
    $brand_config['header_li_15'] = 'Mclaren Strut Leak.';
    $brand_config['header_li_16'] = 'Mclaren Thermostat Leak.';
    $brand_config['header_li_17'] = 'Mclaren Power Steering Leak.';
    $brand_config['header_li_18'] = 'Mclaren Engine Leak.';
    $brand_config['header_li_19'] = 'Mclaren Oil Cooler Leaking.';
    $brand_config['header_li_20'] = 'Mclaren Axle Leak.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Mclaren Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mclaren-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mclaren-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mclaren/mclaren.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Lamborghini Leak Repair ***/
if(isset($_GET['lamborghini-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?lamborghini-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Lamborghini";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Lamborghini Oil Leak.';
    $brand_config['header_li_3'] = 'Lamborghini Coolant Leak.';
    $brand_config['header_li_4'] = 'Lamborghini Air Leak.';
    $brand_config['header_li_5'] = 'Lamborghini Differential Leak.';
    $brand_config['header_li_6'] = 'Lamborghini Gearbox Leak.';
    $brand_config['header_li_7'] = 'Lamborghini Sunroof Leak.';
    $brand_config['header_li_8'] = 'Lamborghini Suspension Leak.';
    $brand_config['header_li_9'] = 'Lamborghini Shocks Leak.';
    $brand_config['header_li_10'] = 'Lamborghini Transmission Leak.';
    $brand_config['header_li_11'] = 'Lamborghini Vacuum Leak.';
    $brand_config['header_li_12'] = 'Lamborghini Water Pump Leak.';
    $brand_config['header_li_13'] = 'Lamborghini Leaking Fluid.';
    $brand_config['header_li_14'] = 'Lamborghini Brake Fluid Leak.';
    $brand_config['header_li_15'] = 'Lamborghini Strut Leak.';
    $brand_config['header_li_16'] = 'Lamborghini Thermostat Leak.';
    $brand_config['header_li_17'] = 'Lamborghini Power Steering Leak.';
    $brand_config['header_li_18'] = 'Lamborghini Engine Leak.';
    $brand_config['header_li_19'] = 'Lamborghini Oil Cooler Leaking.';
    $brand_config['header_li_20'] = 'Lamborghini Axle Leak.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Lamborghini Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/lamborghini.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/lamborghini-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/lamborghini/lamborghini.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Rolls Royce Leak Repair ***/
if(isset($_GET['rolls-royce-leak-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?rolls-royce-leak-repair";
    
    // Brand Name
    $brand_config['brand'] = "Rolls Royce";
    $brand_config['brand_title'] = "Leak Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Rolls Royce Oil Leak.';
    $brand_config['header_li_3'] = 'Rolls Royce Coolant Leak.';
    $brand_config['header_li_4'] = 'Rolls Royce Air Leak.';
    $brand_config['header_li_5'] = 'Rolls Royce Differential Leak.';
    $brand_config['header_li_6'] = 'Rolls Royce Gearbox Leak.';
    $brand_config['header_li_7'] = 'Rolls Royce Sunroof Leak.';
    $brand_config['header_li_8'] = 'Rolls Royce Suspension Leak.';
    $brand_config['header_li_9'] = 'Rolls Royce Shocks Leak.';
    $brand_config['header_li_10'] = 'Rolls Royce Transmission Leak.';
    $brand_config['header_li_11'] = 'Rolls Royce Vacuum Leak.';
    $brand_config['header_li_12'] = 'Rolls Royce Water Pump Leak.';
    $brand_config['header_li_13'] = 'Rolls Royce Leaking Fluid.';
    $brand_config['header_li_14'] = 'Rolls Royce Brake Fluid Leak.';
    $brand_config['header_li_15'] = 'Rolls Royce Strut Leak.';
    $brand_config['header_li_16'] = 'Rolls Royce Thermostat Leak.';
    $brand_config['header_li_17'] = 'Rolls Royce Power Steering Leak.';
    $brand_config['header_li_18'] = 'Rolls Royce Engine Leak.';
    $brand_config['header_li_19'] = 'Rolls Royce Oil Cooler Leaking.';
    $brand_config['header_li_20'] = 'Rolls Royce Axle Leak.';

    $brand_config['header_p_des'] = 'Exotic Cars Leak Repair - We Are Specialized Rolls Royce Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/rolls-royce.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/rolls-royce.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/rolls-royce/rolls-royce.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Mercedes Leak ***/
if(isset($_GET['mercedes-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-leak";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes Leak";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup & Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Leak Repair.';
    $brand_config['header_li_3'] = 'Mercedes Oil Filter Leak.';
    $brand_config['header_li_4'] = 'Mercedes Oil Leak Repair.';
    $brand_config['header_li_5'] = 'Mercedes Engine Oil Leak Repair.';
    $brand_config['header_li_6'] = 'Mercedes Leak Detection Pump.';
    $brand_config['header_li_7'] = 'Mercedes Sunroof Exploded.';
    $brand_config['header_li_8'] = 'Mercedes Water Leak Repair.';
    $brand_config['header_li_9'] = 'Mercedes Air Suspension Leak Repair.';
    $brand_config['header_li_10'] = 'Mercedes Suspension Leak Repair.';
    $brand_config['header_li_11'] = 'Mercedes Radiator Leak.';
    $brand_config['header_li_12'] = 'Mercedes Water Pump Replacement.';
    $brand_config['header_li_13'] = 'Mercedes Leak Coolant.';
    $brand_config['header_li_14'] = 'Mercedes Transmission Leak Repair.';
    $brand_config['header_li_15'] = 'Mercedes Sunroof Leak.';
    $brand_config['header_li_16'] = 'Mercedes Fluid Leak.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Maintenance.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Maintenance.';
    $brand_config['header_li_19'] = 'Mercedes Steering Repair & Maintenance.';
    $brand_config['header_li_20'] = 'Mercedes Tires Repair & Maintenance.';

    $brand_config['header_p_des'] = 'Mercedes Leak Repair - We Are Specialized Mercedes Leakage Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Aston Martin Cars Maintenance
******************************************************************************************/

/*** Aston Martin Maintenance ***/
if(isset($_GET['aston-martin-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Cygnet Maintenance ***/
if(isset($_GET['aston-martin-cygnet-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-cygnet-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Cygnet";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-cygnet.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin DB10 Maintenance ***/
if(isset($_GET['aston-martin-db10-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-db10-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin DB10";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin DB11 Maintenance ***/
if(isset($_GET['aston-martin-db11-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-db11-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin DB11";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-db11.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin DB7 Maintenance ***/
if(isset($_GET['aston-martin-db7-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-db7-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin DB7";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-db7.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin DB9 Maintenance ***/
if(isset($_GET['aston-martin-db9-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-db9-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin DB9";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-db9.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin DBS Maintenance ***/
if(isset($_GET['aston-martin-dbs-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-dbs-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin DBS";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-dbs.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Lagonda Maintenance ***/
if(isset($_GET['aston-martin-lagonda-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-lagonda-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Lagonda";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-lagonda.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin One 77 Maintenance ***/
if(isset($_GET['aston-martin-one-77-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-one-77-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin One 77";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-one-77.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Rapide Maintenance ***/
if(isset($_GET['aston-martin-rapide-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-rapide-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Rapide";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-rapide.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Vanquish Maintenance ***/
if(isset($_GET['aston-martin-vanquish-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-vanquish-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Vanquish";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-vanquish.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Vantage Maintenance ***/
if(isset($_GET['aston-martin-vantage-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-vantage-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Vantage";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-vantage.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Virage Maintenance ***/
if(isset($_GET['aston-martin-virage-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-virage-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Virage";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-virage.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Vulcan Maintenance ***/
if(isset($_GET['aston-martin-vulcan-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-vulcan-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Vulcan";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-vulcan.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Aston Martin Zagato Maintenance ***/
if(isset($_GET['aston-martin-zagato-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-zagato-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin Zagato";
    $brand_config['brand_title'] = "Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin-zagato.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Repair
******************************************************************************************/

/*** Audi Repair ***/
if(isset($_GET['audi-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Electrical & Water Pump.';
    $brand_config['header_li_3'] = 'Independent Audi Specialist.';
    $brand_config['header_li_4'] = 'Windscreen & Pumper Repair.';
    $brand_config['header_li_5'] = 'ABS Module - MMI - ECU Repair.';
    $brand_config['header_li_6'] = 'Bumper & Instrument Cluster.';
    $brand_config['header_li_7'] = 'Audi Overheating & Mechatronic.';
    $brand_config['header_li_8'] = 'Audi Audio Repairs.';
    $brand_config['header_li_9'] = 'Audi Body Repair.';
    $brand_config['header_li_10'] = 'Audi Convertible Roof Radiator.';
    $brand_config['header_li_11'] = 'Audi Rebuild Repair.';
    $brand_config['header_li_12'] = 'Audi Alternator, Oxygen Sensor.';
    $brand_config['header_li_13'] = 'Audi Suspension Repair.';
    $brand_config['header_li_14'] = 'Audi Transmission Repair.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Steering Repair.';
    $brand_config['header_li_20'] = 'Audi Major & Minor Repair.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Audi Specialist Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi mechanic ***/
if(isset($_GET['audi-mechanic'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-mechanic";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Mechanic";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Electrical & Water Pump.';
    $brand_config['header_li_3'] = 'Independent Audi Specialist.';
    $brand_config['header_li_4'] = 'Windscreen & Pumper Repair.';
    $brand_config['header_li_5'] = 'ABS Module - MMI - ECU Repair.';
    $brand_config['header_li_6'] = 'Bumper & Instrument Cluster.';
    $brand_config['header_li_7'] = 'Audi Overheating & Mechatronic.';
    $brand_config['header_li_8'] = 'Audi Audio Repairs.';
    $brand_config['header_li_9'] = 'Audi Body Repair.';
    $brand_config['header_li_10'] = 'Audi Convertible Roof Radiator.';
    $brand_config['header_li_11'] = 'Audi Rebuild Repair.';
    $brand_config['header_li_12'] = 'Audi Alternator, Oxygen Sensor.';
    $brand_config['header_li_13'] = 'Audi Suspension Repair.';
    $brand_config['header_li_14'] = 'Audi Transmission Repair.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Steering Repair.';
    $brand_config['header_li_20'] = 'Audi Major & Minor Repair.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Certified & Specialized Audi Car Mechanics In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Repair Shop ***/
if(isset($_GET['audi-repair-shop'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-repair-shop";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Repair Shop";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Electrical & Water Pump.';
    $brand_config['header_li_3'] = 'Independent Audi Specialist.';
    $brand_config['header_li_4'] = 'Windscreen & Pumper Repair.';
    $brand_config['header_li_5'] = 'ABS Module - MMI - ECU Repair.';
    $brand_config['header_li_6'] = 'Bumper & Instrument Cluster.';
    $brand_config['header_li_7'] = 'Audi Overheating & Mechatronic.';
    $brand_config['header_li_8'] = 'Audi Audio Repairs.';
    $brand_config['header_li_9'] = 'Audi Body Repair.';
    $brand_config['header_li_10'] = 'Audi Convertible Roof Radiator.';
    $brand_config['header_li_11'] = 'Audi Rebuild Repair.';
    $brand_config['header_li_12'] = 'Audi Alternator, Oxygen Sensor.';
    $brand_config['header_li_13'] = 'Audi Suspension Repair.';
    $brand_config['header_li_14'] = 'Audi Transmission Repair.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Steering Repair.';
    $brand_config['header_li_20'] = 'Audi Major & Minor Repair.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Certified & Specialized Audi Car Mechanics In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Car Repair ***/
if(isset($_GET['bmw-car-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-car-repair";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Car Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'BMW Transmission Repair.';
    $brand_config['header_li_4'] = 'BMW Suspension Repair.';
    $brand_config['header_li_5'] = 'BMW Brake Pads Repair.';
    $brand_config['header_li_6'] = 'BMW AC Service & Repair.';
    $brand_config['header_li_7'] = 'BMW Oil Change Service.';
    $brand_config['header_li_8'] = 'BMW Gearbox Repair.';
    $brand_config['header_li_9'] = 'BMW Engine Repair.';
    $brand_config['header_li_10'] = 'BMW Wheel Repair.';
    $brand_config['header_li_11'] = 'BMW Battery Repair.';
    $brand_config['header_li_12'] = 'BMW Tires Repair.';
    $brand_config['header_li_13'] = 'BMW Computer Reprogram.';
    $brand_config['header_li_14'] = 'BMW Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_18'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_19'] = 'BMW Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized BMW Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Mechanic ***/
if(isset($_GET['bmw-mechanic'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-mechanic";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Mechanic";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'BMW Transmission Repair.';
    $brand_config['header_li_4'] = 'BMW Suspension Repair.';
    $brand_config['header_li_5'] = 'BMW Brake Pads Repair.';
    $brand_config['header_li_6'] = 'BMW AC Service & Repair.';
    $brand_config['header_li_7'] = 'BMW Oil Change Service.';
    $brand_config['header_li_8'] = 'BMW Gearbox Repair.';
    $brand_config['header_li_9'] = 'BMW Engine Repair.';
    $brand_config['header_li_10'] = 'BMW Wheel Repair.';
    $brand_config['header_li_11'] = 'BMW Battery Repair.';
    $brand_config['header_li_12'] = 'BMW Tires Repair.';
    $brand_config['header_li_13'] = 'BMW Computer Reprogram.';
    $brand_config['header_li_14'] = 'BMW Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_18'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_19'] = 'BMW Steering Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Certified & Specialized BMW Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Car Repair ***/
if(isset($_GET['mercedes-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Mercedes Transmission Repair.';
    $brand_config['header_li_4'] = 'Mercedes Suspension Repair.';
    $brand_config['header_li_5'] = 'Mercedes Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Mercedes AC Service & Repair.';
    $brand_config['header_li_7'] = 'Mercedes Oil Change Service.';
    $brand_config['header_li_8'] = 'Mercedes Gearbox Repair.';
    $brand_config['header_li_9'] = 'Mercedes Engine Repair.';
    $brand_config['header_li_10'] = 'Mercedes Wheel Repair.';
    $brand_config['header_li_11'] = 'Mercedes Battery Repair.';
    $brand_config['header_li_12'] = 'Mercedes Tires Repair.';
    $brand_config['header_li_13'] = 'Mercedes Computer Reprogram.';
    $brand_config['header_li_14'] = 'Mercedes Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Steering Repair.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Certified & Specialized Mercedes Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Porsche Specialist ***/
if(isset($_GET['porsche-specialist'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-specialist";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Specialist";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Porsche Transmission Repair.';
    $brand_config['header_li_4'] = 'Porsche Suspension Repair.';
    $brand_config['header_li_5'] = 'Porsche Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Porsche AC Service & Repair.';
    $brand_config['header_li_7'] = 'Porsche Oil Change Service.';
    $brand_config['header_li_8'] = 'Porsche Gearbox Repair.';
    $brand_config['header_li_9'] = 'Porsche Engine Repair.';
    $brand_config['header_li_10'] = 'Porsche Wheel Repair.';
    $brand_config['header_li_11'] = 'Porsche Battery Repair.';
    $brand_config['header_li_12'] = 'Porsche Tires Repair.';
    $brand_config['header_li_13'] = 'Porsche Computer Reprogram.';
    $brand_config['header_li_14'] = 'Porsche Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Porsche Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Repair.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Repair.';
    $brand_config['header_li_19'] = 'Porsche Steering Repair.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Certified & Specialized Porsche Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Porsche Mechanic ***/
if(isset($_GET['porsche-mechanic'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-mechanic";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Mechanic";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Porsche Transmission Repair.';
    $brand_config['header_li_4'] = 'Porsche Suspension Repair.';
    $brand_config['header_li_5'] = 'Porsche Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Porsche AC Service & Repair.';
    $brand_config['header_li_7'] = 'Porsche Oil Change Service.';
    $brand_config['header_li_8'] = 'Porsche Gearbox Repair.';
    $brand_config['header_li_9'] = 'Porsche Engine Repair.';
    $brand_config['header_li_10'] = 'Porsche Wheel Repair.';
    $brand_config['header_li_11'] = 'Porsche Battery Repair.';
    $brand_config['header_li_12'] = 'Porsche Tires Repair.';
    $brand_config['header_li_13'] = 'Porsche Computer Reprogram.';
    $brand_config['header_li_14'] = 'Porsche Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Porsche Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Repair.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Repair.';
    $brand_config['header_li_19'] = 'Porsche Steering Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Certified & Specialized Porsche Mechanic Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Land Rover Repair ***/
if(isset($_GET['land-rover-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?land-rover-repair";
    
    // Brand Name
    $brand_config['brand'] = "Land Rover";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Land Rover Transmission Repair.';
    $brand_config['header_li_4'] = 'Land Rover Suspension Repair.';
    $brand_config['header_li_5'] = 'Land Rover Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Land Rover AC Service & Repair.';
    $brand_config['header_li_7'] = 'Land Rover Oil Change Service.';
    $brand_config['header_li_8'] = 'Land Rover Gearbox Repair.';
    $brand_config['header_li_9'] = 'Land Rover Engine Repair.';
    $brand_config['header_li_10'] = 'Land Rover Wheel Repair.';
    $brand_config['header_li_11'] = 'Land Rover Battery Repair.';
    $brand_config['header_li_12'] = 'Land Rover Tires Repair.';
    $brand_config['header_li_13'] = 'Land Rover Computer Reprogram.';
    $brand_config['header_li_14'] = 'Land Rover Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Land Rover Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Land Rover Electrical System Repair.';
    $brand_config['header_li_18'] = 'Land Rover Lighting System Repair.';
    $brand_config['header_li_19'] = 'Land Rover Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Land Rover Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/land-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Range Rover Repair ***/
if(isset($_GET['range-rover-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?range-rover-repair";
    
    // Brand Name
    $brand_config['brand'] = "Range Rover";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Range Rover Transmission Repair.';
    $brand_config['header_li_4'] = 'Range Rover Suspension Repair.';
    $brand_config['header_li_5'] = 'Range Rover Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Range Rover AC Service & Repair.';
    $brand_config['header_li_7'] = 'Range Rover Oil Change Service.';
    $brand_config['header_li_8'] = 'Range Rover Gearbox Repair.';
    $brand_config['header_li_9'] = 'Range Rover Engine Repair.';
    $brand_config['header_li_10'] = 'Range Rover Wheel Repair.';
    $brand_config['header_li_11'] = 'Range Rover Battery Repair.';
    $brand_config['header_li_12'] = 'Range Rover Tires Repair.';
    $brand_config['header_li_13'] = 'Range Rover Computer Reprogram.';
    $brand_config['header_li_14'] = 'Range Rover Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Range Rover Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Range Rover Electrical System Repair.';
    $brand_config['header_li_18'] = 'Range Rover Lighting System Repair.';
    $brand_config['header_li_19'] = 'Range Rover Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Range Rover Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/range-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Repair ***/
if(isset($_GET['volkswagen-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-repair";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Volkswagen Transmission Repair.';
    $brand_config['header_li_4'] = 'Volkswagen Suspension Repair.';
    $brand_config['header_li_5'] = 'Volkswagen Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Volkswagen AC Service & Repair.';
    $brand_config['header_li_7'] = 'Volkswagen Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Gearbox Repair.';
    $brand_config['header_li_9'] = 'Volkswagen Engine Repair.';
    $brand_config['header_li_10'] = 'Volkswagen Wheel Repair.';
    $brand_config['header_li_11'] = 'Volkswagen Battery Repair.';
    $brand_config['header_li_12'] = 'Volkswagen Tires Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Computer Reprogram.';
    $brand_config['header_li_14'] = 'Volkswagen Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volkswagen Steering Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Certified & Specialized Volkswagen Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Mechanic ***/
if(isset($_GET['volkswagen-mechanic'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-mechanic";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Mechanic";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Volkswagen Transmission Repair.';
    $brand_config['header_li_4'] = 'Volkswagen Suspension Repair.';
    $brand_config['header_li_5'] = 'Volkswagen Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Volkswagen AC Service & Repair.';
    $brand_config['header_li_7'] = 'Volkswagen Oil Change Service.';
    $brand_config['header_li_8'] = 'Volkswagen Gearbox Repair.';
    $brand_config['header_li_9'] = 'Volkswagen Engine Repair.';
    $brand_config['header_li_10'] = 'Volkswagen Wheel Repair.';
    $brand_config['header_li_11'] = 'Volkswagen Battery Repair.';
    $brand_config['header_li_12'] = 'Volkswagen Tires Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Computer Reprogram.';
    $brand_config['header_li_14'] = 'Volkswagen Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volkswagen Steering Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Certified & Specialized Volkswagen Mechanic In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mini Cooper Repair ***/
if(isset($_GET['mini-cooper-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mini-cooper-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mini Cooper";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Mini Cooper Transmission Repair.';
    $brand_config['header_li_4'] = 'Mini Cooper Suspension Repair.';
    $brand_config['header_li_5'] = 'Mini Cooper Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Mini Cooper AC Repair.';
    $brand_config['header_li_7'] = 'Mini Cooper Oil Change Service.';
    $brand_config['header_li_8'] = 'Mini Cooper Gearbox Repair.';
    $brand_config['header_li_9'] = 'Mini Cooper Engine Repair.';
    $brand_config['header_li_10'] = 'Mini Cooper Wheel Repair.';
    $brand_config['header_li_11'] = 'Mini Cooper Battery Repair.';
    $brand_config['header_li_12'] = 'Mini Cooper Tires Repair.';
    $brand_config['header_li_13'] = 'Mini Cooper Computer Reprogram.';
    $brand_config['header_li_14'] = 'Mini Cooper Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Mini Cooper Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mini Cooper Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mini Cooper Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mini Cooper Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Mini Cooper Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mini-cooper.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mini-cooper-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mini-cooper/mini-cooper.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Jaguar Repair ***/
if(isset($_GET['jaguar-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jaguar-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jaguar";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Jaguar Transmission Repair.';
    $brand_config['header_li_4'] = 'Jaguar Suspension Repair.';
    $brand_config['header_li_5'] = 'Jaguar Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Jaguar AC Service & Repair.';
    $brand_config['header_li_7'] = 'Jaguar Oil Change Service.';
    $brand_config['header_li_8'] = 'Jaguar Gearbox Repair.';
    $brand_config['header_li_9'] = 'Jaguar Engine Repair.';
    $brand_config['header_li_10'] = 'Jaguar Wheel Repair.';
    $brand_config['header_li_11'] = 'Jaguar Battery Repair.';
    $brand_config['header_li_12'] = 'Jaguar Tires Repair.';
    $brand_config['header_li_13'] = 'Jaguar Computer Reprogram.';
    $brand_config['header_li_14'] = 'Jaguar Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Jaguar Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Jaguar Electrical System Repair.';
    $brand_config['header_li_18'] = 'Jaguar Lighting System Repair.';
    $brand_config['header_li_19'] = 'Jaguar Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Jaguar Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jaguar.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jaguar-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jaguar/jaguar-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Ford Repair ***/
if(isset($_GET['ford-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?ford-repair";
    
    // Brand Name
    $brand_config['brand'] = "Ford";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Ford Transmission Repair.';
    $brand_config['header_li_4'] = 'Ford Suspension Repair.';
    $brand_config['header_li_5'] = 'Ford Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Ford AC Service & Repair.';
    $brand_config['header_li_7'] = 'Ford Oil Change Service.';
    $brand_config['header_li_8'] = 'Ford Gearbox Repair.';
    $brand_config['header_li_9'] = 'Ford Engine Repair.';
    $brand_config['header_li_10'] = 'Ford Wheel Repair.';
    $brand_config['header_li_11'] = 'Ford Battery Repair.';
    $brand_config['header_li_12'] = 'Ford Tires Repair.';
    $brand_config['header_li_13'] = 'Ford Computer Reprogram.';
    $brand_config['header_li_14'] = 'Ford Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Ford Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Ford Electrical System Repair.';
    $brand_config['header_li_18'] = 'Ford Lighting System Repair.';
    $brand_config['header_li_19'] = 'Ford Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Ford Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/ford.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/ford-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/ford/ford-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** GMC Repair ***/
if(isset($_GET['gmc-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?gmc-repair";
    
    // Brand Name
    $brand_config['brand'] = "GMC";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'GMC Car Transmission Repair.';
    $brand_config['header_li_4'] = 'GMC Car Suspension Repair.';
    $brand_config['header_li_5'] = 'GMC Car Brake Pads Repair.';
    $brand_config['header_li_6'] = 'GMC Car AC Service & Repair.';
    $brand_config['header_li_7'] = 'GMC Car Oil Change Service.';
    $brand_config['header_li_8'] = 'GMC Car Gearbox Repair.';
    $brand_config['header_li_9'] = 'GMC Car Engine Repair.';
    $brand_config['header_li_10'] = 'GMC Car Wheel Repair.';
    $brand_config['header_li_11'] = 'GMC Car Battery Repair.';
    $brand_config['header_li_12'] = 'GMC Car Tires Repair.';
    $brand_config['header_li_13'] = 'GMC Car Computer Reprogram.';
    $brand_config['header_li_14'] = 'GMC Car Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'GMC Car Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'GMC Car Electrical System Repair.';
    $brand_config['header_li_18'] = 'GMC Car Lighting System Repair.';
    $brand_config['header_li_19'] = 'GMC Car Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized GMC Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/gmc.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/gmc-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/gmc/gmc-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Dodge Repair ***/
if(isset($_GET['dodge-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?dodge-repair";
    
    // Brand Name
    $brand_config['brand'] = "Dodge";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Dodge Transmission Repair.';
    $brand_config['header_li_4'] = 'Dodge Suspension Repair.';
    $brand_config['header_li_5'] = 'Dodge Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Dodge AC Service & Repair.';
    $brand_config['header_li_7'] = 'Dodge Oil Change Service.';
    $brand_config['header_li_8'] = 'Dodge Gearbox Repair.';
    $brand_config['header_li_9'] = 'Dodge Engine Repair.';
    $brand_config['header_li_10'] = 'Dodge Wheel Repair.';
    $brand_config['header_li_11'] = 'Dodge Battery Repair.';
    $brand_config['header_li_12'] = 'Dodge Tires Repair.';
    $brand_config['header_li_13'] = 'Dodge Computer Reprogram.';
    $brand_config['header_li_14'] = 'Dodge Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Dodge Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Dodge Electrical System Repair.';
    $brand_config['header_li_18'] = 'Dodge Lighting System Repair.';
    $brand_config['header_li_19'] = 'Dodge Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Dodge Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/dodge.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/dodge-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/dodge/dodge-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Cadillac Repair ***/
if(isset($_GET['cadillac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?cadillac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Cadillac";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Cadillac Transmission Repair.';
    $brand_config['header_li_4'] = 'Cadillac Suspension Repair.';
    $brand_config['header_li_5'] = 'Cadillac Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Cadillac AC Service & Repair.';
    $brand_config['header_li_7'] = 'Cadillac Oil Change Service.';
    $brand_config['header_li_8'] = 'Cadillac Gearbox Repair.';
    $brand_config['header_li_9'] = 'Cadillac Engine Repair.';
    $brand_config['header_li_10'] = 'Cadillac Wheel Repair.';
    $brand_config['header_li_11'] = 'Cadillac Battery Repair.';
    $brand_config['header_li_12'] = 'Cadillac Tires Repair.';
    $brand_config['header_li_13'] = 'Cadillac Computer Reprogram.';
    $brand_config['header_li_14'] = 'Cadillac Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Cadillac Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Cadillac Electrical System Repair.';
    $brand_config['header_li_18'] = 'Cadillac Lighting System Repair.';
    $brand_config['header_li_19'] = 'Cadillac Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Cadillac Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/cadillac-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/cadillac-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/cadillac/cadillac-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Nissan Patrol Repair ***/
if(isset($_GET['nissan-patrol-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?nissan-patrol-repair";
    
    // Brand Name
    $brand_config['brand'] = "Nissan Patrol";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Nissan Transmission Repair.';
    $brand_config['header_li_4'] = 'Nissan Suspension Repair.';
    $brand_config['header_li_5'] = 'Nissan Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Nissan AC Service & Repair.';
    $brand_config['header_li_7'] = 'Nissan Oil Change Service.';
    $brand_config['header_li_8'] = 'Nissan Patrol Gearbox Repair.';
    $brand_config['header_li_9'] = 'Nissan Patrol Engine Repair.';
    $brand_config['header_li_10'] = 'Nissan Patrol Wheel Repair.';
    $brand_config['header_li_11'] = 'Nissan Patrol Battery Repair.';
    $brand_config['header_li_12'] = 'Nissan Patrol Tires Repair.';
    $brand_config['header_li_13'] = 'Nissan Computer Reprogram.';
    $brand_config['header_li_14'] = 'Nissan Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Nissan Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Nissan Electrical System Repair.';
    $brand_config['header_li_18'] = 'Nissan Lighting System Repair.';
    $brand_config['header_li_19'] = 'Nissan Patrol Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Nissan Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/nissan.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/nissan-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/nissan/nissan-patrol-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Jeep Repair ***/
if(isset($_GET['jeep-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jeep-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jeep";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Jeep Transmission Repair.';
    $brand_config['header_li_4'] = 'Jeep Suspension Repair.';
    $brand_config['header_li_5'] = 'Jeep Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Jeep AC Service & Repair.';
    $brand_config['header_li_7'] = 'Jeep Oil Change Service.';
    $brand_config['header_li_8'] = 'Jeep Gearbox Repair.';
    $brand_config['header_li_9'] = 'Jeep Engine Repair.';
    $brand_config['header_li_10'] = 'Jeep Wheel Repair.';
    $brand_config['header_li_11'] = 'Jeep Battery Repair.';
    $brand_config['header_li_12'] = 'Jeep Tires Repair.';
    $brand_config['header_li_13'] = 'Jeep Computer Reprogram.';
    $brand_config['header_li_14'] = 'Jeep Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Jeep Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Jeep Electrical System Repair.';
    $brand_config['header_li_18'] = 'Jeep Lighting System Repair.';
    $brand_config['header_li_19'] = 'Jeep Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Jeep Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jeep.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jeep-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jeep/jeep-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Infiniti Repair ***/
if(isset($_GET['infiniti-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?infiniti-repair";
    
    // Brand Name
    $brand_config['brand'] = "Infiniti";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Infiniti Transmission Repair.';
    $brand_config['header_li_4'] = 'Infiniti Suspension Repair.';
    $brand_config['header_li_5'] = 'Infiniti Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Infiniti AC Service & Repair.';
    $brand_config['header_li_7'] = 'Infiniti Oil Change Service.';
    $brand_config['header_li_8'] = 'Infiniti Gearbox Repair.';
    $brand_config['header_li_9'] = 'Infiniti Engine Repair.';
    $brand_config['header_li_10'] = 'Infiniti Wheel Repair.';
    $brand_config['header_li_11'] = 'Infiniti Battery Repair.';
    $brand_config['header_li_12'] = 'Infiniti Tires Repair.';
    $brand_config['header_li_13'] = 'Infiniti Computer Reprogram.';
    $brand_config['header_li_14'] = 'Infiniti Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Infiniti Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Infiniti Electrical System Repair.';
    $brand_config['header_li_18'] = 'Infiniti Lighting System Repair.';
    $brand_config['header_li_19'] = 'Infiniti Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Infiniti Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/infiniti.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/infiniti-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/infiniti/infiniti-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volvo Repair ***/
if(isset($_GET['volvo-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volvo-repair";
    
    // Brand Name
    $brand_config['brand'] = "Volvo";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Repair.';
    $brand_config['header_li_3'] = 'Volvo Transmission Repair.';
    $brand_config['header_li_4'] = 'Volvo Suspension Repair.';
    $brand_config['header_li_5'] = 'Volvo Brake Pads Repair.';
    $brand_config['header_li_6'] = 'Volvo AC Service & Repair.';
    $brand_config['header_li_7'] = 'Volvo Oil Change Service.';
    $brand_config['header_li_8'] = 'Volvo Gearbox Repair.';
    $brand_config['header_li_9'] = 'Volvo Engine Repair.';
    $brand_config['header_li_10'] = 'Volvo Wheel Repair.';
    $brand_config['header_li_11'] = 'Volvo Battery Repair.';
    $brand_config['header_li_12'] = 'Volvo Tires Repair.';
    $brand_config['header_li_13'] = 'Volvo Computer Reprogram.';
    $brand_config['header_li_14'] = 'Volvo Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Volvo Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volvo Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volvo Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volvo Steering Repair.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Volvo Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volvo-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volvo-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volvo/volvo-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Suspension
******************************************************************************************/

/*** Audi Suspension Repair ***/
if(isset($_GET['audi-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Suspension Repair.';
    $brand_config['header_li_3'] = 'Audi Suspension Replacement.';
    $brand_config['header_li_4'] = 'Audi Air Suspension Repair.';
    $brand_config['header_li_5'] = 'Audi Suspension Bushes.';
    $brand_config['header_li_6'] = 'Audi Suspension Change.';
    $brand_config['header_li_7'] = 'Audi upper Suspension Arm.';
    $brand_config['header_li_8'] = 'Audi Suspension mount Replacement.';
    $brand_config['header_li_9'] = 'Audi Suspension Leak.';
    $brand_config['header_li_10'] = 'Audi Avant Suspension.';
    $brand_config['header_li_11'] = 'Audi Rear Suspension Replacement.';
    $brand_config['header_li_12'] = 'Audi Allroad Air Suspension Repair.';
    $brand_config['header_li_13'] = 'Audi Front Suspension Noise.';
    $brand_config['header_li_14'] = 'Audi Front Suspension Replacement.';
    $brand_config['header_li_15'] = 'Audi Suspension Links.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Audi Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Audi Suspension Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Coilovers ***/
if(isset($_GET['audi-coilovers'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-coilovers";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Coilovers Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Hydraulic Suspension Repair.';
    $brand_config['header_li_3'] = 'Audi Control Arm Bushing Replacement.';
    $brand_config['header_li_4'] = 'Audi Axle Replacement.';
    $brand_config['header_li_5'] = 'Audi Lower Suspension Arm.';
    $brand_config['header_li_6'] = 'Audi Differential Oil Change.';
    $brand_config['header_li_7'] = 'Audi Coilovers.';
    $brand_config['header_li_8'] = 'Audi Crossmember.';
    $brand_config['header_li_9'] = 'Audi Spring Replacement.';
    $brand_config['header_li_10'] = 'Audi Boot Replacement.';
    $brand_config['header_li_11'] = 'Audi Lower Arm Bush.';
    $brand_config['header_li_12'] = 'Audi Control Arm Replacement.';
    $brand_config['header_li_13'] = 'Audi Wishbone Replacement.';
    $brand_config['header_li_14'] = 'Audi Coil Spring Replacement.';
    $brand_config['header_li_15'] = 'Audi Air Compressor Repair.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Audi Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Audi Suspension Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Shocks Repair ***/
if(isset($_GET['audi-shocks-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-shocks-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Shocks Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Shocks Repair.';
    $brand_config['header_li_3'] = 'Audi Rear Shock Replacement.';
    $brand_config['header_li_4'] = 'Audi Shock Replacement.';
    $brand_config['header_li_5'] = 'Audi Shock Change.';
    $brand_config['header_li_6'] = 'Audi Avant Shock.';
    $brand_config['header_li_7'] = 'Audi Front Shock Replacement.';
    $brand_config['header_li_8'] = 'Audi Struts Repair.';
    $brand_config['header_li_9'] = 'Audi Lowering Springs.';
    $brand_config['header_li_10'] = 'Audi Ball joint Replacement.';
    $brand_config['header_li_11'] = 'Audi Differential Noise.';
    $brand_config['header_li_12'] = 'Audi Suspension Repair.';
    $brand_config['header_li_13'] = 'Audi Suspension Replacement.';
    $brand_config['header_li_14'] = 'Audi Front Suspension Replacement.';
    $brand_config['header_li_15'] = 'Audi Air Suspension Repair.';
    $brand_config['header_li_16'] = 'Audi Suspension Bushes.';
    $brand_config['header_li_17'] = 'Audi Suspension Change.';
    $brand_config['header_li_18'] = 'Audi upper Suspension Arm.';
    $brand_config['header_li_19'] = 'Audi Suspension mount Replacement.';
    $brand_config['header_li_20'] = 'Audi Suspension Leak.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Audi Shocks Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Suspension ***/
if(isset($_GET['mercedes-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Suspension Repair.';
    $brand_config['header_li_3'] = 'Mercedes Suspension Replacement.';
    $brand_config['header_li_4'] = 'Mercedes Rear Spring Replacement.';
    $brand_config['header_li_5'] = 'Mercedes Air Suspension Repair.';
    $brand_config['header_li_6'] = 'Mercedes Air Compressor Repair.';
    $brand_config['header_li_7'] = 'Mercedes Airmatic Suspension Repair.';
    $brand_config['header_li_8'] = 'Mercedes Hydraulic Suspension Repair.';
    $brand_config['header_li_9'] = 'Mercedes Suspension Change.';
    $brand_config['header_li_10'] = 'Mercedes Shocks Repair.';
    $brand_config['header_li_11'] = 'Mercedes Battery Repair.';
    $brand_config['header_li_12'] = 'Mercedes Tires Repair.';
    $brand_config['header_li_13'] = 'Mercedes Computer Reprogram.';
    $brand_config['header_li_14'] = 'Mercedes Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Steering Repair.';
    $brand_config['header_li_20'] = 'Mercedes Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Mercedes Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Shocks Repair ***/
if(isset($_GET['mercedes-shocks-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-shocks-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Shocks Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Shocks Repair.';
    $brand_config['header_li_3'] = 'Mercedes Shocks Replacement.';
    $brand_config['header_li_4'] = 'Mercedes Shocks Change.';
    $brand_config['header_li_5'] = 'Mercedes Struts.';
    $brand_config['header_li_6'] = 'Mercedes Struts Replacement.';
    $brand_config['header_li_7'] = 'Mercedes Struts Repair.';
    $brand_config['header_li_8'] = 'Mercedes Suspension Repair.';
    $brand_config['header_li_9'] = 'Mercedes Rear Air Spring Replacement.';
    $brand_config['header_li_10'] = 'Mercedes ML Rear Spring Replacement.';
    $brand_config['header_li_11'] = 'Mercedes Battery Repair.';
    $brand_config['header_li_12'] = 'Mercedes Tires Repair.';
    $brand_config['header_li_13'] = 'Mercedes Computer Reprogram.';
    $brand_config['header_li_14'] = 'Mercedes Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Rebuild.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Steering Repair.';
    $brand_config['header_li_20'] = 'Mercedes Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Mercedes Shocks Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Suspension Repair ***/
if(isset($_GET['bmw-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'BMW Suspension Repair.';
    $brand_config['header_li_3'] = 'BMW Suspension Bushes.';
    $brand_config['header_li_4'] = 'BMW Lower Suspension Arm.';
    $brand_config['header_li_5'] = 'BMW Suspension Change.';
    $brand_config['header_li_6'] = 'BMW Air Suspension Replacement.';
    $brand_config['header_li_7'] = 'BMW Suspension Link.';
    $brand_config['header_li_8'] = 'BMW Rear Air Bag Suspension.';
    $brand_config['header_li_9'] = 'BMW Suspension Replacement.';
    $brand_config['header_li_10'] = 'BMW Suspension Rebuild.';
    $brand_config['header_li_11'] = 'BMW Upper Suspension Arm.';
    $brand_config['header_li_12'] = 'BMW Shocks Repair.';
    $brand_config['header_li_13'] = 'BMW Front Suspension Replacement.';
    $brand_config['header_li_14'] = 'BMW Air Suspension Repair.';
    $brand_config['header_li_15'] = 'BMW Rear Suspension Replacement.';
    $brand_config['header_li_16'] = 'BMW Air Suspension Compressor Repair.';
    $brand_config['header_li_17'] = 'BMW Front Suspension Noise.';
    $brand_config['header_li_18'] = 'BMW Suspension Spring.';
    $brand_config['header_li_19'] = 'BMW Suspension Mount.';
    $brand_config['header_li_20'] = 'BMW Suspension Airbag Replacement.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized BMW Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Suspension Repair ***/
if(isset($_GET['volkswagen-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Suspension Repair.';
    $brand_config['header_li_3'] = 'Volkswagen Suspension Replacement.';
    $brand_config['header_li_4'] = 'Volkswagen Air Suspension Repair.';
    $brand_config['header_li_5'] = 'Volkswagen Suspension Knocking Noise.';
    $brand_config['header_li_6'] = 'Volkswagen Suspension Change.';
    $brand_config['header_li_7'] = 'Volkswagen Hydraulic Suspension Repair.';
    $brand_config['header_li_8'] = 'Volkswagen Shocks Change.';
    $brand_config['header_li_9'] = 'Volkswagen Shocks.';
    $brand_config['header_li_10'] = 'Volkswagen Struts Repair.';
    $brand_config['header_li_11'] = 'Volkswagen Shocks Replacement.';
    $brand_config['header_li_12'] = 'Volkswagen Air Compressor Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Front Suspension Replacement.';
    $brand_config['header_li_14'] = 'Volkswagen Suspension Airbag Replacement.';
    $brand_config['header_li_15'] = 'Volkswagen Rear Suspension Replacement.';
    $brand_config['header_li_16'] = 'Volkswagen Air Suspension Compressor Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Front Suspension Noise.';
    $brand_config['header_li_18'] = 'Volkswagen Suspension Spring.';
    $brand_config['header_li_19'] = 'Volkswagen Suspension Mount Replacement.';
    $brand_config['header_li_20'] = 'Volkswagen Brake Pads Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Volkswagen Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Porsche Suspension Repair ***/
if(isset($_GET['porsche-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Porsche Suspension Repair.';
    $brand_config['header_li_3'] = 'Porsche Rear Suspension.';
    $brand_config['header_li_4'] = 'Porsche Lowering Springs.';
    $brand_config['header_li_5'] = 'Porsche Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Porsche Air Suspension.';
    $brand_config['header_li_7'] = 'Porsche Front Suspension.';
    $brand_config['header_li_8'] = 'Porsche Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Porsche Suspension Replacement.';
    $brand_config['header_li_10'] = 'Porsche Front Suspension.';
    $brand_config['header_li_11'] = 'Porsche Suspension Change.';
    $brand_config['header_li_12'] = 'Porsche Shocks Repair.';
    $brand_config['header_li_13'] = 'Porsche Shock Absorbers.';
    $brand_config['header_li_14'] = 'Porsche Shocks Change.';
    $brand_config['header_li_15'] = 'Porsche Struts Repair.';
    $brand_config['header_li_16'] = 'Porsche Shocks Replacement.';
    $brand_config['header_li_17'] = 'Porsche Air Suspension Repair.';
    $brand_config['header_li_18'] = 'Porsche Cayman Suspension.';
    $brand_config['header_li_19'] = 'Porsche Lowering Springs.';
    $brand_config['header_li_20'] = 'Porsche Oil Leak Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Porsche Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Range Rover Suspension Repair ***/
if(isset($_GET['range-rover-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?range-rover-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Range Rover";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Range Rover Suspension Repair.';
    $brand_config['header_li_3'] = 'Range Rover Rear Suspension.';
    $brand_config['header_li_4'] = 'Range Rover Lowering Springs.';
    $brand_config['header_li_5'] = 'Range Rover Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Range Rover Air Suspension.';
    $brand_config['header_li_7'] = 'Range Rover Front Suspension.';
    $brand_config['header_li_8'] = 'Range Rover Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Range Rover Suspension Replacement.';
    $brand_config['header_li_10'] = 'Range Rover Front Suspension.';
    $brand_config['header_li_11'] = 'Range Rover Suspension Change.';
    $brand_config['header_li_12'] = 'Range Rover Shocks Repair.';
    $brand_config['header_li_13'] = 'Range Rover Shock Absorbers.';
    $brand_config['header_li_14'] = 'Range Rover Shocks Change.';
    $brand_config['header_li_15'] = 'Range Rover Struts Repair.';
    $brand_config['header_li_16'] = 'Range Rover Shocks Replacement.';
    $brand_config['header_li_17'] = 'Range Rover Air Suspension Repair.';
    $brand_config['header_li_18'] = 'Range Rover Oil Leak Repair.';
    $brand_config['header_li_19'] = 'Range Rover Lowering Springs.';
    $brand_config['header_li_20'] = 'Range Rover Brake Pad Replacement.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Range Rover Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/range-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Bentley Suspension Repair ***/
if(isset($_GET['bentley-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bentley-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Bentley";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Bentley Suspension Repair.';
    $brand_config['header_li_3'] = 'Bentley Rear Suspension.';
    $brand_config['header_li_4'] = 'Bentley Lowering Springs.';
    $brand_config['header_li_5'] = 'Bentley Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Bentley Air Suspension.';
    $brand_config['header_li_7'] = 'Bentley Front Suspension.';
    $brand_config['header_li_8'] = 'Bentley Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Bentley Suspension Replacement.';
    $brand_config['header_li_10'] = 'Bentley Suspension Change.';
    $brand_config['header_li_11'] = 'Bentley Suspension Mount.';
    $brand_config['header_li_12'] = 'Bentley Shock Absorbers.';
    $brand_config['header_li_13'] = 'Bentley Shocks Change.';
    $brand_config['header_li_14'] = 'Bentley Struts Repair.';
    $brand_config['header_li_15'] = 'Bentley Shocks Replacement.';
    $brand_config['header_li_16'] = 'Bentley Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Bentley Lowering Springs.';
    $brand_config['header_li_18'] = 'Bentley Transmission Repair.';
    $brand_config['header_li_19'] = 'Bentley Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Bentley Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Bentley Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bentley.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bentley-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bentley/bentley.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Aston Martin Suspension Repair ***/
if(isset($_GET['aston-martin-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Aston Martin Suspension Repair.';
    $brand_config['header_li_3'] = 'Aston Martin Rear Suspension.';
    $brand_config['header_li_4'] = 'Aston Martin Lowering Springs.';
    $brand_config['header_li_5'] = 'Aston Martin Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Aston Martin Air Suspension.';
    $brand_config['header_li_7'] = 'Aston Martin Front Suspension.';
    $brand_config['header_li_8'] = 'Aston Martin Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Aston Martin Suspension Replacement.';
    $brand_config['header_li_10'] = 'Aston Martin Suspension Change.';
    $brand_config['header_li_11'] = 'Aston Martin Suspension Mount.';
    $brand_config['header_li_12'] = 'Aston Martin Shock Absorbers.';
    $brand_config['header_li_13'] = 'Aston Martin Shocks Change.';
    $brand_config['header_li_14'] = 'Aston Martin Struts Repair.';
    $brand_config['header_li_15'] = 'Aston Martin Shocks Replacement.';
    $brand_config['header_li_16'] = 'Aston Martin Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Aston Martin Lowering Springs.';
    $brand_config['header_li_18'] = 'Aston Martin Transmission Repair.';
    $brand_config['header_li_19'] = 'Aston Martin Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Aston Martin Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Aston Martin Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Rolls Royce Suspension Repair ***/
if(isset($_GET['rolls-royce-suspension'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?rolls-royce-suspension";
    
    // Brand Name
    $brand_config['brand'] = "Rolls Royce";
    $brand_config['brand_title'] = "Suspension";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Rolls Royce Suspension System.';
    $brand_config['header_li_3'] = 'Rolls Royce Rear Suspension.';
    $brand_config['header_li_4'] = 'Rolls Royce Lowering Springs.';
    $brand_config['header_li_5'] = 'Rolls Royce Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Rolls Royce Air Suspension.';
    $brand_config['header_li_7'] = 'Rolls Royce Front Suspension.';
    $brand_config['header_li_8'] = 'Rolls Royce Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Rolls Royce Suspension Replacement.';
    $brand_config['header_li_10'] = 'Rolls Royce Suspension Change.';
    $brand_config['header_li_11'] = 'Rolls Royce Suspension Mount.';
    $brand_config['header_li_12'] = 'Rolls Royce Shock Absorbers.';
    $brand_config['header_li_13'] = 'Rolls Royce Shocks Change.';
    $brand_config['header_li_14'] = 'Rolls Royce Struts Replacement.';
    $brand_config['header_li_15'] = 'Rolls Royce Shocks Replacement.';
    $brand_config['header_li_16'] = 'Rolls Royce Air Suspension.';
    $brand_config['header_li_17'] = 'Rolls Royce Lowering Springs.';
    $brand_config['header_li_18'] = 'Rolls Royce Transmission Repair.';
    $brand_config['header_li_19'] = 'Rolls Royce Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Rolls Royce Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - Specialized Rolls Royce Suspension System In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/rolls-royce.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/rolls-royce.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/rolls-royce/rolls-royce.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Jaguar Suspension ***/
if(isset($_GET['jaguar-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jaguar-suspension";
    
    // Brand Name
    $brand_config['brand'] = "Jaguar";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Jaguar Suspension Repair.';
    $brand_config['header_li_3'] = 'Jaguar Rear Suspension.';
    $brand_config['header_li_4'] = 'Jaguar Lowering Springs.';
    $brand_config['header_li_5'] = 'Jaguar Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Jaguar Air Suspension.';
    $brand_config['header_li_7'] = 'Jaguar Front Suspension.';
    $brand_config['header_li_8'] = 'Jaguar Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Jaguar Suspension Replacement.';
    $brand_config['header_li_10'] = 'Jaguar Suspension Change.';
    $brand_config['header_li_11'] = 'Jaguar Suspension Mount.';
    $brand_config['header_li_12'] = 'Jaguar Shock Absorbers.';
    $brand_config['header_li_13'] = 'Jaguar Shocks Change.';
    $brand_config['header_li_14'] = 'Jaguar Struts Repair.';
    $brand_config['header_li_15'] = 'Jaguar Shocks Replacement.';
    $brand_config['header_li_16'] = 'Jaguar Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Jaguar Lowering Springs.';
    $brand_config['header_li_18'] = 'Jaguar Transmission Repair.';
    $brand_config['header_li_19'] = 'Jaguar Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Jaguar Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In All Jaguar Models Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jaguar.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jaguar-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jaguar/jaguar-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Land Rover Suspension Repair ***/
if(isset($_GET['land-rover-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?land-rover-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Land Rover";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Land Rover Suspension Repair.';
    $brand_config['header_li_3'] = 'Land Rover Rear Suspension.';
    $brand_config['header_li_4'] = 'Land Rover Lowering Springs.';
    $brand_config['header_li_5'] = 'Land Rover Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Land Rover Air Suspension.';
    $brand_config['header_li_7'] = 'Land Rover Front Suspension.';
    $brand_config['header_li_8'] = 'Land Rover Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Land Rover Suspension Replacement.';
    $brand_config['header_li_10'] = 'Land Rover Front Suspension.';
    $brand_config['header_li_11'] = 'Land Rover Suspension Change.';
    $brand_config['header_li_12'] = 'Land Rover Shocks Repair.';
    $brand_config['header_li_13'] = 'Land Rover Shock Absorbers.';
    $brand_config['header_li_14'] = 'Land Rover Shocks Change.';
    $brand_config['header_li_15'] = 'Land Rover Struts Repair.';
    $brand_config['header_li_16'] = 'Land Rover Shocks Replacement.';
    $brand_config['header_li_17'] = 'Land Rover Air Suspension Repair.';
    $brand_config['header_li_18'] = 'Land Rover Cayman Suspension.';
    $brand_config['header_li_19'] = 'Land Rover Lowering Springs.';
    $brand_config['header_li_20'] = 'Land Rover Oil Leak Repair.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Land Rover Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/land-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Maserati Suspension ***/
if(isset($_GET['maserati-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?maserati-suspension";
    
    // Brand Name
    $brand_config['brand'] = "Maserati";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Maserati Suspension Repair.';
    $brand_config['header_li_3'] = 'Maserati Rear Suspension.';
    $brand_config['header_li_4'] = 'Maserati Lowering Springs.';
    $brand_config['header_li_5'] = 'Maserati Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Maserati Air Suspension.';
    $brand_config['header_li_7'] = 'Maserati Front Suspension.';
    $brand_config['header_li_8'] = 'Maserati Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Maserati Suspension Replacement.';
    $brand_config['header_li_10'] = 'Maserati Suspension Change.';
    $brand_config['header_li_11'] = 'Maserati Suspension Mount.';
    $brand_config['header_li_12'] = 'Maserati Shock Absorbers.';
    $brand_config['header_li_13'] = 'Maserati Shocks Change.';
    $brand_config['header_li_14'] = 'Maserati Struts Repair.';
    $brand_config['header_li_15'] = 'Maserati Shocks Replacement.';
    $brand_config['header_li_16'] = 'Maserati Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Maserati Lowering Springs.';
    $brand_config['header_li_18'] = 'Maserati Transmission Repair.';
    $brand_config['header_li_19'] = 'Maserati Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Maserati Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Maserati Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/maserati.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/maserati-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/maserati/maserati.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Ferrari Suspension ***/
if(isset($_GET['ferrari-suspension'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?ferrari-suspension";
    
    // Brand Name
    $brand_config['brand'] = "Ferrari";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Ferrari Suspension Repair.';
    $brand_config['header_li_3'] = 'Ferrari Rear Suspension.';
    $brand_config['header_li_4'] = 'Ferrari Lowering Springs.';
    $brand_config['header_li_5'] = 'Ferrari Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Ferrari Air Suspension.';
    $brand_config['header_li_7'] = 'Ferrari Front Suspension.';
    $brand_config['header_li_8'] = 'Ferrari Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Ferrari Suspension Replacement.';
    $brand_config['header_li_10'] = 'Ferrari Suspension Change.';
    $brand_config['header_li_11'] = 'Ferrari Suspension Mount.';
    $brand_config['header_li_12'] = 'Ferrari Shock Absorbers.';
    $brand_config['header_li_13'] = 'Ferrari Shocks Change.';
    $brand_config['header_li_14'] = 'Ferrari Struts Repair.';
    $brand_config['header_li_15'] = 'Ferrari Shocks Replacement.';
    $brand_config['header_li_16'] = 'Ferrari Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Ferrari Lowering Springs.';
    $brand_config['header_li_18'] = 'Ferrari Transmission Repair.';
    $brand_config['header_li_19'] = 'Ferrari Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Ferrari Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Ferrari Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/ferrari-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/ferrari-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/ferrari/ferrari.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mclaren Suspension ***/
if(isset($_GET['mclaren-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mclaren-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mclaren";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mclaren Suspension Repair.';
    $brand_config['header_li_3'] = 'Mclaren Rear Suspension.';
    $brand_config['header_li_4'] = 'Mclaren Lowering Springs.';
    $brand_config['header_li_5'] = 'Mclaren Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Mclaren Air Suspension.';
    $brand_config['header_li_7'] = 'Mclaren Front Suspension.';
    $brand_config['header_li_8'] = 'Mclaren Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Mclaren Suspension Replacement.';
    $brand_config['header_li_10'] = 'Mclaren Suspension Change.';
    $brand_config['header_li_11'] = 'Mclaren Suspension Mount.';
    $brand_config['header_li_12'] = 'Mclaren Shock Absorbers.';
    $brand_config['header_li_13'] = 'Mclaren Shocks Change.';
    $brand_config['header_li_14'] = 'Mclaren Struts Repair.';
    $brand_config['header_li_15'] = 'Mclaren Shocks Replacement.';
    $brand_config['header_li_16'] = 'Mclaren Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Mclaren Lowering Springs.';
    $brand_config['header_li_18'] = 'Mclaren Transmission Repair.';
    $brand_config['header_li_19'] = 'Mclaren Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Mclaren Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Mclaren Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mclaren-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mclaren-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mclaren/mclaren.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Lamborghini Suspension ***/
if(isset($_GET['lamborghini-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?lamborghini-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Lamborghini";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Lamborghini Suspension Repair.';
    $brand_config['header_li_3'] = 'Lamborghini Rear Suspension.';
    $brand_config['header_li_4'] = 'Lamborghini Lowering Springs.';
    $brand_config['header_li_5'] = 'Lamborghini Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Lamborghini Air Suspension.';
    $brand_config['header_li_7'] = 'Lamborghini Front Suspension.';
    $brand_config['header_li_8'] = 'Lamborghini Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Lamborghini Suspension Replacement.';
    $brand_config['header_li_10'] = 'Lamborghini Suspension Change.';
    $brand_config['header_li_11'] = 'Lamborghini Suspension Mount.';
    $brand_config['header_li_12'] = 'Lamborghini Shock Absorbers.';
    $brand_config['header_li_13'] = 'Lamborghini Shocks Change.';
    $brand_config['header_li_14'] = 'Lamborghini Struts Repair.';
    $brand_config['header_li_15'] = 'Lamborghini Shocks Replacement.';
    $brand_config['header_li_16'] = 'Lamborghini Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Lamborghini Lowering Springs.';
    $brand_config['header_li_18'] = 'Lamborghini Transmission Repair.';
    $brand_config['header_li_19'] = 'Lamborghini Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Lamborghini Oil Leak Repair.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Lamborghini Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/lamborghini.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/lamborghini-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/lamborghini/lamborghini.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Ford Suspension ***/
if(isset($_GET['ford-suspension'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?ford-suspension";
    
    // Brand Name
    $brand_config['brand'] = "Ford";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Ford Suspension Repair.';
    $brand_config['header_li_3'] = 'Ford Rear Suspension.';
    $brand_config['header_li_4'] = 'Ford Lowering Springs.';
    $brand_config['header_li_5'] = 'Ford Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Ford Air Suspension.';
    $brand_config['header_li_7'] = 'Ford Front Suspension.';
    $brand_config['header_li_8'] = 'Ford Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Ford Suspension Replacement.';
    $brand_config['header_li_10'] = 'Ford Suspension Change.';
    $brand_config['header_li_11'] = 'Ford Suspension Mount.';
    $brand_config['header_li_12'] = 'Ford Shock Absorbers.';
    $brand_config['header_li_13'] = 'Ford Shocks Change.';
    $brand_config['header_li_14'] = 'Ford Struts Repair.';
    $brand_config['header_li_15'] = 'Ford Shocks Replacement.';
    $brand_config['header_li_16'] = 'Ford Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Ford Lowering Springs.';
    $brand_config['header_li_18'] = 'Ford Transmission Repair.';
    $brand_config['header_li_19'] = 'Ford Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Ford Oil Leak Repair.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Ford Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/ford.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/ford-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/ford/ford-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Jeep Suspension Repair ***/
if(isset($_GET['jeep-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jeep-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jeep";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Jeep Suspension Repair.';
    $brand_config['header_li_3'] = 'Jeep Rear Suspension.';
    $brand_config['header_li_4'] = 'Jeep Lowering Springs.';
    $brand_config['header_li_5'] = 'Jeep Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Jeep Air Suspension.';
    $brand_config['header_li_7'] = 'Jeep Front Suspension.';
    $brand_config['header_li_8'] = 'Jeep Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Jeep Suspension Replacement.';
    $brand_config['header_li_10'] = 'Jeep Suspension Change.';
    $brand_config['header_li_11'] = 'Jeep Suspension Mount.';
    $brand_config['header_li_12'] = 'Jeep Shock Absorbers.';
    $brand_config['header_li_13'] = 'Jeep Shocks Change.';
    $brand_config['header_li_14'] = 'Jeep Struts Repair.';
    $brand_config['header_li_15'] = 'Jeep Shocks Replacement.';
    $brand_config['header_li_16'] = 'Jeep Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Jeep Lowering Springs.';
    $brand_config['header_li_18'] = 'Jeep Transmission Repair.';
    $brand_config['header_li_19'] = 'Jeep Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Jeep Oil Leak Repair.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Jeep Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jeep.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jeep-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jeep/jeep-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mini Suspension Repair ***/
if(isset($_GET['mini-cooper-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mini-cooper-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mini Cooper";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mini Cooper Suspension Repair.';
    $brand_config['header_li_3'] = 'Mini Cooper Rear Suspension.';
    $brand_config['header_li_4'] = 'Mini Cooper Lowering Springs.';
    $brand_config['header_li_5'] = 'Mini Cooper Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Mini Cooper Air Suspension.';
    $brand_config['header_li_7'] = 'Mini Cooper Front Suspension.';
    $brand_config['header_li_8'] = 'Mini Cooper Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Mini Cooper Suspension Replacement.';
    $brand_config['header_li_10'] = 'Mini Cooper Suspension Change.';
    $brand_config['header_li_11'] = 'Mini Cooper Suspension Mount.';
    $brand_config['header_li_12'] = 'Mini Cooper Shock Absorbers.';
    $brand_config['header_li_13'] = 'Mini Cooper Shocks Change.';
    $brand_config['header_li_14'] = 'Mini Cooper Struts Repair.';
    $brand_config['header_li_15'] = 'Mini Cooper Shocks Replacement.';
    $brand_config['header_li_16'] = 'Mini Cooper Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Mini Cooper Lowering Springs.';
    $brand_config['header_li_18'] = 'Mini Cooper Transmission Repair.';
    $brand_config['header_li_19'] = 'Mini Cooper Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Mini Cooper Oil Leak Repair.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Mini Cooper Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mini-cooper.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mini-cooper-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mini-cooper/mini-cooper.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Cadillac Suspension Repair ***/
if(isset($_GET['cadillac-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?cadillac-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Cadillac";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Cadillac Suspension Repair.';
    $brand_config['header_li_3'] = 'Cadillac Rear Suspension.';
    $brand_config['header_li_4'] = 'Cadillac Lowering Springs.';
    $brand_config['header_li_5'] = 'Cadillac Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Cadillac Air Suspension.';
    $brand_config['header_li_7'] = 'Cadillac Front Suspension.';
    $brand_config['header_li_8'] = 'Cadillac Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Cadillac Suspension Replacement.';
    $brand_config['header_li_10'] = 'Cadillac Suspension Change.';
    $brand_config['header_li_11'] = 'Cadillac Suspension Mount.';
    $brand_config['header_li_12'] = 'Cadillac Shock Absorbers.';
    $brand_config['header_li_13'] = 'Cadillac Shocks Change.';
    $brand_config['header_li_14'] = 'Cadillac Struts Repair.';
    $brand_config['header_li_15'] = 'Cadillac Shocks Replacement.';
    $brand_config['header_li_16'] = 'Cadillac Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Cadillac Lowering Springs.';
    $brand_config['header_li_18'] = 'Cadillac Transmission Repair.';
    $brand_config['header_li_19'] = 'Cadillac Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Cadillac Oil Leak Repair.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Cadillac Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/cadillac-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/cadillac-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/cadillac/cadillac-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Dodge Suspension Repair ***/
if(isset($_GET['dodge-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?dodge-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "Dodge";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Dodge Suspension Repair.';
    $brand_config['header_li_3'] = 'Dodge Rear Suspension.';
    $brand_config['header_li_4'] = 'Dodge Lowering Springs.';
    $brand_config['header_li_5'] = 'Dodge Adaptive Suspension.';
    $brand_config['header_li_6'] = 'Dodge Air Suspension.';
    $brand_config['header_li_7'] = 'Dodge Front Suspension.';
    $brand_config['header_li_8'] = 'Dodge Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'Dodge Suspension Replacement.';
    $brand_config['header_li_10'] = 'Dodge Suspension Change.';
    $brand_config['header_li_11'] = 'Dodge Suspension Mount.';
    $brand_config['header_li_12'] = 'Dodge Shock Absorbers.';
    $brand_config['header_li_13'] = 'Dodge Shocks Change.';
    $brand_config['header_li_14'] = 'Dodge Struts Repair.';
    $brand_config['header_li_15'] = 'Dodge Shocks Replacement.';
    $brand_config['header_li_16'] = 'Dodge Air Suspension Repair.';
    $brand_config['header_li_17'] = 'Dodge Lowering Springs.';
    $brand_config['header_li_18'] = 'Dodge Transmission Repair.';
    $brand_config['header_li_19'] = 'Dodge Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'Dodge Oil Leak Repair.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Dodge Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/dodge.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/dodge-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/dodge/dodge-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** GMC Suspension Repair ***/
if(isset($_GET['gmc-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?gmc-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "GMC";
    $brand_config['brand_title'] = "Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup And Inspection.';
    $brand_config['header_li_2'] = 'GMC Suspension Repair.';
    $brand_config['header_li_3'] = 'GMC Rear Suspension.';
    $brand_config['header_li_4'] = 'GMC Lowering Springs.';
    $brand_config['header_li_5'] = 'GMC Adaptive Suspension.';
    $brand_config['header_li_6'] = 'GMC Air Suspension.';
    $brand_config['header_li_7'] = 'GMC Front Suspension.';
    $brand_config['header_li_8'] = 'GMC Adaptive Air Suspension.';
    $brand_config['header_li_9'] = 'GMC Suspension Replacement.';
    $brand_config['header_li_10'] = 'GMC Suspension Change.';
    $brand_config['header_li_11'] = 'GMC Suspension Mount.';
    $brand_config['header_li_12'] = 'GMC Shock Absorbers.';
    $brand_config['header_li_13'] = 'GMC Shocks Change.';
    $brand_config['header_li_14'] = 'GMC Struts Repair.';
    $brand_config['header_li_15'] = 'GMC Shocks Replacement.';
    $brand_config['header_li_16'] = 'GMC Air Suspension Repair.';
    $brand_config['header_li_17'] = 'GMC Lowering Springs.';
    $brand_config['header_li_18'] = 'GMC Transmission Repair.';
    $brand_config['header_li_19'] = 'GMC Brake Pad Replacement.';
    $brand_config['header_li_20'] = 'GMC Oil Leak Repair.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In GMC Suspension Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/gmc.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/gmc-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/gmc/gmc-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Service
******************************************************************************************/

/*** Audi Service ***/
if(isset($_GET['audi-service'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-service";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Service";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Service.';
    $brand_config['header_li_3'] = 'Audi Transmission Service.';
    $brand_config['header_li_4'] = 'Audi Suspension Service.';
    $brand_config['header_li_5'] = 'Audi Brake Pads Service.';
    $brand_config['header_li_6'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_7'] = 'Audi Oil Change Service.';
    $brand_config['header_li_8'] = 'Audi Gearbox Service.';
    $brand_config['header_li_9'] = 'Audi Engine Service.';
    $brand_config['header_li_10'] = 'Audi Wheel Service.';
    $brand_config['header_li_11'] = 'Audi Battery Service.';
    $brand_config['header_li_12'] = 'Audi Tires Service.';
    $brand_config['header_li_13'] = 'Audi Computer Reprogram.';
    $brand_config['header_li_14'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Service.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Service.';
    $brand_config['header_li_17'] = 'Audi Electrical System Service.';
    $brand_config['header_li_18'] = 'Audi Lighting System Service.';
    $brand_config['header_li_19'] = 'Audi Steering Service.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Audi Car Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Workshop
******************************************************************************************/

/*** Audi workshop ***/
if(isset($_GET['audi-workshop'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-workshop";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Workshop";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_3'] = 'Audi Suspension & Inspection.';
    $brand_config['header_li_4'] = 'Audi Transmission & Inspection.';
    $brand_config['header_li_5'] = 'Audi Transmission Repair.';
    $brand_config['header_li_6'] = 'Audi Major & Minor Services.';
    $brand_config['header_li_7'] = 'General Audi Maintenance.';
    $brand_config['header_li_8'] = 'Audi Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Audi Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Audi Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Specialized Audi Car Workshop In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Garage
******************************************************************************************/

/*** Audi Garage ***/
if(isset($_GET['audi-garage'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-garage";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Garage";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Major & Minor Service.';
    $brand_config['header_li_3'] = 'Audi Engine Tuning & Repair.';
    $brand_config['header_li_4'] = 'Audi Suspension Repair.';
    $brand_config['header_li_5'] = 'Audi Oil Change Service.';
    $brand_config['header_li_6'] = 'Audi Transmission Repair.';
    $brand_config['header_li_7'] = 'Complete Audi Detailing.';
    $brand_config['header_li_8'] = 'Complete Audi Service.';
    $brand_config['header_li_9'] = 'Audi Programming Service.';
    $brand_config['header_li_10'] = 'Audi Battery & Tires Replacement.';
    $brand_config['header_li_11'] = 'Audi Brake Pads Replacement.';
    $brand_config['header_li_12'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_13'] = 'Audi Oil Filter Change Service.';
    $brand_config['header_li_14'] = 'Audi Steering Repair Service.';
    $brand_config['header_li_15'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_16'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_17'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_18'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_19'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_20'] = 'Audi Wheel Alignment Service.';

    $brand_config['header_p_des'] = 'German Cars Repair, We Are Specialized Audi Car Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Land Rover Garage ***/
if(isset($_GET['land-rover-garage'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?land-rover-garage";
    
    // Brand Name
    $brand_config['brand'] = "Land Rover";
    $brand_config['brand_title'] = "Garage";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Land Rover Major & Minor Service.';
    $brand_config['header_li_3'] = 'Land Rover Engine Tuning & Repair.';
    $brand_config['header_li_4'] = 'Land Rover Suspension Repair.';
    $brand_config['header_li_5'] = 'Land Rover Oil Change Service.';
    $brand_config['header_li_6'] = 'Land Rover Transmission Repair.';
    $brand_config['header_li_7'] = 'Complete Land Rover Detailing.';
    $brand_config['header_li_8'] = 'Complete Land Rover Service.';
    $brand_config['header_li_9'] = 'Land Rover Programming Service.';
    $brand_config['header_li_10'] = 'Land Rover Battery & Tires Replacement.';
    $brand_config['header_li_11'] = 'Land Rover Brake Pads Replacement.';
    $brand_config['header_li_12'] = 'Land Rover Computer Diagnostics.';
    $brand_config['header_li_13'] = 'Land Rover Oil Filter Change Service.';
    $brand_config['header_li_14'] = 'Land Rover Steering Repair Service.';
    $brand_config['header_li_15'] = 'Land Rover AC Service & Repair.';
    $brand_config['header_li_16'] = 'Land Rover Engine Maintenance.';
    $brand_config['header_li_17'] = 'Land Rover Glass / Windscreen Repair.';
    $brand_config['header_li_18'] = 'Land Rover Electrical System Repair.';
    $brand_config['header_li_19'] = 'Land Rover Lighting System Repair.';
    $brand_config['header_li_20'] = 'Land Rover Wheel Alignment Service.';

    $brand_config['header_p_des'] = 'German Cars Repair, We Are Specialized Land Rover Car Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/land-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Garage ***/
if(isset($_GET['bmw-garage'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-garage";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Garage";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'BMW Major & Minor Service.';
    $brand_config['header_li_3'] = 'BMW Engine Tuning & Repair.';
    $brand_config['header_li_4'] = 'BMW Suspension Repair.';
    $brand_config['header_li_5'] = 'BMW Oil Change Service.';
    $brand_config['header_li_6'] = 'BMW Transmission Repair.';
    $brand_config['header_li_7'] = 'Complete BMW Detailing.';
    $brand_config['header_li_8'] = 'Complete BMW Service.';
    $brand_config['header_li_9'] = 'BMW Programming Service.';
    $brand_config['header_li_10'] = 'BMW Battery & Tires Replacement.';
    $brand_config['header_li_11'] = 'BMW Brake Pads Replacement.';
    $brand_config['header_li_12'] = 'BMW Computer Diagnostics.';
    $brand_config['header_li_13'] = 'BMW Oil Filter Change Service.';
    $brand_config['header_li_14'] = 'BMW Steering Repair Service.';
    $brand_config['header_li_15'] = 'BMW AC Service & Repair.';
    $brand_config['header_li_16'] = 'BMW Engine Maintenance.';
    $brand_config['header_li_17'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_18'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_19'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_20'] = 'BMW Wheel Alignment Service.';

    $brand_config['header_p_des'] = 'German Cars Repair, We Are Specialized BMW Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Mini Cooper Garage ***/
if(isset($_GET['mini-cooper-garage'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mini-cooper-garage";
    
    // Brand Name
    $brand_config['brand'] = "Mini Cooper";
    $brand_config['brand_title'] = "Garage";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mini Cooper Major & Minor Service.';
    $brand_config['header_li_3'] = 'Mini Cooper Engine Tuning & Repair.';
    $brand_config['header_li_4'] = 'Mini Cooper Suspension Repair.';
    $brand_config['header_li_5'] = 'Mini Cooper Oil Change Service.';
    $brand_config['header_li_6'] = 'Mini Cooper Transmission Repair.';
    $brand_config['header_li_7'] = 'Complete Mini Cooper Detailing.';
    $brand_config['header_li_8'] = 'Complete Mini Cooper Service.';
    $brand_config['header_li_9'] = 'Mini Cooper Programming Service.';
    $brand_config['header_li_10'] = 'Mini Cooper Battery & Tires Replacement.';
    $brand_config['header_li_11'] = 'Mini Cooper Brake Pads Replacement.';
    $brand_config['header_li_12'] = 'Mini Cooper Computer Diagnostics.';
    $brand_config['header_li_13'] = 'Mini Cooper Oil Filter Change Service.';
    $brand_config['header_li_14'] = 'Mini Cooper Steering Repair Service.';
    $brand_config['header_li_15'] = 'Mini Cooper AC Service & Repair.';
    $brand_config['header_li_16'] = 'Mini Cooper Engine Maintenance.';
    $brand_config['header_li_17'] = 'Mini Cooper Glass / Windscreen Repair.';
    $brand_config['header_li_18'] = 'Mini Cooper Electrical System Repair.';
    $brand_config['header_li_19'] = 'Mini Cooper Lighting System Repair.';
    $brand_config['header_li_20'] = 'Mini Cooper Wheel Alignment Service.';

    $brand_config['header_p_des'] = 'German Cars Repair, We Are Specialized Mini Cooper Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mini-cooper.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mini-cooper-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mini-cooper/mini-cooper.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Range Rover Garage ***/
if(isset($_GET['range-rover-garage'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?range-rover-garage";
    
    // Brand Name
    $brand_config['brand'] = "Range Rover";
    $brand_config['brand_title'] = "Garage";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Range Rover Major & Minor Service.';
    $brand_config['header_li_3'] = 'Range Rover Engine Tuning & Repair.';
    $brand_config['header_li_4'] = 'Range Rover Suspension Repair.';
    $brand_config['header_li_5'] = 'Range Rover Oil Change Service.';
    $brand_config['header_li_6'] = 'Range Rover Transmission Repair.';
    $brand_config['header_li_7'] = 'Complete Range Rover Detailing.';
    $brand_config['header_li_8'] = 'Complete Range Rover Service.';
    $brand_config['header_li_9'] = 'Range Rover Programming Service.';
    $brand_config['header_li_10'] = 'Range Rover Battery & Tires Replacement.';
    $brand_config['header_li_11'] = 'Range Rover Brake Pads Replacement.';
    $brand_config['header_li_12'] = 'Range Rover Computer Diagnostics.';
    $brand_config['header_li_13'] = 'Range Rover Oil Filter Change Service.';
    $brand_config['header_li_14'] = 'Range Rover Steering Repair Service.';
    $brand_config['header_li_15'] = 'Range Rover AC Service & Repair.';
    $brand_config['header_li_16'] = 'Range Rover Engine Maintenance.';
    $brand_config['header_li_17'] = 'Range Rover Glass / Windscreen Repair.';
    $brand_config['header_li_18'] = 'Range Rover Electrical System Repair.';
    $brand_config['header_li_19'] = 'Range Rover Lighting System Repair.';
    $brand_config['header_li_20'] = 'Range Rover Wheel Alignment Service.';

    $brand_config['header_p_des'] = 'German Cars Repair, We Are Specialized Range Rover Car Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/range-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*****************************************************************************************
Cars Engine Repair
******************************************************************************************/

/*** Audi Engine Repair ***/
if(isset($_GET['audi-engine-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-engine-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Engine";
    $brand_config['brand_title_2'] = "Repair";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Engine Tuning.';
    $brand_config['header_li_3'] = 'Audi Engine Detailing.';
    $brand_config['header_li_4'] = 'Audi Engine Diagnosis.';
    $brand_config['header_li_5'] = 'Audi Transmission & Suspension.';
    $brand_config['header_li_6'] = 'Audi Major & Minor Services.';
    $brand_config['header_li_7'] = 'Audi Complete Engine Overhaul.';
    $brand_config['header_li_8'] = 'Audi Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Audi Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Audi Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Specialized Audi Engine Repair - Tuning - Detailing & Engine Diagnosis In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Engine Repair ***/
if(isset($_GET['mercedes-engine-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-engine-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Engine Repair & Replacement";
    $brand_config['brand_title_2'] = "";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Engine Repair.';
    $brand_config['header_li_3'] = 'Mercedes Engine Replacement.';
    $brand_config['header_li_4'] = 'Mercedes Engine Diagnosis.';
    $brand_config['header_li_5'] = 'Mercedes Transmission & Suspension.';
    $brand_config['header_li_6'] = 'Mercedes Major & Minor Services.';
    $brand_config['header_li_7'] = 'Mercedes Complete Engine Overhaul.';
    $brand_config['header_li_8'] = 'Mercedes Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Mercedes Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Mercedes Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Mercedes Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Mercedes Oil Filter Service.';
    $brand_config['header_li_13'] = 'Mercedes Steering Repair.';
    $brand_config['header_li_14'] = 'Mercedes AC Service & Repair.';
    $brand_config['header_li_15'] = 'Mercedes Engine Maintenance.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Mercedes Engine Detailing.';

    $brand_config['header_p_des'] = 'We Are Specialized Mercedes Engine Repair - Replacement - Tuning - Detailing & Engine Diagnosis In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Specialist
******************************************************************************************/

/*** Audi Specialist ***/
if(isset($_GET['audi-specialist'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-specialist";
    
    // Brand Name
    $brand_config['brand'] = "Audi Car";
    $brand_config['brand_title'] = "Specialist";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Engine Tuning.';
    $brand_config['header_li_3'] = 'Audi Transmission & Suspension.';
    $brand_config['header_li_4'] = 'Audi Engine Diagnosis.';
    $brand_config['header_li_5'] = 'Audi Major & Minor Services.';
    $brand_config['header_li_6'] = 'Audi Engine Detailing.';
    $brand_config['header_li_7'] = 'Audi Complete Engine Overhaul.';
    $brand_config['header_li_8'] = 'Audi Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Audi Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Audi Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Audi Car Specialist In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Transmission
******************************************************************************************/

/*** Audi Transmission ***/
if(isset($_GET['audi-transmission'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-transmission";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Transmission Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Transmission Repair.';
    $brand_config['header_li_3'] = 'Audi Transmission Rebuild.';
    $brand_config['header_li_4'] = 'Audi Transmission Change.';
    $brand_config['header_li_5'] = 'Audi Transmission Reset.';
    $brand_config['header_li_6'] = 'Audi Transmission Overhaul.';
    $brand_config['header_li_7'] = 'Audi Transmission Service.';
    $brand_config['header_li_8'] = 'Audi Transmission Replace.';
    $brand_config['header_li_9'] = 'Audi Transmission Check Up.';
    $brand_config['header_li_10'] = 'Audi Transmission Upgrade.';
    $brand_config['header_li_11'] = 'Audi Engine Repair.';
    $brand_config['header_li_12'] = 'Body Damage Repair & Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Suspension Repair.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Audi Car Transmission Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Audi Gearbox Repair ***/
if(isset($_GET['audi-gearbox-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-gearbox-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Gearbox Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Gearbox Repair.';
    $brand_config['header_li_3'] = 'Audi Gearbox Service.';
    $brand_config['header_li_4'] = 'Audi Gearbox Rebuild.';
    $brand_config['header_li_5'] = 'Audi Gearbox Reset.';
    $brand_config['header_li_6'] = 'Audi Gearbox Replace.';
    $brand_config['header_li_7'] = 'Audi Gearbox Overhaul.';
    $brand_config['header_li_8'] = 'Audi Gearbox CheckUP.';
    $brand_config['header_li_9'] = 'Audi Gearbox Upgrade.';
    $brand_config['header_li_10'] = 'Audi Gearbox Change.';
    $brand_config['header_li_11'] = 'Audi Gearbox Replacement.';
    $brand_config['header_li_12'] = 'Body Damage Repair & Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Suspension Repair.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Audi Gearbox Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Transmission ***/
if(isset($_GET['mercedes-transmission'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-transmission";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Transmission Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Transmission Repair.';
    $brand_config['header_li_3'] = 'Mercedes Transmission Reset.';
    $brand_config['header_li_4'] = 'Mercedes Transmission Replacement.';
    $brand_config['header_li_5'] = 'Mercedes Transmission Check Up.';
    $brand_config['header_li_6'] = 'Mercedes Transmission Upgrade.';
    $brand_config['header_li_7'] = 'Mercedes Transmission Change.';
    $brand_config['header_li_8'] = 'Mercedes Transmission Rebuild.';
    $brand_config['header_li_9'] = 'Mercedes Transmission Overhaul.';
    $brand_config['header_li_10'] = 'Mercedes Engine Replacement.';
    $brand_config['header_li_11'] = 'Mercedes Engine Change.';
    $brand_config['header_li_12'] = 'Mercedes Engine Tire Repair.';
    $brand_config['header_li_13'] = 'Mercedes Steering Repair.';
    $brand_config['header_li_14'] = 'Mercedes AC Service & Repair.';
    $brand_config['header_li_15'] = 'Mercedes Suspension Repair.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Mercedes Transmission Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Gearbox ***/
if(isset($_GET['mercedes-gearbox'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-gearbox";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Gearbox Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Gearbox Repair.';
    $brand_config['header_li_3'] = 'Mercedes Gearbox Rebuild.';
    $brand_config['header_li_4'] = 'Mercedes Gearbox Check Up.';
    $brand_config['header_li_5'] = 'Mercedes Gearbox Overhaul.';
    $brand_config['header_li_6'] = 'Mercedes Gearbox Reset.';
    $brand_config['header_li_7'] = 'Mercedes Gearbox Change.';
    $brand_config['header_li_8'] = 'Mercedes Gearbox Upgrade.';
    $brand_config['header_li_9'] = 'Mercedes Gearbox Replace.';
    $brand_config['header_li_10'] = 'Mercedes Gearbox Service.';
    $brand_config['header_li_11'] = 'Mercedes Gearbox Replacement.';
    $brand_config['header_li_12'] = 'Mercedes Engine Tire Repair.';
    $brand_config['header_li_13'] = 'Mercedes Steering Repair.';
    $brand_config['header_li_14'] = 'Mercedes AC Service & Repair.';
    $brand_config['header_li_15'] = 'Mercedes Suspension Repair.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Mercedes Gearbox Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Transmission ***/
if(isset($_GET['bmw-transmission'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-transmission";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Transmission Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'BMW Transmission Repair.';
    $brand_config['header_li_3'] = 'BMW Transmission Rebuild.';
    $brand_config['header_li_4'] = 'BMW Transmission Overhaul.';
    $brand_config['header_li_5'] = 'BMW Transmission Reset.';
    $brand_config['header_li_6'] = 'BMW Transmission Change.';
    $brand_config['header_li_7'] = 'BMW Transmission Service.';
    $brand_config['header_li_8'] = 'BMW Transmission Check.';
    $brand_config['header_li_9'] = 'BMW Transmission Upgrade.';
    $brand_config['header_li_10'] = 'BMW Transmission Replacement.';
    $brand_config['header_li_11'] = 'BMW Gearbox Replacement.';
    $brand_config['header_li_12'] = 'BMW Engine Tire Repair.';
    $brand_config['header_li_13'] = 'BMW Steering Repair.';
    $brand_config['header_li_14'] = 'BMW AC Service & Repair.';
    $brand_config['header_li_15'] = 'BMW Suspension Repair.';
    $brand_config['header_li_16'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_18'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_19'] = 'BMW Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In BMW Transmission Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Gearbox ***/
if(isset($_GET['bmw-gearbox'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-gearbox";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Gearbox Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'BMW Gearbox Repair.';
    $brand_config['header_li_3'] = 'BMW Gearbox Rebuild.';
    $brand_config['header_li_4'] = 'BMW Gearbox Check.';
    $brand_config['header_li_5'] = 'BMW Gearbox Change.';
    $brand_config['header_li_6'] = 'BMW Gearbox Service.';
    $brand_config['header_li_7'] = 'BMW Gearbox Replacement.';
    $brand_config['header_li_8'] = 'BMW Gearbox Upgrade.';
    $brand_config['header_li_9'] = 'BMW Gearbox Overhaul.';
    $brand_config['header_li_10'] = 'BMW Engine Repair.';
    $brand_config['header_li_11'] = 'BMW Engine Battery Repair.';
    $brand_config['header_li_12'] = 'BMW Engine Tire Repair.';
    $brand_config['header_li_13'] = 'BMW Steering Repair.';
    $brand_config['header_li_14'] = 'BMW AC Service & Repair.';
    $brand_config['header_li_15'] = 'BMW Suspension Repair.';
    $brand_config['header_li_16'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_18'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_19'] = 'BMW Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In BMW Gearbox Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Transmission ***/
if(isset($_GET['volkswagen-transmission'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-transmission";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Transmission Repair";
    $brand_config['brand_title_2'] = "";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Transmission Repair.';
    $brand_config['header_li_3'] = 'Volkswagen Transmission Overhaul.';
    $brand_config['header_li_4'] = 'Volkswagen Transmission Replace.';
    $brand_config['header_li_5'] = 'Volkswagen Transmission Upgrade.';
    $brand_config['header_li_6'] = 'Volkswagen Transmission Service.';
    $brand_config['header_li_7'] = 'Volkswagen Transmission Rebuild.';
    $brand_config['header_li_8'] = 'Volkswagen Transmission Replacement.';
    $brand_config['header_li_9'] = 'Volkswagen Transmission Check.';
    $brand_config['header_li_10'] = 'Volkswagen Engine Repair.';
    $brand_config['header_li_11'] = 'Volkswagen Engine Battery Repair.';
    $brand_config['header_li_12'] = 'Volkswagen Engine Tire Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Steering Repair.';
    $brand_config['header_li_14'] = 'Volkswagen AC Service & Repair.';
    $brand_config['header_li_15'] = 'Volkswagen Suspension Repair.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volkswagen Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Volkswagen Transmission Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Volkswagen Gearbox ***/
if(isset($_GET['volkswagen-gearbox'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-gearbox";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Gearbox Repair";
    $brand_config['brand_title_2'] = "";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Gearbox Repair.';
    $brand_config['header_li_3'] = 'Volkswagen Gearbox Overhaul.';
    $brand_config['header_li_4'] = 'Volkswagen Gearbox Replace.';
    $brand_config['header_li_5'] = 'Volkswagen Gearbox Upgrade.';
    $brand_config['header_li_6'] = 'Volkswagen Gearbox Service.';
    $brand_config['header_li_7'] = 'Volkswagen Gearbox Rebuild.';
    $brand_config['header_li_8'] = 'Volkswagen Gearbox Replacement.';
    $brand_config['header_li_9'] = 'Volkswagen Gearbox Check.';
    $brand_config['header_li_10'] = 'Volkswagen Engine Repair.';
    $brand_config['header_li_11'] = 'Volkswagen Engine Battery Repair.';
    $brand_config['header_li_12'] = 'Volkswagen Engine Tire Repair.';
    $brand_config['header_li_13'] = 'Volkswagen Steering Repair.';
    $brand_config['header_li_14'] = 'Volkswagen AC Service & Repair.';
    $brand_config['header_li_15'] = 'Volkswagen Suspension Repair.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volkswagen Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Volkswagen Gearbox Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Porsche Gearbox ***/
if(isset($_GET['porsche-gearbox'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-gearbox";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Gearbox Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Porsche Gearbox Repair.';
    $brand_config['header_li_3'] = 'Porsche Gearbox Overhaul.';
    $brand_config['header_li_4'] = 'Porsche Gearbox Replace.';
    $brand_config['header_li_5'] = 'Porsche Gearbox Upgrade.';
    $brand_config['header_li_6'] = 'Porsche Gearbox Service.';
    $brand_config['header_li_7'] = 'Porsche Gearbox Rebuild.';
    $brand_config['header_li_8'] = 'Porsche Gearbox Replacement.';
    $brand_config['header_li_9'] = 'Porsche Gearbox Check.';
    $brand_config['header_li_10'] = 'Porsche Engine Repair.';
    $brand_config['header_li_11'] = 'Porsche Engine Battery Repair.';
    $brand_config['header_li_12'] = 'Porsche Engine Tire Repair.';
    $brand_config['header_li_13'] = 'Porsche Steering Repair.';
    $brand_config['header_li_14'] = 'Porsche AC Service & Repair.';
    $brand_config['header_li_15'] = 'Porsche Suspension Repair.';
    $brand_config['header_li_16'] = 'Porsche Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Repair.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Repair.';
    $brand_config['header_li_19'] = 'Porsche Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Porsche Gearbox Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Porsche Transmission  ***/
if(isset($_GET['porsche-transmission'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-transmission";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Transmission Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Porsche Transmission Repair.';
    $brand_config['header_li_3'] = 'Porsche Transmission Overhaul.';
    $brand_config['header_li_4'] = 'Porsche Transmission Replace.';
    $brand_config['header_li_5'] = 'Porsche Transmission Upgrade.';
    $brand_config['header_li_6'] = 'Porsche Transmission Service.';
    $brand_config['header_li_7'] = 'Porsche Transmission Rebuild.';
    $brand_config['header_li_8'] = 'Porsche Transmission Replacement.';
    $brand_config['header_li_9'] = 'Porsche Transmission Check.';
    $brand_config['header_li_10'] = 'Porsche Engine Repair.';
    $brand_config['header_li_11'] = 'Porsche Engine Battery Repair.';
    $brand_config['header_li_12'] = 'Porsche Engine Tire Repair.';
    $brand_config['header_li_13'] = 'Porsche Steering Repair.';
    $brand_config['header_li_14'] = 'Porsche AC Service & Repair.';
    $brand_config['header_li_15'] = 'Porsche Suspension Repair.';
    $brand_config['header_li_16'] = 'Porsche Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Repair.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Repair.';
    $brand_config['header_li_19'] = 'Porsche Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized In Porsche Transmission Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Inspection
******************************************************************************************/

/*** Audi Inspection ***/
if(isset($_GET['audi-inspection'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-inspection";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Inspection";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_3'] = 'Audi Suspension & Inspection.';
    $brand_config['header_li_4'] = 'Audi Transmission & Inspection.';
    $brand_config['header_li_5'] = 'Audi Transmission Repair.';
    $brand_config['header_li_6'] = 'Audi Major & Minor Services.';
    $brand_config['header_li_7'] = 'General Audi Maintenance.';
    $brand_config['header_li_8'] = 'Audi Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Audi Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Audi Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Body Damage Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Specialized Audi Car Inspection & Suspension Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Brake Pads
******************************************************************************************/

/*** Audi Brake Pads ***/
if(isset($_GET['audi-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Audi Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Audi Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Audi Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Audi Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Audi Brake Noise.';
    $brand_config['header_li_8'] = 'Audi Change Brake Oil.';
    $brand_config['header_li_9'] = 'Audi Drum Replacement.';
    $brand_config['header_li_10'] = 'Audi Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Audi Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized & Working In All Audi Models.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Range Rover Brake Pads ***/
if(isset($_GET['range-rover-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?range-rover-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Range Rover";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Range Rover Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Range Rover Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Range Rover Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Range Rover Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Range Rover Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Range Rover Brake Noise.';
    $brand_config['header_li_8'] = 'Range Rover Change Brake Oil.';
    $brand_config['header_li_9'] = 'Range Rover Drum Replacement.';
    $brand_config['header_li_10'] = 'Range Rover Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Range Rover Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Range Rover Oil Filter Service.';
    $brand_config['header_li_13'] = 'Range Rover Steering Repair.';
    $brand_config['header_li_14'] = 'Range Rover AC Service & Repair.';
    $brand_config['header_li_15'] = 'Range Rover Engine Maintenance.';
    $brand_config['header_li_16'] = 'Range Rover Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Range Rover Electrical System Repair.';
    $brand_config['header_li_18'] = 'Range Rover Lighting System Repair.';
    $brand_config['header_li_19'] = 'Range Rover Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Range Rover Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Range Rover Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/range-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Land Rover Brake Pads Replacement ***/
if(isset($_GET['land-rover-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?land-rover-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Land Rover";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Land Rover Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Land Rover Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Land Rover Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Land Rover Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Land Rover Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Land Rover Brake Noise.';
    $brand_config['header_li_8'] = 'Land Rover Change Brake Oil.';
    $brand_config['header_li_9'] = 'Land Rover Drum Replacement.';
    $brand_config['header_li_10'] = 'Land Rover Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Land Rover Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Land Rover Oil Filter Service.';
    $brand_config['header_li_13'] = 'Land Rover Steering Repair.';
    $brand_config['header_li_14'] = 'Land Rover AC Service & Repair.';
    $brand_config['header_li_15'] = 'Land Rover Engine Maintenance.';
    $brand_config['header_li_16'] = 'Land Rover Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Land Rover Electrical System Repair.';
    $brand_config['header_li_18'] = 'Land Rover Lighting System Repair.';
    $brand_config['header_li_19'] = 'Land Rover Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Land Rover Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Land Rover Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/land-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Porsche Brake Pads Replacement ***/
if(isset($_GET['porsche-brake-pads-replacement'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-brake-pads-replacement";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Porsche Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Porsche Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Porsche Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Porsche Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Porsche Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Porsche Brake Noise.';
    $brand_config['header_li_8'] = 'Porsche Change Brake Oil.';
    $brand_config['header_li_9'] = 'Porsche Drum Replacement.';
    $brand_config['header_li_10'] = 'Porsche Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Porsche Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Porsche Oil Filter Service.';
    $brand_config['header_li_13'] = 'Porsche Steering Repair.';
    $brand_config['header_li_14'] = 'Porsche AC Service & Repair.';
    $brand_config['header_li_15'] = 'Porsche Engine Maintenance.';
    $brand_config['header_li_16'] = 'Porsche Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Repair.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Repair.';
    $brand_config['header_li_19'] = 'Porsche Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Porsche Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Porsche Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Bentley Brake Pads ***/
if(isset($_GET['bentley-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bentley-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Bentley";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Bentley Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Bentley Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Bentley Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Bentley Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Bentley Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Bentley Brake Noise.';
    $brand_config['header_li_8'] = 'Bentley Change Brake Oil.';
    $brand_config['header_li_9'] = 'Bentley Drum Replacement.';
    $brand_config['header_li_10'] = 'Bentley Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Bentley Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Bentley Oil Filter Service.';
    $brand_config['header_li_13'] = 'Bentley Steering Repair.';
    $brand_config['header_li_14'] = 'Bentley AC Service & Repair.';
    $brand_config['header_li_15'] = 'Bentley Engine Maintenance.';
    $brand_config['header_li_16'] = 'Bentley Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Bentley Electrical System Repair.';
    $brand_config['header_li_18'] = 'Bentley Lighting System Repair.';
    $brand_config['header_li_19'] = 'Bentley Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Bentley Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Bentley Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bentley.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bentley-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bentley/bentley.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Aston Martin Brake Pads ***/
if(isset($_GET['aston-martin-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Aston Martin Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Aston Martin Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Aston Martin Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Aston Martin Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Aston Martin Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Aston Martin Brake Noise.';
    $brand_config['header_li_8'] = 'Aston Martin Change Brake Oil.';
    $brand_config['header_li_9'] = 'Aston Martin Drum Replacement.';
    $brand_config['header_li_10'] = 'Aston Martin Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Aston Martin Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Aston Martin Oil Filter Service.';
    $brand_config['header_li_13'] = 'Aston Martin Steering Repair.';
    $brand_config['header_li_14'] = 'Aston Martin AC Service & Repair.';
    $brand_config['header_li_15'] = 'Aston Martin Engine Maintenance.';
    $brand_config['header_li_16'] = 'Aston Martin Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Aston Martin Electrical System Repair.';
    $brand_config['header_li_18'] = 'Aston Martin Lighting System Repair.';
    $brand_config['header_li_19'] = 'Aston Martin Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Aston Martin Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Aston Martin Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Ferrari Brake Pads ***/
if(isset($_GET['ferrari-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?ferrari-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Ferrari";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Ferrari Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Ferrari Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Ferrari Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Ferrari Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Ferrari Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Ferrari Brake Noise.';
    $brand_config['header_li_8'] = 'Ferrari Change Brake Oil.';
    $brand_config['header_li_9'] = 'Ferrari Drum Replacement.';
    $brand_config['header_li_10'] = 'Ferrari Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Ferrari Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Ferrari Oil Filter Service.';
    $brand_config['header_li_13'] = 'Ferrari Steering Repair.';
    $brand_config['header_li_14'] = 'Ferrari AC Service & Repair.';
    $brand_config['header_li_15'] = 'Ferrari Engine Maintenance.';
    $brand_config['header_li_16'] = 'Ferrari Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Ferrari Electrical System Repair.';
    $brand_config['header_li_18'] = 'Ferrari Lighting System Repair.';
    $brand_config['header_li_19'] = 'Ferrari Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Ferrari Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Ferrari Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/ferrari-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/ferrari-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/ferrari/ferrari.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Rolls Royce Brake Pads ***/
if(isset($_GET['rolls-royce-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?rolls-royce-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Rolls Royce";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Rolls Royce Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Rolls Royce Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Rolls Royce Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Rolls Royce Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Rolls Royce Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Rolls Royce Brake Noise.';
    $brand_config['header_li_8'] = 'Rolls Royce Change Brake Oil.';
    $brand_config['header_li_9'] = 'Rolls Royce Drum Replacement.';
    $brand_config['header_li_10'] = 'Rolls Royce Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Rolls Royce Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Rolls Royce Oil Filter Service.';
    $brand_config['header_li_13'] = 'Rolls Royce Steering Repair.';
    $brand_config['header_li_14'] = 'Rolls Royce AC Service & Repair.';
    $brand_config['header_li_15'] = 'Rolls Royce Engine Maintenance.';
    $brand_config['header_li_16'] = 'Rolls Royce Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Rolls Royce Electrical System Repair.';
    $brand_config['header_li_18'] = 'Rolls Royce Lighting System Repair.';
    $brand_config['header_li_19'] = 'Rolls Royce Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Rolls Royce Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - Specialized Rolls Royce Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/rolls-royce.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/rolls-royce.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/rolls-royce/rolls-royce.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Volkswagen Brake Pads ***/
if(isset($_GET['volkswagen-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Volkswagen Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Volkswagen Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Volkswagen Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Volkswagen Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Volkswagen Brake Noise.';
    $brand_config['header_li_8'] = 'Volkswagen Change Brake Oil.';
    $brand_config['header_li_9'] = 'Volkswagen Drum Replacement.';
    $brand_config['header_li_10'] = 'Volkswagen Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Volkswagen Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Volkswagen Oil Filter Service.';
    $brand_config['header_li_13'] = 'Volkswagen Steering Repair.';
    $brand_config['header_li_14'] = 'Volkswagen AC Service & Repair.';
    $brand_config['header_li_15'] = 'Volkswagen Engine Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volkswagen Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Volkswagen Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Volkswagen Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mclaren Brake Pads ***/
if(isset($_GET['mclaren-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mclaren-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Mclaren";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mclaren Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Mclaren Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Mclaren Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Mclaren Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Mclaren Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Mclaren Brake Noise.';
    $brand_config['header_li_8'] = 'Mclaren Change Brake Oil.';
    $brand_config['header_li_9'] = 'Mclaren Drum Replacement.';
    $brand_config['header_li_10'] = 'Mclaren Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Mclaren Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Mclaren Oil Filter Service.';
    $brand_config['header_li_13'] = 'Mclaren Steering Repair.';
    $brand_config['header_li_14'] = 'Mclaren AC Service & Repair.';
    $brand_config['header_li_15'] = 'Mclaren Engine Maintenance.';
    $brand_config['header_li_16'] = 'Mclaren Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mclaren Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mclaren Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mclaren Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Mclaren Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Mclaren Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mclaren-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mclaren-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mclaren/mclaren.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Jaguar Suspension ***/
if(isset($_GET['jaguar-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jaguar-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Jaguar";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Jaguar Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Jaguar Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Jaguar Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Jaguar Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Jaguar Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Jaguar Brake Noise.';
    $brand_config['header_li_8'] = 'Jaguar Change Brake Oil.';
    $brand_config['header_li_9'] = 'Jaguar Drum Replacement.';
    $brand_config['header_li_10'] = 'Jaguar Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Jaguar Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Jaguar Oil Filter Service.';
    $brand_config['header_li_13'] = 'Jaguar Steering Repair.';
    $brand_config['header_li_14'] = 'Jaguar AC Service & Repair.';
    $brand_config['header_li_15'] = 'Jaguar Engine Maintenance.';
    $brand_config['header_li_16'] = 'Jaguar Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Jaguar Electrical System Repair.';
    $brand_config['header_li_18'] = 'Jaguar Lighting System Repair.';
    $brand_config['header_li_19'] = 'Jaguar Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Jaguar Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Jaguar Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jaguar.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jaguar-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jaguar/jaguar-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** BMW Brake Pads ***/
if(isset($_GET['bmw-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'BMW Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'BMW Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'BMW Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'BMW Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'BMW Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix BMW Brake Noise.';
    $brand_config['header_li_8'] = 'BMW Change Brake Oil.';
    $brand_config['header_li_9'] = 'BMW Drum Replacement.';
    $brand_config['header_li_10'] = 'BMW Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'BMW Computer Diagnostics.';
    $brand_config['header_li_12'] = 'BMW Oil Filter Service.';
    $brand_config['header_li_13'] = 'BMW Steering Repair.';
    $brand_config['header_li_14'] = 'BMW AC Service & Repair.';
    $brand_config['header_li_15'] = 'BMW Engine Maintenance.';
    $brand_config['header_li_16'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_18'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_19'] = 'BMW Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix BMW Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized BMW Brake Pads Replacement Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mercedes Brake Pads ***/
if(isset($_GET['mercedes-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mercedes Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Mercedes Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Mercedes Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Mercedes Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Mercedes Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Mercedes Brake Noise.';
    $brand_config['header_li_8'] = 'Mercedes Change Brake Oil.';
    $brand_config['header_li_9'] = 'Mercedes Drum Replacement.';
    $brand_config['header_li_10'] = 'Mercedes Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Mercedes Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Mercedes Oil Filter Service.';
    $brand_config['header_li_13'] = 'Mercedes Steering Repair.';
    $brand_config['header_li_14'] = 'Mercedes AC Service & Repair.';
    $brand_config['header_li_15'] = 'Mercedes Engine Maintenance.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Mercedes Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'German Car Repair - We Are Specialized Mercedes Brake Pads Replacement Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Jeep Brake Pads ***/
if(isset($_GET['jeep-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jeep-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Jeep";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Jeep Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Jeep Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Jeep Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Jeep Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Jeep Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Jeep Brake Noise.';
    $brand_config['header_li_8'] = 'Jeep Change Brake Oil.';
    $brand_config['header_li_9'] = 'Jeep Drum Replacement.';
    $brand_config['header_li_10'] = 'Jeep Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Jeep Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Jeep Oil Filter Service.';
    $brand_config['header_li_13'] = 'Jeep Steering Repair.';
    $brand_config['header_li_14'] = 'Jeep AC Service & Repair.';
    $brand_config['header_li_15'] = 'Jeep Engine Maintenance.';
    $brand_config['header_li_16'] = 'Jeep Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Jeep Electrical System Repair.';
    $brand_config['header_li_18'] = 'Jeep Lighting System Repair.';
    $brand_config['header_li_19'] = 'Jeep Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Jeep Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Jeep Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jeep.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jeep-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jeep/jeep-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Mini Cooper Brake Pads ***/
if(isset($_GET['mini-cooper-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mini-cooper-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Mini Cooper";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mini Cooper Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Mini Cooper Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Mini Cooper Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Mini Cooper Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Mini Cooper Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Mini Cooper Brake Noise.';
    $brand_config['header_li_8'] = 'Mini Cooper Change Brake Oil.';
    $brand_config['header_li_9'] = 'Mini Cooper Drum Replacement.';
    $brand_config['header_li_10'] = 'Mini Cooper Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Mini Cooper Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Mini Cooper Oil Filter Service.';
    $brand_config['header_li_13'] = 'Mini Cooper Steering Repair.';
    $brand_config['header_li_14'] = 'Mini Cooper AC Service & Repair.';
    $brand_config['header_li_15'] = 'Mini Cooper Engine Maintenance.';
    $brand_config['header_li_16'] = 'Mini Cooper Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mini Cooper Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mini Cooper Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mini Cooper Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Mini Cooper Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Mini Cooper Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mini-cooper.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mini-cooper-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mini-cooper/mini-cooper.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Cadillac Brake Pads ***/
if(isset($_GET['cadillac-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?cadillac-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Cadillac";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Cadillac Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Cadillac Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Cadillac Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Cadillac Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Cadillac Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Cadillac Brake Noise.';
    $brand_config['header_li_8'] = 'Cadillac Change Brake Oil.';
    $brand_config['header_li_9'] = 'Cadillac Drum Replacement.';
    $brand_config['header_li_10'] = 'Cadillac Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Cadillac Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Cadillac Oil Filter Service.';
    $brand_config['header_li_13'] = 'Cadillac Steering Repair.';
    $brand_config['header_li_14'] = 'Cadillac AC Service & Repair.';
    $brand_config['header_li_15'] = 'Cadillac Engine Maintenance.';
    $brand_config['header_li_16'] = 'Cadillac Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Cadillac Electrical System Repair.';
    $brand_config['header_li_18'] = 'Cadillac Lighting System Repair.';
    $brand_config['header_li_19'] = 'Cadillac Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Cadillac Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Cadillac Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/cadillac-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/cadillac-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/cadillac/cadillac-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Dodge Brake Pads Replacement ***/
if(isset($_GET['dodge-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?dodge-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Dodge";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Dodge Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Dodge Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Dodge Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Dodge Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Dodge Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Dodge Brake Noise.';
    $brand_config['header_li_8'] = 'Dodge Change Brake Oil.';
    $brand_config['header_li_9'] = 'Dodge Drum Replacement.';
    $brand_config['header_li_10'] = 'Dodge Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Dodge Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Dodge Oil Filter Service.';
    $brand_config['header_li_13'] = 'Dodge Steering Repair.';
    $brand_config['header_li_14'] = 'Dodge AC Service & Repair.';
    $brand_config['header_li_15'] = 'Dodge Engine Maintenance.';
    $brand_config['header_li_16'] = 'Dodge Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Dodge Electrical System Repair.';
    $brand_config['header_li_18'] = 'Dodge Lighting System Repair.';
    $brand_config['header_li_19'] = 'Dodge Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Dodge Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In Dodge Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/dodge.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/dodge-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/dodge/dodge-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** GMC Brake Pads ***/
if(isset($_GET['gmc-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?gmc-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "GMC";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'GMC Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'GMC Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'GMC Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'GMC Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'GMC Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix GMC Brake Noise.';
    $brand_config['header_li_8'] = 'GMC Change Brake Oil.';
    $brand_config['header_li_9'] = 'GMC Drum Replacement.';
    $brand_config['header_li_10'] = 'GMC Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'GMC Computer Diagnostics.';
    $brand_config['header_li_12'] = 'GMC Oil Filter Service.';
    $brand_config['header_li_13'] = 'GMC Steering Repair.';
    $brand_config['header_li_14'] = 'GMC AC Service & Repair.';
    $brand_config['header_li_15'] = 'GMC Engine Maintenance.';
    $brand_config['header_li_16'] = 'GMC Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'GMC Electrical System Repair.';
    $brand_config['header_li_18'] = 'GMC Lighting System Repair.';
    $brand_config['header_li_19'] = 'GMC Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix GMC Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized In GMC Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/gmc.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/gmc-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/gmc/gmc-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Lamborghini Brake Pads ***/
if(isset($_GET['lamborghini-brake-pads'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?lamborghini-brake-pads";
    
    // Brand Name
    $brand_config['brand'] = "Lamborghini";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Lamborghini Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Lamborghini Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Lamborghini Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Lamborghini Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Lamborghini Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Lamborghini Brake Noise.';
    $brand_config['header_li_8'] = 'Lamborghini Change Brake Oil.';
    $brand_config['header_li_9'] = 'Lamborghini Drum Replacement.';
    $brand_config['header_li_10'] = 'Lamborghini Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Lamborghini Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Lamborghini Oil Filter Service.';
    $brand_config['header_li_13'] = 'Lamborghini Steering Repair.';
    $brand_config['header_li_14'] = 'Lamborghini AC Service & Repair.';
    $brand_config['header_li_15'] = 'Lamborghini Engine Maintenance.';
    $brand_config['header_li_16'] = 'Lamborghini Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Lamborghini Electrical System Repair.';
    $brand_config['header_li_18'] = 'Lamborghini Lighting System Repair.';
    $brand_config['header_li_19'] = 'Lamborghini Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Lamborghini Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Lamborghini Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/lamborghini.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/lamborghini-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/lamborghini/lamborghini.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Maserati Brake Pads Replacement ***/
if(isset($_GET['maserati-brake-pads-replacement'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?maserati-brake-pads-replacement";
    
    // Brand Name
    $brand_config['brand'] = "Maserati";
    $brand_config['brand_title'] = "Brake Pads Replacement";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Maserati Brake Pads Replacement.';
    $brand_config['header_li_3'] = 'Maserati Brake Pads & Discs Replacement.';
    $brand_config['header_li_4'] = 'Maserati Rear Brake Pad Replacement.';
    $brand_config['header_li_5'] = 'Maserati Brake Pads & Rotors.';
    $brand_config['header_li_6'] = 'Maserati Front Brake Pads Replacement.';
    $brand_config['header_li_7'] = 'Fix Maserati Brake Noise.';
    $brand_config['header_li_8'] = 'Maserati Change Brake Oil.';
    $brand_config['header_li_9'] = 'Maserati Drum Replacement.';
    $brand_config['header_li_10'] = 'Maserati Brake Pad Warning Light.';
    $brand_config['header_li_11'] = 'Maserati Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Maserati Oil Filter Service.';
    $brand_config['header_li_13'] = 'Maserati Steering Repair.';
    $brand_config['header_li_14'] = 'Maserati AC Service & Repair.';
    $brand_config['header_li_15'] = 'Maserati Engine Maintenance.';
    $brand_config['header_li_16'] = 'Maserati Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Maserati Electrical System Repair.';
    $brand_config['header_li_18'] = 'Maserati Lighting System Repair.';
    $brand_config['header_li_19'] = 'Maserati Wheel Alignment & Repair.';
    $brand_config['header_li_20'] = 'Fix Maserati Brake Oil Leakage.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Maserati Brake Pads Replacement In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/maserati.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/maserati-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/maserati/maserati.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*****************************************************************************************
Cars AC Repair
******************************************************************************************/

/*** Audi AC Repair ***/
if(isset($_GET['audi-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi AC Repair.';
    $brand_config['header_li_3'] = 'Audi Compressor Replacement.';
    $brand_config['header_li_4'] = 'Audi Cooling System.';
    $brand_config['header_li_5'] = 'Audi Climate Control.';
    $brand_config['header_li_6'] = 'Audi AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Audi AC Maintenance.';
    $brand_config['header_li_8'] = 'Audi Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Audi Heating System.';
    $brand_config['header_li_10'] = 'Audi Coolant Flush.';
    $brand_config['header_li_11'] = 'Audi AC Gas Refill.';
    $brand_config['header_li_12'] = 'Audi Major And Minor Service.';
    $brand_config['header_li_13'] = 'Audi Suspension Repair.';
    $brand_config['header_li_14'] = 'Audi Transmission Repair.';
    $brand_config['header_li_15'] = 'Audi Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Audi Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Audi AC Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** BMW AC Repair ***/
if(isset($_GET['bmw-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bmw-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "BMW";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'BMW AC Repair.';
    $brand_config['header_li_3'] = 'BMW Compressor Replacement.';
    $brand_config['header_li_4'] = 'BMW Cooling System.';
    $brand_config['header_li_5'] = 'BMW Climate Control.';
    $brand_config['header_li_6'] = 'BMW AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'BMW AC Maintenance.';
    $brand_config['header_li_8'] = 'BMW Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'BMW Heating System.';
    $brand_config['header_li_10'] = 'BMW Coolant Flush.';
    $brand_config['header_li_11'] = 'BMW AC Gas Refill.';
    $brand_config['header_li_12'] = 'BMW Major And Minor Service.';
    $brand_config['header_li_13'] = 'BMW Suspension Repair.';
    $brand_config['header_li_14'] = 'BMW Transmission Repair.';
    $brand_config['header_li_15'] = 'BMW Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'BMW Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'BMW Electrical System Repair.';
    $brand_config['header_li_18'] = 'BMW Lighting System Repair.';
    $brand_config['header_li_19'] = 'BMW Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'BMW Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized BMW AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bmw.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bmw.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bmw/bmw-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Mini Cooper AC Repair ***/
if(isset($_GET['mini-cooper-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mini-cooper-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mini Cooper";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mini Cooper AC Repair.';
    $brand_config['header_li_3'] = 'Mini Cooper Compressor Replacement.';
    $brand_config['header_li_4'] = 'Mini Cooper Cooling System.';
    $brand_config['header_li_5'] = 'Mini Cooper Climate Control.';
    $brand_config['header_li_6'] = 'Mini Cooper AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Mini Cooper AC Maintenance.';
    $brand_config['header_li_8'] = 'Mini Cooper Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Mini Cooper Heating System.';
    $brand_config['header_li_10'] = 'Mini Cooper Coolant Flush.';
    $brand_config['header_li_11'] = 'Mini Cooper AC Gas Refill.';
    $brand_config['header_li_12'] = 'Mini Cooper Major And Minor Service.';
    $brand_config['header_li_13'] = 'Mini Cooper Suspension Repair.';
    $brand_config['header_li_14'] = 'Mini Cooper Transmission Repair.';
    $brand_config['header_li_15'] = 'Mini Cooper Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Mini Cooper Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mini Cooper Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mini Cooper Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mini Cooper Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Mini Cooper Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Mini Cooper AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mini-cooper.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mini-cooper-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mini-cooper/mini-cooper.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Range Rover AC Repair ***/
if(isset($_GET['range-rover-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?range-rover-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Range Rover";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Range Rover AC Repair.';
    $brand_config['header_li_3'] = 'Range Rover Compressor Replacement.';
    $brand_config['header_li_4'] = 'Range Rover Cooling System.';
    $brand_config['header_li_5'] = 'Range Rover Climate Control.';
    $brand_config['header_li_6'] = 'Range Rover AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Range Rover AC Maintenance.';
    $brand_config['header_li_8'] = 'Range Rover Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Range Rover Heating System.';
    $brand_config['header_li_10'] = 'Range Rover Coolant Flush.';
    $brand_config['header_li_11'] = 'Range Rover AC Gas Refill.';
    $brand_config['header_li_12'] = 'Range Rover Major And Minor Service.';
    $brand_config['header_li_13'] = 'Range Rover Suspension Repair.';
    $brand_config['header_li_14'] = 'Range Rover Transmission Repair.';
    $brand_config['header_li_15'] = 'Range Rover Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Range Rover Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Range Rover Electrical System Repair.';
    $brand_config['header_li_18'] = 'Range Rover Lighting System Repair.';
    $brand_config['header_li_19'] = 'Range Rover Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Range Rover Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Range Rover AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/range-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Land Rover AC Repair ***/
if(isset($_GET['land-rover-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?land-rover-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Land Rover";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Land Rover AC Repair.';
    $brand_config['header_li_3'] = 'Land Rover Compressor Replacement.';
    $brand_config['header_li_4'] = 'Land Rover Cooling System.';
    $brand_config['header_li_5'] = 'Land Rover Climate Control.';
    $brand_config['header_li_6'] = 'Land Rover AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Land Rover AC Maintenance.';
    $brand_config['header_li_8'] = 'Land Rover Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Land Rover Heating System.';
    $brand_config['header_li_10'] = 'Land Rover Coolant Flush.';
    $brand_config['header_li_11'] = 'Land Rover AC Gas Refill.';
    $brand_config['header_li_12'] = 'Land Rover Major And Minor Service.';
    $brand_config['header_li_13'] = 'Land Rover Suspension Repair.';
    $brand_config['header_li_14'] = 'Land Rover Transmission Repair.';
    $brand_config['header_li_15'] = 'Land Rover Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Land Rover Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Land Rover Electrical System Repair.';
    $brand_config['header_li_18'] = 'Land Rover Lighting System Repair.';
    $brand_config['header_li_19'] = 'Land Rover Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Land Rover Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Land Rover AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/land-rover.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/land-rover-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/land-rover/land-rover.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Porsche AC Repair ***/
if(isset($_GET['porsche-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?porsche-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Porsche";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Porsche AC Repair.';
    $brand_config['header_li_3'] = 'Porsche Compressor Replacement.';
    $brand_config['header_li_4'] = 'Porsche Cooling System.';
    $brand_config['header_li_5'] = 'Porsche Climate Control.';
    $brand_config['header_li_6'] = 'Porsche AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Porsche AC Maintenance.';
    $brand_config['header_li_8'] = 'Porsche Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Porsche Heating System.';
    $brand_config['header_li_10'] = 'Porsche Coolant Flush.';
    $brand_config['header_li_11'] = 'Porsche AC Gas Refill.';
    $brand_config['header_li_12'] = 'Porsche Major And Minor Service.';
    $brand_config['header_li_13'] = 'Porsche Suspension Repair.';
    $brand_config['header_li_14'] = 'Porsche Transmission Repair.';
    $brand_config['header_li_15'] = 'Porsche Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Porsche Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Porsche Electrical System Repair.';
    $brand_config['header_li_18'] = 'Porsche Lighting System Repair.';
    $brand_config['header_li_19'] = 'Porsche Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Porsche Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Porsche AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/porsche.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/porsche-car.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/porsche/porsche-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Bentley AC Repair ***/
if(isset($_GET['bentley-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?bentley-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Bentley";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Bentley AC Repair.';
    $brand_config['header_li_3'] = 'Bentley Compressor Replacement.';
    $brand_config['header_li_4'] = 'Bentley Cooling System.';
    $brand_config['header_li_5'] = 'Bentley Climate Control.';
    $brand_config['header_li_6'] = 'Bentley AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Bentley AC Maintenance.';
    $brand_config['header_li_8'] = 'Bentley Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Bentley Heating System.';
    $brand_config['header_li_10'] = 'Bentley Coolant Flush.';
    $brand_config['header_li_11'] = 'Bentley AC Gas Refill.';
    $brand_config['header_li_12'] = 'Bentley Major And Minor Service.';
    $brand_config['header_li_13'] = 'Bentley Suspension Repair.';
    $brand_config['header_li_14'] = 'Bentley Transmission Repair.';
    $brand_config['header_li_15'] = 'Bentley Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Bentley Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Bentley Electrical System Repair.';
    $brand_config['header_li_18'] = 'Bentley Lighting System Repair.';
    $brand_config['header_li_19'] = 'Bentley Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Bentley Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Bentley AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/bentley.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/bentley-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/bentley/bentley.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Volkswagen AC Repair ***/
if(isset($_GET['volkswagen-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?volkswagen-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Volkswagen";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Volkswagen AC Repair.';
    $brand_config['header_li_3'] = 'Volkswagen Compressor Replacement.';
    $brand_config['header_li_4'] = 'Volkswagen Cooling System.';
    $brand_config['header_li_5'] = 'Volkswagen Climate Control.';
    $brand_config['header_li_6'] = 'Volkswagen AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Volkswagen AC Maintenance.';
    $brand_config['header_li_8'] = 'Volkswagen Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Volkswagen Heating System.';
    $brand_config['header_li_10'] = 'Volkswagen Coolant Flush.';
    $brand_config['header_li_11'] = 'Volkswagen AC Gas Refill.';
    $brand_config['header_li_12'] = 'Volkswagen Major And Minor Service.';
    $brand_config['header_li_13'] = 'Volkswagen Suspension Repair.';
    $brand_config['header_li_14'] = 'Volkswagen Transmission Repair.';
    $brand_config['header_li_15'] = 'Volkswagen Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Volkswagen Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Volkswagen Electrical System Repair.';
    $brand_config['header_li_18'] = 'Volkswagen Lighting System Repair.';
    $brand_config['header_li_19'] = 'Volkswagen Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Volkswagen Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Volkswagen AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/volkswagen.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/volkswagen-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/volkswagen/volkswagen.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Jaguar AC Repair ***/
if(isset($_GET['jaguar-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jaguar-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jaguar";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Jaguar AC Repair.';
    $brand_config['header_li_3'] = 'Jaguar Compressor Replacement.';
    $brand_config['header_li_4'] = 'Jaguar Cooling System.';
    $brand_config['header_li_5'] = 'Jaguar Climate Control.';
    $brand_config['header_li_6'] = 'Jaguar AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Jaguar AC Maintenance.';
    $brand_config['header_li_8'] = 'Jaguar Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Jaguar Heating System.';
    $brand_config['header_li_10'] = 'Jaguar Coolant Flush.';
    $brand_config['header_li_11'] = 'Jaguar AC Gas Refill.';
    $brand_config['header_li_12'] = 'Jaguar Major And Minor Service.';
    $brand_config['header_li_13'] = 'Jaguar Suspension Repair.';
    $brand_config['header_li_14'] = 'Jaguar Transmission Repair.';
    $brand_config['header_li_15'] = 'Jaguar Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Jaguar Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Jaguar Electrical System Repair.';
    $brand_config['header_li_18'] = 'Jaguar Lighting System Repair.';
    $brand_config['header_li_19'] = 'Jaguar Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Jaguar Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Jaguar AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jaguar.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jaguar-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jaguar/jaguar-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Jeep AC Repair ***/
if(isset($_GET['jeep-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?jeep-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Jeep";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Jeep AC Repair.';
    $brand_config['header_li_3'] = 'Jeep Compressor Replacement.';
    $brand_config['header_li_4'] = 'Jeep Cooling System.';
    $brand_config['header_li_5'] = 'Jeep Climate Control.';
    $brand_config['header_li_6'] = 'Jeep AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Jeep AC Maintenance.';
    $brand_config['header_li_8'] = 'Jeep Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Jeep Heating System.';
    $brand_config['header_li_10'] = 'Jeep Coolant Flush.';
    $brand_config['header_li_11'] = 'Jeep AC Gas Refill.';
    $brand_config['header_li_12'] = 'Jeep Major And Minor Service.';
    $brand_config['header_li_13'] = 'Jeep Suspension Repair.';
    $brand_config['header_li_14'] = 'Jeep Transmission Repair.';
    $brand_config['header_li_15'] = 'Jeep Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Jeep Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Jeep Electrical System Repair.';
    $brand_config['header_li_18'] = 'Jeep Lighting System Repair.';
    $brand_config['header_li_19'] = 'Jeep Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Jeep Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Jeep AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/jeep.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/jeep-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/jeep/jeep-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Dodge AC Repair ***/
if(isset($_GET['dodge-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?dodge-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Dodge";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Dodge AC Repair.';
    $brand_config['header_li_3'] = 'Dodge Compressor Replacement.';
    $brand_config['header_li_4'] = 'Dodge Cooling System.';
    $brand_config['header_li_5'] = 'Dodge Climate Control.';
    $brand_config['header_li_6'] = 'Dodge AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Dodge AC Maintenance.';
    $brand_config['header_li_8'] = 'Dodge Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Dodge Heating System.';
    $brand_config['header_li_10'] = 'Dodge Coolant Flush.';
    $brand_config['header_li_11'] = 'Dodge AC Gas Refill.';
    $brand_config['header_li_12'] = 'Dodge Major And Minor Service.';
    $brand_config['header_li_13'] = 'Dodge Suspension Repair.';
    $brand_config['header_li_14'] = 'Dodge Transmission Repair.';
    $brand_config['header_li_15'] = 'Dodge Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Dodge Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Dodge Electrical System Repair.';
    $brand_config['header_li_18'] = 'Dodge Lighting System Repair.';
    $brand_config['header_li_19'] = 'Dodge Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Dodge Reprogramming Service.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized Dodge AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/dodge.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/dodge-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/dodge/dodge-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** GMC AC Repair ***/
if(isset($_GET['gmc-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?gmc-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "GMC";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'GMC AC Repair.';
    $brand_config['header_li_3'] = 'GMC Compressor Replacement.';
    $brand_config['header_li_4'] = 'GMC Cooling System.';
    $brand_config['header_li_5'] = 'GMC Climate Control.';
    $brand_config['header_li_6'] = 'GMC AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'GMC AC Maintenance.';
    $brand_config['header_li_8'] = 'GMC Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'GMC Heating System.';
    $brand_config['header_li_10'] = 'GMC Coolant Flush.';
    $brand_config['header_li_11'] = 'GMC AC Gas Refill.';
    $brand_config['header_li_12'] = 'GMC Major And Minor Service.';
    $brand_config['header_li_13'] = 'GMC Suspension Repair.';
    $brand_config['header_li_14'] = 'GMC Transmission Repair.';
    $brand_config['header_li_15'] = 'GMC Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'GMC Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'GMC Electrical System Repair.';
    $brand_config['header_li_18'] = 'GMC Lighting System Repair.';
    $brand_config['header_li_19'] = 'GMC Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'GMC Reprogramming Service.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized GMC AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/gmc.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/gmc-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/gmc/gmc-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Mercedes AC Repair ***/
if(isset($_GET['mercedes-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mercedes-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mercedes";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mercedes AC Repair.';
    $brand_config['header_li_3'] = 'Mercedes Compressor Replacement.';
    $brand_config['header_li_4'] = 'Mercedes Cooling System.';
    $brand_config['header_li_5'] = 'Mercedes Climate Control.';
    $brand_config['header_li_6'] = 'Mercedes AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Mercedes AC Maintenance.';
    $brand_config['header_li_8'] = 'Mercedes Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Mercedes Heating System.';
    $brand_config['header_li_10'] = 'Mercedes Coolant Flush.';
    $brand_config['header_li_11'] = 'Mercedes AC Gas Refill.';
    $brand_config['header_li_12'] = 'Mercedes Major And Minor Service.';
    $brand_config['header_li_13'] = 'Mercedes Suspension Repair.';
    $brand_config['header_li_14'] = 'Mercedes Transmission Repair.';
    $brand_config['header_li_15'] = 'Mercedes Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Mercedes Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mercedes Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mercedes Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mercedes Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Mercedes Reprogramming Service.';

    $brand_config['header_p_des'] = 'German Cars Repair - We Are Specialized Mercedes AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mercedes.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mercedes.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mercedes/mercedes-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Cadillac AC Repair ***/
if(isset($_GET['cadillac-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?cadillac-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Cadillac";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Cadillac AC Repair.';
    $brand_config['header_li_3'] = 'Cadillac Compressor Replacement.';
    $brand_config['header_li_4'] = 'Cadillac Cooling System.';
    $brand_config['header_li_5'] = 'Cadillac Climate Control.';
    $brand_config['header_li_6'] = 'Cadillac AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Cadillac AC Maintenance.';
    $brand_config['header_li_8'] = 'Cadillac Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Cadillac Heating System.';
    $brand_config['header_li_10'] = 'Cadillac Coolant Flush.';
    $brand_config['header_li_11'] = 'Cadillac AC Gas Refill.';
    $brand_config['header_li_12'] = 'Cadillac Major And Minor Service.';
    $brand_config['header_li_13'] = 'Cadillac Suspension Repair.';
    $brand_config['header_li_14'] = 'Cadillac Transmission Repair.';
    $brand_config['header_li_15'] = 'Cadillac Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Cadillac Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Cadillac Electrical System Repair.';
    $brand_config['header_li_18'] = 'Cadillac Lighting System Repair.';
    $brand_config['header_li_19'] = 'Cadillac Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Cadillac Reprogramming Service.';

    $brand_config['header_p_des'] = 'American Cars Repair - We Are Specialized Cadillac AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/cadillac-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/cadillac-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/cadillac/cadillac-car.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Lamborghini AC Repair ***/
if(isset($_GET['lamborghini-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?lamborghini-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Lamborghini";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Lamborghini AC Repair.';
    $brand_config['header_li_3'] = 'Lamborghini Compressor Replacement.';
    $brand_config['header_li_4'] = 'Lamborghini Cooling System.';
    $brand_config['header_li_5'] = 'Lamborghini Climate Control.';
    $brand_config['header_li_6'] = 'Lamborghini AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Lamborghini AC Maintenance.';
    $brand_config['header_li_8'] = 'Lamborghini Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Lamborghini Heating System.';
    $brand_config['header_li_10'] = 'Lamborghini Coolant Flush.';
    $brand_config['header_li_11'] = 'Lamborghini AC Gas Refill.';
    $brand_config['header_li_12'] = 'Lamborghini Major And Minor Service.';
    $brand_config['header_li_13'] = 'Lamborghini Suspension Repair.';
    $brand_config['header_li_14'] = 'Lamborghini Transmission Repair.';
    $brand_config['header_li_15'] = 'Lamborghini Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Lamborghini Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Lamborghini Electrical System Repair.';
    $brand_config['header_li_18'] = 'Lamborghini Lighting System Repair.';
    $brand_config['header_li_19'] = 'Lamborghini Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Lamborghini Reprogramming Service.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized In Lamborghini AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/lamborghini.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/lamborghini-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/lamborghini/lamborghini.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Aston Martin AC Repair ***/
if(isset($_GET['aston-martin-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?aston-martin-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Aston Martin";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Aston Martin AC Repair.';
    $brand_config['header_li_3'] = 'Aston Martin Compressor Replacement.';
    $brand_config['header_li_4'] = 'Aston Martin Cooling System.';
    $brand_config['header_li_5'] = 'Aston Martin Climate Control.';
    $brand_config['header_li_6'] = 'Aston Martin AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Aston Martin AC Maintenance.';
    $brand_config['header_li_8'] = 'Aston Martin Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Aston Martin Heating System.';
    $brand_config['header_li_10'] = 'Aston Martin Coolant Flush.';
    $brand_config['header_li_11'] = 'Aston Martin AC Gas Refill.';
    $brand_config['header_li_12'] = 'Aston Martin Major And Minor Service.';
    $brand_config['header_li_13'] = 'Aston Martin Suspension Repair.';
    $brand_config['header_li_14'] = 'Aston Martin Transmission Repair.';
    $brand_config['header_li_15'] = 'Aston Martin Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Aston Martin Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Aston Martin Electrical System Repair.';
    $brand_config['header_li_18'] = 'Aston Martin Lighting System Repair.';
    $brand_config['header_li_19'] = 'Aston Martin Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Aston Martin Reprogramming Service.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Aston Martin AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/aston-martin.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/aston-martin.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/aston-martin/aston-martin.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Mclaren AC Repair ***/
if(isset($_GET['mclaren-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?mclaren-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Mclaren";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Mclaren AC Repair.';
    $brand_config['header_li_3'] = 'Mclaren Compressor Replacement.';
    $brand_config['header_li_4'] = 'Mclaren Cooling System.';
    $brand_config['header_li_5'] = 'Mclaren Climate Control.';
    $brand_config['header_li_6'] = 'Mclaren AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Mclaren AC Maintenance.';
    $brand_config['header_li_8'] = 'Mclaren Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Mclaren Heating System.';
    $brand_config['header_li_10'] = 'Mclaren Coolant Flush.';
    $brand_config['header_li_11'] = 'Mclaren AC Gas Refill.';
    $brand_config['header_li_12'] = 'Mclaren Major And Minor Service.';
    $brand_config['header_li_13'] = 'Mclaren Suspension Repair.';
    $brand_config['header_li_14'] = 'Mclaren Transmission Repair.';
    $brand_config['header_li_15'] = 'Mclaren Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Mclaren Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Mclaren Electrical System Repair.';
    $brand_config['header_li_18'] = 'Mclaren Lighting System Repair.';
    $brand_config['header_li_19'] = 'Mclaren Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Mclaren Reprogramming Service.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Mclaren AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/mclaren-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/mclaren-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/mclaren/mclaren.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Ferrari AC Repair ***/
if(isset($_GET['ferrari-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?ferrari-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Ferrari";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Ferrari AC Repair.';
    $brand_config['header_li_3'] = 'Ferrari Compressor Replacement.';
    $brand_config['header_li_4'] = 'Ferrari Cooling System.';
    $brand_config['header_li_5'] = 'Ferrari Climate Control.';
    $brand_config['header_li_6'] = 'Ferrari AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Ferrari AC Maintenance.';
    $brand_config['header_li_8'] = 'Ferrari Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Ferrari Heating System.';
    $brand_config['header_li_10'] = 'Ferrari Coolant Flush.';
    $brand_config['header_li_11'] = 'Ferrari AC Gas Refill.';
    $brand_config['header_li_12'] = 'Ferrari Major And Minor Service.';
    $brand_config['header_li_13'] = 'Ferrari Suspension Repair.';
    $brand_config['header_li_14'] = 'Ferrari Transmission Repair.';
    $brand_config['header_li_15'] = 'Ferrari Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Ferrari Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Ferrari Electrical System Repair.';
    $brand_config['header_li_18'] = 'Ferrari Lighting System Repair.';
    $brand_config['header_li_19'] = 'Ferrari Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Ferrari Reprogramming Service.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Ferrari AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/ferrari-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/ferrari-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/ferrari/ferrari.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*** Maserati AC Repair ***/
if(isset($_GET['maserati-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?maserati-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "Maserati";
    $brand_config['brand_title'] = "AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";

    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Maserati AC Repair.';
    $brand_config['header_li_3'] = 'Maserati Compressor Replacement.';
    $brand_config['header_li_4'] = 'Maserati Cooling System.';
    $brand_config['header_li_5'] = 'Maserati Climate Control.';
    $brand_config['header_li_6'] = 'Maserati AC Condenser Replacement.';
    $brand_config['header_li_7'] = 'Maserati AC Maintenance.';
    $brand_config['header_li_8'] = 'Maserati Blower Motor Replacement.';
    $brand_config['header_li_9'] = 'Maserati Heating System.';
    $brand_config['header_li_10'] = 'Maserati Coolant Flush.';
    $brand_config['header_li_11'] = 'Maserati AC Gas Refill.';
    $brand_config['header_li_12'] = 'Maserati Major And Minor Service.';
    $brand_config['header_li_13'] = 'Maserati Suspension Repair.';
    $brand_config['header_li_14'] = 'Maserati Transmission Repair.';
    $brand_config['header_li_15'] = 'Maserati Engine Repair & Maintenance.';
    $brand_config['header_li_16'] = 'Maserati Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Maserati Electrical System Repair.';
    $brand_config['header_li_18'] = 'Maserati Lighting System Repair.';
    $brand_config['header_li_19'] = 'Maserati Brake Pads Replacement.';
    $brand_config['header_li_20'] = 'Maserati Reprogramming Service.';

    $brand_config['header_p_des'] = 'Exotic Cars Repair - We Are Specialized Maserati AC Repair In Dubai.';
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/maserati.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/maserati-animated-logo.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/maserati/maserati.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
    $brand_page = true;
    
}

/*****************************************************************************************
Cars Oil Change
******************************************************************************************/

/*** Audi Oil Change ***/
if(isset($_GET['audi-oil-change'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-oil-change";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Oil Change";
    $brand_config['brand_title_2'] = "";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Oil & Filter Change.';
    $brand_config['header_li_3'] = 'Audi Oil Flushing.';
    $brand_config['header_li_4'] = 'Audi Premium Oil Change.';
    $brand_config['header_li_5'] = 'Audi Transmission & Suspension.';
    $brand_config['header_li_6'] = 'Audi Major & Minor Services.';
    $brand_config['header_li_7'] = 'General Audi Maintenance.';
    $brand_config['header_li_8'] = 'Audi Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Audi Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Audi Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Specialized Audi Oil & Filter Change Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Gearbox Repair
******************************************************************************************/


/*****************************************************************************************
Cars Steering Repair
******************************************************************************************/

/*** Audi Steering Repair ***/
if(isset($_GET['audi-steering-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-steering-repair";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Steering Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Complete Steering Repair.';
    $brand_config['header_li_3'] = 'Steering Wheel Repair.';
    $brand_config['header_li_4'] = 'Steering Rack Repair.';
    $brand_config['header_li_5'] = 'Power Steering Repair.';
    $brand_config['header_li_6'] = 'Major & Minor Services.';
    $brand_config['header_li_7'] = 'General Audi Maintenance.';
    $brand_config['header_li_8'] = 'Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Suspension & Transmission.';
    $brand_config['header_li_12'] = 'Oil Filter Service.';
    $brand_config['header_li_13'] = '';
    $brand_config['header_li_14'] = 'AC Service & Repair.';
    $brand_config['header_li_15'] = 'Body Damage Repair.';
    $brand_config['header_li_16'] = 'Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Electrical System Repair.';
    $brand_config['header_li_18'] = 'Lighting System Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Specialized Complete Audi Car Steering Repair Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
Cars Body Shop
******************************************************************************************/

/*** Audi Body Shop ***/
if(isset($_GET['audi-body-shop'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?audi-body-shop";
    
    // Brand Name
    $brand_config['brand'] = "Audi";
    $brand_config['brand_title'] = "Body Shop";
    $brand_config['brand_title_2'] = "";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Audi Body Shop Damage Repair.';
    $brand_config['header_li_3'] = 'Audi Suspension & Inspection.';
    $brand_config['header_li_4'] = 'Audi Transmission & Maintenance.';
    $brand_config['header_li_5'] = 'Audi Transmission Repair.';
    $brand_config['header_li_6'] = 'Audi Major & Minor Services.';
    $brand_config['header_li_7'] = 'General Audi Maintenance.';
    $brand_config['header_li_8'] = 'Audi Engine Tuning & Diagnosis.';
    $brand_config['header_li_9'] = 'Audi Battery & Tires Repair.';
    $brand_config['header_li_10'] = 'Audi Brake Pads Repair.';
    $brand_config['header_li_11'] = 'Audi Computer Diagnostics.';
    $brand_config['header_li_12'] = 'Audi Oil Filter Service.';
    $brand_config['header_li_13'] = 'Audi Steering Repair.';
    $brand_config['header_li_14'] = 'Audi AC Service & Repair.';
    $brand_config['header_li_15'] = 'Audi Engine Maintenance.';
    $brand_config['header_li_16'] = 'Audi Glass / Windscreen Repair.';
    $brand_config['header_li_17'] = 'Audi Electrical System Repair.';
    $brand_config['header_li_18'] = 'Audi Lighting System Repair.';
    $brand_config['header_li_19'] = 'Audi Wheel Alignment & Repair.';

    $brand_config['header_p_des'] = 'We Are Specialized Audi Car Body Shop Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/audi.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/audi.png';
    $brand_config['brand_image'] = 'assets/img/brand-cars/audi/audi-a1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*****************************************************************************************
General
******************************************************************************************/

/*** Car Brake ***/
if(isset($_GET['car-brake-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-brake-repair";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Brake Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Car Brake Repair.';
    $brand_config['header_li_3'] = 'Car Brake Service.';
    $brand_config['header_li_4'] = 'Car Brake Replacement.';
    $brand_config['header_li_5'] = 'Car Brake Pad Replacement.';
    $brand_config['header_li_6'] = 'Car Brake Fluid Change.';
    $brand_config['header_li_7'] = 'Car Brake Light.';
    $brand_config['header_li_8'] = 'Car Brake Change.';
    $brand_config['header_li_9'] = 'Car Brake Oil.';
    $brand_config['header_li_10'] = 'Car Suspension & Transmission.';
    $brand_config['header_li_11'] = 'Car Major & Minor Services.';
    $brand_config['header_li_12'] = 'Car Engine Maintenance.';
    $brand_config['header_li_13'] = 'Car Wheel Alignment & Repair.';
    $brand_config['header_li_14'] = 'Car AC Service & Repair.';
    $brand_config['header_li_15'] = 'Car Battery & Tires Repair.';
    $brand_config['header_li_16'] = 'Car Computer Diagnostics.';
    $brand_config['header_li_17'] = '';
    $brand_config['header_li_18'] = '';
    $brand_config['header_li_19'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Brake Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Gearbox ***/
if(isset($_GET['car-gearbox-change'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-gearbox-change";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Gearbox Change - Rebuild";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Pickup And Inspection.';
    $brand_config['header_li_2'] = 'Car Gearbox Specialist.';
    $brand_config['header_li_3'] = 'Car Gearbox Rebuild.';
    $brand_config['header_li_4'] = 'Car Gearbox Change.';
    $brand_config['header_li_5'] = 'Car Gearbox Repair.';
    $brand_config['header_li_6'] = 'Car Gearbox Overhaul.';
    $brand_config['header_li_7'] = 'Car Gearbox & Transmission Repair.';
    $brand_config['header_li_8'] = 'Car Gearbox Repair and Replacement.';
    $brand_config['header_li_9'] = 'Car Gearbox & Wheel Alignment.';
    $brand_config['header_li_10'] = 'Car Suspension & Transmission.';
    $brand_config['header_li_11'] = 'Car Major & Minor Services.';
    $brand_config['header_li_12'] = 'Car Engine Maintenance.';
    $brand_config['header_li_13'] = 'Car Wheel Alignment & Repair.';
    $brand_config['header_li_14'] = 'Car AC Service & Repair.';
    $brand_config['header_li_15'] = 'Car Battery & Tires Repair.';
    $brand_config['header_li_16'] = 'Car Computer Diagnostics.';
    $brand_config['header_li_17'] = 'Car Service & Maintenance';
    $brand_config['header_li_18'] = '';
    $brand_config['header_li_19'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Gearbox Repair & Replacment In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Workshop ***/
if(isset($_GET['cars-workshop'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?cars-workshop";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Cars Workshop";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Car Services.';
    $brand_config['header_li_3'] = 'German & European Cars Workshop.';
    $brand_config['header_li_4'] = 'Gearbox Oil Change & Repair.';
    $brand_config['header_li_5'] = 'Engine Repair & Rebuild.';
    $brand_config['header_li_6'] = 'Suspension & Steering Repair.';
    $brand_config['header_li_7'] = 'AC Repair & Service.';
    $brand_config['header_li_8'] = 'Car Damage Repair & Painting.';
    $brand_config['header_li_9'] = 'Electrical System Repair & Programming.';
    $brand_config['header_li_10'] = 'Oil Change Service.';
    $brand_config['header_li_11'] = 'Transmission Repair & Replacement.';
    $brand_config['header_li_12'] = 'Suspension Repair.';
    $brand_config['header_li_13'] = 'Wheel Repair & Painting.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Brake Lighting System Repair.';
    $brand_config['header_li_18'] = 'Brake Repair & Replacement Servicing.';
    $brand_config['header_li_19'] = '';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized German & European Cars Workshop In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Mechanic ***/
if(isset($_GET['car-mechanic'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-mechanic";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Mechanic";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Pickup and Inspection.';
    $brand_config['header_li_2'] = 'Major & Minor Auto Service Mechanic.';
    $brand_config['header_li_3'] = 'German & European Car Mechanic.';
    $brand_config['header_li_4'] = 'Gearbox Oil Change & Repair.';
    $brand_config['header_li_5'] = 'Engine Repair & Rebuild Mechanic.';
    $brand_config['header_li_6'] = 'Suspension & Steering Repair Mechanic.';
    $brand_config['header_li_7'] = 'Auto AC Repair & Service Mechanic.';
    $brand_config['header_li_8'] = 'Car Damage Repair & Painting.';
    $brand_config['header_li_9'] = 'Auto Electrical Mechanic.';
    $brand_config['header_li_10'] = 'Oil Filter Change Service.';
    $brand_config['header_li_11'] = 'Transmission Repair & Replacement Mechanic.';
    $brand_config['header_li_12'] = 'Suspension Repair.';
    $brand_config['header_li_13'] = 'Wheel Repair & Painting.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Brake Lighting System Repair.';
    $brand_config['header_li_18'] = 'Brake Repair & Replacement Servicing.';
    $brand_config['header_li_19'] = 'Expert Car Repair Mechanics.';

    $brand_config['header_p_des'] = 'We Are Certified & Specialized Car Mechanic In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Oil Change ***/
if(isset($_GET['oil-change'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?oil-change";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Oil Change";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Car Oil Change.';
    $brand_config['header_li_3'] = 'Car Oil Change Service.';
    $brand_config['header_li_4'] = 'Car Brake Oil Change.';
    $brand_config['header_li_5'] = 'Car Transmission Oil Change.';
    $brand_config['header_li_6'] = 'Car Oil Filter Change.';
    $brand_config['header_li_7'] = 'Car Engine Oil Change.';
    $brand_config['header_li_8'] = 'Car Steering Oil Change.';
    $brand_config['header_li_9'] = 'Car Gearbox Oil Change.';
    $brand_config['header_li_10'] = 'Oil Filter Change Service.';
    $brand_config['header_li_11'] = 'Car Oil Replacement.';
    $brand_config['header_li_12'] = 'Oil Pan Gasket Replacement.';
    $brand_config['header_li_13'] = 'Wheel Repair & Painting.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Brake Lighting System Repair.';
    $brand_config['header_li_18'] = 'Brake Repair & Replacement Servicing.';
    $brand_config['header_li_19'] = 'Expert Car Repair Mechanics.';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Oil Change Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Oil Leak ***/
if(isset($_GET['oil-leak'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?oil-leak";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Fix Car Oil Leak";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Fix Car Oil Leak.';
    $brand_config['header_li_3'] = 'Oil Leak Repair Shop & Workshop.';
    $brand_config['header_li_4'] = 'Fix Car Engine Oil Leak.';
    $brand_config['header_li_5'] = 'Fix Car Transmission Oil Leak.';
    $brand_config['header_li_6'] = 'Car Oil Filter Change.';
    $brand_config['header_li_7'] = 'Car Engine Oil Change.';
    $brand_config['header_li_8'] = 'Fix Car Steering Oil Leak.';
    $brand_config['header_li_9'] = 'Fix Car Gearbox Oil Leak.';
    $brand_config['header_li_10'] = 'Fix Oil Filter & Service.';
    $brand_config['header_li_11'] = 'Car Oil Replacement.';
    $brand_config['header_li_12'] = 'Oil Pan Gasket Replacement.';
    $brand_config['header_li_13'] = 'Wheel Repair & Painting.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Brake Lighting System Repair.';
    $brand_config['header_li_18'] = 'Brake Repair & Replacement Servicing.';
    $brand_config['header_li_19'] = 'Expert Car Repair Mechanics.';

    $brand_config['header_p_des'] = 'We Are Specialized Car Oil Leak Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Oil Replacement ***/
if(isset($_GET['oil-replacement'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?oil-replacement";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Oil Replacement";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Oil Pan Replacement.';
    $brand_config['header_li_3'] = 'Oil Cooler Replacement.';
    $brand_config['header_li_4'] = 'Oil Pump Replacement.';
    $brand_config['header_li_5'] = 'Oil Change Synthetic Oil.';
    $brand_config['header_li_6'] = 'Synthetic Oil Change.';
    $brand_config['header_li_7'] = 'Synthetic Oil Change Deals.';
    $brand_config['header_li_8'] = 'Oil Pan Gasket Replacement.';
    $brand_config['header_li_9'] = '24/7 Available - Call Now.';
    $brand_config['header_li_10'] = 'Oil Filter Gasket Replacement.';
    $brand_config['header_li_11'] = 'Oil Gasket Replacement.';
    $brand_config['header_li_12'] = 'Oil Consumption Fix.';
    $brand_config['header_li_13'] = 'Engine Oil Change.';
    $brand_config['header_li_14'] = 'Gearbox Oil Change.';
    $brand_config['header_li_15'] = 'Oil Filter & Service.';
    $brand_config['header_li_16'] = '';
    $brand_config['header_li_17'] = '';
    $brand_config['header_li_18'] = '';
    $brand_config['header_li_19'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Oil Change & Replacement Garage In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Rim Protection ***/
if(isset($_GET['rim-protection'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?rim-protection";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Rim Protection";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Best Rim Protection.';
    $brand_config['header_li_3'] = 'Rim Guard Protector.';
    $brand_config['header_li_4'] = 'Rim Guard Wheel Protector.';
    $brand_config['header_li_5'] = 'Alloygator Rim Protection.';
    $brand_config['header_li_6'] = 'Interim Service.';
    $brand_config['header_li_7'] = 'Alloy Rim Protection.';
    $brand_config['header_li_8'] = 'Rim Guard.';
    $brand_config['header_li_9'] = 'Wheel Protection.';
    $brand_config['header_li_10'] = 'Wheel Alignment.';
    $brand_config['header_li_11'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_12'] = 'Oil Pan Gasket Replacement.';
    $brand_config['header_li_13'] = 'Wheel Repair & Painting.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Brake Lighting System Repair.';
    $brand_config['header_li_18'] = 'Brake Repair & Replacement Servicing.';
    $brand_config['header_li_19'] = 'Expert Car Repair Mechanics.';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Rim Protection & Wheel Alignment In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Wheel Alignment ***/
if(isset($_GET['wheel-alignment'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?wheel-alignment";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Wheel Alignment";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Wheel Inspection.';
    $brand_config['header_li_2'] = 'Wheel Alignment.';
    $brand_config['header_li_3'] = 'Wheel Protection.';
    $brand_config['header_li_4'] = 'Car Steering Wheel Shaking.';
    $brand_config['header_li_5'] = 'Car Wheel Alignment.';
    $brand_config['header_li_6'] = 'Interim Service.';
    $brand_config['header_li_7'] = 'Alloy Rim Protection.';
    $brand_config['header_li_8'] = 'Wheel Rim Guard.';
    $brand_config['header_li_9'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_10'] = 'Wheel Rim Protection.';
    $brand_config['header_li_11'] = 'Wheel Repair & Painting.';
    $brand_config['header_li_12'] = 'Computer Diagnostics.';
    $brand_config['header_li_13'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_14'] = 'Car Steering Repair.';
    $brand_config['header_li_15'] = 'Brake Lighting System Repair.';
    $brand_config['header_li_16'] = 'Brake Repair & Replacement Servicing.';
    $brand_config['header_li_17'] = 'Expert Car Repair Mechanics.';
    $brand_config['header_li_18'] = '';
    $brand_config['header_li_19'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Wheel Alignment & Rim Protection In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Repair Garage ***/
if(isset($_GET['car-repair-garage'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-repair-garage";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Repair Garage";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Best Car Garage in Dubai.';
    $brand_config['header_li_3'] = 'Car Transmission.';
    $brand_config['header_li_4'] = 'Car Repair & Services.';
    $brand_config['header_li_5'] = 'Auto Service Garage.';
    $brand_config['header_li_6'] = 'Car Suspension & Transmission.';
    $brand_config['header_li_7'] = 'AC Repair & Service.';
    $brand_config['header_li_8'] = 'Car Damage Repair & Painting.';
    $brand_config['header_li_9'] = 'Electrical System Repair & Programming.';
    $brand_config['header_li_10'] = 'Oil Change Service.';
    $brand_config['header_li_11'] = 'Transmission Repair & Replacement.';
    $brand_config['header_li_12'] = 'Suspension Repair.';
    $brand_config['header_li_13'] = 'Wheel Repair & Alignment.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Change Engine Oil & Repair.';
    $brand_config['header_li_18'] = 'Brake Pad & Replacement.';
    $brand_config['header_li_19'] = 'Gearbox Repair & Oil Change';
    $brand_config['header_li_20'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified Best Car Garage In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Maintenance ***/
if(isset($_GET['car-maintenance'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-maintenance";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Maintenance";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Car Maintenance.';
    $brand_config['header_li_3'] = 'Car Regular Maintenance.';
    $brand_config['header_li_4'] = 'Car Engine Maintenance.';
    $brand_config['header_li_5'] = 'Car Suspension Maintenance.';
    $brand_config['header_li_6'] = 'Car Transmission Maintenance.';
    $brand_config['header_li_7'] = 'AC Repair & Maintenance.';
    $brand_config['header_li_8'] = 'Car Damage Repair & Maintenance.';
    $brand_config['header_li_9'] = 'Electrical System Repair & Programming.';
    $brand_config['header_li_10'] = 'Oil Change Service.';
    $brand_config['header_li_11'] = 'Transmission Repair & Replacement.';
    $brand_config['header_li_12'] = 'Suspension Repair.';
    $brand_config['header_li_13'] = 'Wheel Repair & Alignment.';
    $brand_config['header_li_14'] = 'Computer Diagnostics.';
    $brand_config['header_li_15'] = 'Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'Car Steering Repair.';
    $brand_config['header_li_17'] = 'Change Engine Oil & Repair.';
    $brand_config['header_li_18'] = 'Brake Pad & Replacement.';
    $brand_config['header_li_19'] = 'Gearbox Repair & Oil Change';
    $brand_config['header_li_20'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified Car Maintenance Garage In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** German Car Repair ***/
if(isset($_GET['german-car-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?german-car-repair";
    
    // Brand Name
    $brand_config['brand'] = "German";
    $brand_config['brand_title'] = "Car Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free German Car Inspection.';
    $brand_config['header_li_2'] = 'German Car Specialist.';
    $brand_config['header_li_3'] = 'German Car Repair.';
    $brand_config['header_li_4'] = 'German Car Service.';
    $brand_config['header_li_5'] = 'German Car Maintenance.';
    $brand_config['header_li_6'] = 'German Car Transmission Repair.';
    $brand_config['header_li_7'] = 'German Car AC Repair & Maintenance.';
    $brand_config['header_li_8'] = 'German Car Body Damage Repair.';
    $brand_config['header_li_9'] = 'German Car Programming.';
    $brand_config['header_li_10'] = 'German Car Oil Change Service.';
    $brand_config['header_li_11'] = 'Transmission Repair & Replacement.';
    $brand_config['header_li_12'] = 'German Car Suspension Repair.';
    $brand_config['header_li_13'] = 'German Car Wheel Repair & Alignment.';
    $brand_config['header_li_14'] = 'German Car Computer Diagnostics.';
    $brand_config['header_li_15'] = 'German Car Tires & Batteries Repair.';
    $brand_config['header_li_16'] = 'German Car Steering Repair.';
    $brand_config['header_li_17'] = 'German Car Change Engine Oil & Repair.';
    $brand_config['header_li_18'] = 'German Car Brake Pad & Replacement.';
    $brand_config['header_li_19'] = 'German Car Gearbox Repair & Oil Change';
    $brand_config['header_li_20'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified In German Cars Repair Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Auto Repair ***/
if(isset($_GET['auto-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?auto-repair";
    
    // Brand Name
    $brand_config['brand'] = "Auto";
    $brand_config['brand_title'] = "Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Auto Repair Garage.';
    $brand_config['header_li_3'] = 'Auto ECU Repair.';
    $brand_config['header_li_4'] = 'Auto ECM Repair.';
    $brand_config['header_li_5'] = 'Auto Body Repair.';
    $brand_config['header_li_6'] = 'Auto Power Window Repair.';
    $brand_config['header_li_7'] = 'Automobile Electric Repair.';
    $brand_config['header_li_8'] = 'Auto Electric Repair Shop.';
    $brand_config['header_li_9'] = 'Auto Radiator Repair Services.';
    $brand_config['header_li_10'] = 'Auto Collision Repair.';
    $brand_config['header_li_11'] = 'Auto Leak Repair.';
    $brand_config['header_li_12'] = 'Automatic Transmission Repairs.';
    $brand_config['header_li_13'] = 'Electronic Auto Repair.';
    $brand_config['header_li_14'] = 'Auto Electric Window Repair.';
    $brand_config['header_li_15'] = 'Auto Electric Repair Service.';
    $brand_config['header_li_16'] = 'Auto Gearbox Repair.';
    $brand_config['header_li_17'] = 'Auto Water Leak Repair.';
    $brand_config['header_li_18'] = 'Auto Engine Repair.';
    $brand_config['header_li_19'] = 'Auto Tires & Battries Repair.';
    $brand_config['header_li_20'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified Auto Repair Garage In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Auto Shop ***/
if(isset($_GET['auto-shop'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?auto-shop";
    
    // Brand Name
    $brand_config['brand'] = "Auto";
    $brand_config['brand_title'] = "Shop";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Auto Shop Dubai.';
    $brand_config['header_li_3'] = 'Auto Transmission Specialist.';
    $brand_config['header_li_4'] = 'Car Automatic Transmission Repair.';
    $brand_config['header_li_5'] = 'Auto Body Repair.';
    $brand_config['header_li_6'] = 'Best Auto Inspection Service.';
    $brand_config['header_li_7'] = 'Auto Inspection.';
    $brand_config['header_li_8'] = 'Automatic Car Gearbox Specialist.';
    $brand_config['header_li_9'] = 'Auto Service.';
    $brand_config['header_li_10'] = 'Auto Wiring.';
    $brand_config['header_li_11'] = 'Auto Electrical.';
    $brand_config['header_li_12'] = 'Auto Brakes.';
    $brand_config['header_li_13'] = 'Auto Suspension.';
    $brand_config['header_li_14'] = 'Auto Air Conditioning Repair Service.';
    $brand_config['header_li_15'] = 'Auto Electric Repair Service.';
    $brand_config['header_li_16'] = 'Auto Gearbox Repair.';
    $brand_config['header_li_17'] = 'Auto Water Leak Repair.';
    $brand_config['header_li_18'] = 'Auto Engine Repair.';
    $brand_config['header_li_18'] = 'Auto Tires & Battries Repair.';
    $brand_config['header_li_19'] = '';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified Auto Shop In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Engine Repair ***/
if(isset($_GET['car-engine-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-engine-repair";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Engine Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Engine Inspection.';
    $brand_config['header_li_2'] = 'Car Engine Repair.';
    $brand_config['header_li_3'] = 'Engine Specialist.';
    $brand_config['header_li_4'] = 'Engine Belt Noise Repair.';
    $brand_config['header_li_5'] = 'Fix Engine Leak.';
    $brand_config['header_li_6'] = 'Complete Engine Service.';
    $brand_config['header_li_7'] = 'Fix Car Engine Sound.';
    $brand_config['header_li_8'] = 'Engine Replacement & Repair.';
    $brand_config['header_li_9'] = 'Fix Engine Noise.';
    $brand_config['header_li_10'] = 'Fix Engine Rebuild.';
    $brand_config['header_li_11'] = 'Fix Engine Vibration.';
    $brand_config['header_li_12'] = 'Engine Diagnosis.';
    $brand_config['header_li_13'] = 'Engine Making Noise Repair.';
    $brand_config['header_li_14'] = 'Air Conditioning Repair Service.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Engine Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified Car Engine Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Engine ***/
if(isset($_GET['car-engine'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-engine";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Engine Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Engine Inspection.';
    $brand_config['header_li_2'] = 'Engine Repair.';
    $brand_config['header_li_3'] = 'Car Engine Overhauling.';
    $brand_config['header_li_4'] = 'Engine Belt Replacement.';
    $brand_config['header_li_5'] = 'Car Engine Block Repair.';
    $brand_config['header_li_6'] = 'Car Engine Service.';
    $brand_config['header_li_7'] = 'Engine Timing Chain Replacement.';
    $brand_config['header_li_8'] = 'Car Engine Light.';
    $brand_config['header_li_9'] = 'Car Engine Restoration.';
    $brand_config['header_li_10'] = 'Engine Misfire Repair.';
    $brand_config['header_li_11'] = 'Engine Belt Noise.';
    $brand_config['header_li_12'] = 'Engine Belt Making Noise.';
    $brand_config['header_li_13'] = 'Car Engine Service Light.';
    $brand_config['header_li_14'] = 'Air Conditioning Repair.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Tires & Battries Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized & Certified Car Engine Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Engine Service ***/
if(isset($_GET['car-engine-service'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-engine-service";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Engine Service";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Engine Inspection.';
    $brand_config['header_li_2'] = 'Car Engine Service.';
    $brand_config['header_li_3'] = 'Engine Carbon Cleaning.';
    $brand_config['header_li_4'] = 'Full Car Engine Service.';
    $brand_config['header_li_5'] = 'Car Engine Mount Replacement.';
    $brand_config['header_li_6'] = 'Car Engine Reconditioning.';
    $brand_config['header_li_7'] = 'Car Used Engine.';
    $brand_config['header_li_8'] = 'Car Engine Change.';
    $brand_config['header_li_9'] = 'Engine Replacement.';
    $brand_config['header_li_10'] = 'Engine Coolant Leak Repair.';
    $brand_config['header_li_11'] = 'Engine Mount Replacement.';
    $brand_config['header_li_12'] = 'Engine Leaking.';
    $brand_config['header_li_13'] = 'Engine Maintenance.';
    $brand_config['header_li_14'] = 'Engine Jerking.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Tires & Battries Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Engine Service & Maintenance In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Automotive ***/
if(isset($_GET['automotive'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?automotive";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Automotive Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Engine Inspection.';
    $brand_config['header_li_2'] = 'Automotive ECM Programming.';
    $brand_config['header_li_3'] = 'Automotive Wiring Repair.';
    $brand_config['header_li_4'] = 'Automotive Electrical Repair.';
    $brand_config['header_li_5'] = 'Automotive Suspension.';
    $brand_config['header_li_6'] = 'Automotive Computer Programming.';
    $brand_config['header_li_7'] = 'Automotive Radiator Repair.';
    $brand_config['header_li_8'] = 'Automotive Engine Repair.';
    $brand_config['header_li_9'] = 'Engine Replacement.';
    $brand_config['header_li_10'] = 'Engine Coolant Leak Repair.';
    $brand_config['header_li_11'] = 'Engine Mount Replacement.';
    $brand_config['header_li_12'] = 'Engine Leaking.';
    $brand_config['header_li_13'] = 'Engine Maintenance.';
    $brand_config['header_li_14'] = 'Engine Jerking.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Engine Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized In Automotive Repair & Maintenance Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Auto Programmer ***/
if(isset($_GET['auto-programmer'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?auto-programmer";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Auto Programmer";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Auto ECU Programmer.';
    $brand_config['header_li_3'] = 'Auto Key Programming.';
    $brand_config['header_li_4'] = 'Auto ECU Programming.';
    $brand_config['header_li_5'] = 'Auto Programming.';
    $brand_config['header_li_6'] = 'Auto Computer Reprogramming.';
    $brand_config['header_li_7'] = 'Engine Timing Chain Replacement.';
    $brand_config['header_li_8'] = 'Car Engine Light.';
    $brand_config['header_li_9'] = 'Car Engine Restoration.';
    $brand_config['header_li_10'] = 'Engine Misfire Repair.';
    $brand_config['header_li_11'] = 'Engine Mount Replacement.';
    $brand_config['header_li_12'] = 'Engine Leaking.';
    $brand_config['header_li_13'] = 'Engine Maintenance.';
    $brand_config['header_li_14'] = 'Engine Jerking.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Engine Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized In Auto Computer Reprogramming In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car AC Repair ***/
if(isset($_GET['car-ac-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-ac-repair";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car AC Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Car AC Repair.';
    $brand_config['header_li_3'] = 'Car AC Gas Refill.';
    $brand_config['header_li_4'] = 'Car AC Cleaning Service.';
    $brand_config['header_li_5'] = 'Car AC Gas Leak Repair.';
    $brand_config['header_li_6'] = 'Car AC Inspection.';
    $brand_config['header_li_7'] = 'Car AC Evaporator Leak.';
    $brand_config['header_li_8'] = 'Car AC Service.';
    $brand_config['header_li_9'] = 'Car Condenser Repair & Change.';
    $brand_config['header_li_10'] = 'Car AC Diagnostic.';
    $brand_config['header_li_11'] = 'Car Compressor Repair.';
    $brand_config['header_li_12'] = 'Complete Car AC Check UP.';
    $brand_config['header_li_13'] = 'Engine Maintenance.';
    $brand_config['header_li_14'] = 'Engine Jerking.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Engine Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized In Car AC Repair - Refill - Cleaning - Gas Leakage - Diagnostic & AC Inspection Service In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Suspension Repair ***/
if(isset($_GET['car-suspension-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-suspension-repair";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Suspension Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Car Suspension Repair.';
    $brand_config['header_li_3'] = 'Car Suspension Leak.';
    $brand_config['header_li_4'] = 'Car Air Suspension.';
    $brand_config['header_li_5'] = 'Car Suspension Replacement.';
    $brand_config['header_li_6'] = 'Car Front Suspension Repair.';
    $brand_config['header_li_7'] = 'Car Suspension Change.';
    $brand_config['header_li_8'] = 'Car Suspension Specialist.';
    $brand_config['header_li_9'] = 'Car Suspension Rebuild.';
    $brand_config['header_li_10'] = 'Car Suspension Service.';
    $brand_config['header_li_11'] = 'Car Suspension Check Up.';
    $brand_config['header_li_12'] = 'Engine Misfire Repair.';
    $brand_config['header_li_13'] = 'Engine Maintenance.';
    $brand_config['header_li_14'] = 'Engine Jerking.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Engine Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Suspension Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

/*** Car Transmission Repair ***/
if(isset($_GET['car-transmission-repair'])){
    
    // Brand URL
    $brand_config['brand_url'] = "?car-transmission-repair";
    
    // Brand Name
    $brand_config['brand'] = "";
    $brand_config['brand_title'] = "Car Transmission Repair";
    $brand_config['brand_title_2'] = "In Dubai";
    
    // Email, Call & Whatsapp # for landing page
    $brand_config['call_now'] = "042999908";
    $brand_config['whatsapp'] = "507786716";
    $brand_config['email'] = "info@autoexpertworkshop.com";
    
    // Header Key List
    $brand_config['header_li_1'] = 'Free Car Inspection.';
    $brand_config['header_li_2'] = 'Car Transmission Repair.';
    $brand_config['header_li_3'] = 'Car Transmission Overheating.';
    $brand_config['header_li_4'] = 'Car Transmission Leak.';
    $brand_config['header_li_5'] = 'Car Transmission Service.';
    $brand_config['header_li_6'] = 'Car Transmission Rebuild.';
    $brand_config['header_li_7'] = 'Car Transmission Replacement.';
    $brand_config['header_li_8'] = 'Car leaking Transmission Fluid.';
    $brand_config['header_li_9'] = 'Car Suspension Rebuild.';
    $brand_config['header_li_10'] = 'Car Suspension Service.';
    $brand_config['header_li_11'] = 'Car Suspension Check Up.';
    $brand_config['header_li_12'] = 'Engine Misfire Repair.';
    $brand_config['header_li_13'] = 'Engine Maintenance.';
    $brand_config['header_li_14'] = 'Engine Jerking.';
    $brand_config['header_li_15'] = 'Electric Repair Service.';
    $brand_config['header_li_16'] = 'Gearbox Repair.';
    $brand_config['header_li_17'] = 'Water Leak Repair.';
    $brand_config['header_li_18'] = 'Engine Repair.';
    $brand_config['header_li_19'] = 'Wheel Alignment & Rim Repair.';
    $brand_config['header_li_20'] = 'Brake Pad & Replacement.';

    $brand_config['header_p_des'] = 'We Are Specialized In Car Transmission Repair In Dubai.';

    // Images
    $brand_config['brand_logo'] = 'assets/img/brand/general-logo.jpg';
    $brand_config['brand_logo_animated'] = 'assets/img/brand/animated-logo/general-logo.png';
    $brand_config['brand_image'] = 'assets/img/about-us/about-us-img-1-1.jpg';
    
    // Sections & Pages
    $brand_config['head'] = 'tpl/brand-head.tpl';
    $brand_config['header'] = 'tpl/header.tpl';
    $brand_config['about_section'] = 'tpl/about.tpl';
    $brand_config['general_service'] = 'tpl/general-service.tpl';
    $brand_config['work_process_section'] = 'tpl/work-process.tpl';
    $brand_config['latest_project_section'] = 'tpl/latest-project.tpl';
    $brand_config['our_featured_section'] = 'tpl/our-featured.tpl';
    $brand_config['specialized_section'] = 'tpl/specialized.tpl';
    $brand_config['footer_area'] = 'tpl/footer-area.tpl';
    
	$brand_page = true;
    
}

?>