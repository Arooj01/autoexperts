<?php
include_once("brand-config.php");
if($brand_page){
	include_once("brand-page.php");
}else{
	include_once("home-page.php");
}
?>