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
<?php get_template_part( 'sub_sections/whatWeDo-template'); ?> 

<!--WHy US-->
<?php get_template_part( 'sub_sections/whyUs-template'); ?>

<!--Core Capabilities-->
<?php get_template_part( 'sub_sections/core-template'); ?> 

<!-- Testimonial section-->
<?php get_template_part( 'sub_sections/testimonail-template'); ?> 

<!-- Service section-->
<?php get_template_part( 'sub_sections/service-template'); ?> 
<!-- Oue Team section-->
<?php get_template_part( 'sub_sections/ourTeam-template'); ?>
<!-- get Touch Section-->
<?php get_template_part( 'sub_sections/getTouch-template'); ?> 

<!-- our Blog Section-->
<?php get_template_part( 'sub_sections/ourBlog-template'); ?> 

<!-- our Parner Section-->
<?php get_template_part( 'sub_sections/ourParner-template'); ?> 

<!-- our Gallery Section-->
<?php get_template_part( 'sub_sections/ourGallery-template'); ?> 




<?php get_footer(); ?>
