<?php
/**
* Template Name: Home page
*
* @package WordPress
* @subpackage Twenty_Sixteen
* @since Twenty Sixteen 1.0
*/

get_header(); ?>
<?php get_template_part( 'sub_sections/hero-template'); ?> 
<!--WHAT WE DO-->
<?php get_template_part( 'sub_sections/home-price-template'); ?> 

<!--WHy US-->
<?php get_template_part( 'sub_sections/home-why-template'); ?>

<!--Core Capabilities-->
<?php get_template_part( 'sub_sections/home-testimonail-template'); ?> 

<!-- Testimonial section-->
<?php get_template_part( 'sub_sections/home-coverage-template'); ?> 

<!-- Service section-->
<?php get_template_part( 'sub_sections/home-blog-template'); ?> 
<!-- Oue Team section-->
<?php get_template_part( 'sub_sections/home-getTouch-template'); ?>
<!-- get Touch Section-->
<?php get_template_part( 'sub_sections/getTouch-template'); ?> 

<!-- our Blog Section-->
<?php get_template_part( 'sub_sections/ourBlog-template'); ?> 

<!-- our Parner Section-->
<?php get_template_part( 'sub_sections/ourParner-template'); ?> 

<!-- our Gallery Section-->
<?php get_template_part( 'sub_sections/ourGallery-template'); ?> 




<?php get_footer(); ?>
