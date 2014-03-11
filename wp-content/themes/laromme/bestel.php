<?php 
/**
 * Template Name: Bestel
 * 
 * WARNING: This template file is a core part of the 
 * 
 * @author		Koen van der Veldt
 * @copyright	Copyright (c) Koen van der Veldt
 * @link		http://jasonbobich.com
 * @link		http://themeblvd.com
 * @package 	Theme Blvd WordPress Framework
 */
get_header(); ?>
<style>h3.gform_title{display:none;}</style>
<section class="breadcrumb-wrapper">
                <div class="container">
                    <h1 class="page-title">Bestellijst</h1>
              
                </div>
            </section>

 <div class="main-container">
<div class="container">
    <div class="row">
        <div class="dt-sc-two-third column first">
<section class="content-full-width" id="primary">
<div class="margin60"></div>

                  
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?><p>
    <?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?> 
    <div class="margin60"></div>
</section>
</div>

</div> <!-- row end -->

<?php get_footer(); ?>