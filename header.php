<!Doctype html>
<html <?php language_attributes();?>>
<head>
<title>WooCommerce</title>
<meta charset="<?php bloginfo('charset')?>"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0, shrink-to-fit=no,maximum-scale=1"/>
<?php wp_head();?>
</head>
<body>
<section class="headerSec">
<div class="container-fluid" style="padding: 0rem;
margin: 0rem;">
<div class="menu">
<?php 
    wp_nav_menu(array(
        'theme_location' => 'main-menu'
    ));
?>
</div>
</div>
</section>
<section class="searchSec">
<div class="container">
<div class="row">
<div class="col"></div>
<div class="col-7">
<div class="searchForm">
    <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
    <i class="fa fa-search"></i>
</div>
</div>
<div class="col"></div>
</div>
</div>
</section>