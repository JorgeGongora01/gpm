<?php
/**
Template Name: Home Page 
*/
get_header(); 
?>
<div class="wrappper">
<?php 

    /****** Home Slider ******/
    get_template_part('template-parts/home','slider');
    
    /****** Home Sale Products ******/
    get_template_part('template-parts/home','recentproducts');

    /****** Home Sale Products ******/
    get_template_part('template-parts/home','saleproducts');

    /****** Home Blog ******/
    get_template_part('template-parts/home','blog');

    /****** Home CTA ******/
    get_template_part('template-parts/home','callout');
?>
</div>
<?php
get_footer();