<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
    <section class="breadcrumb-wrapper">
                <div class="container">
                    <h1 class="page-title"><?php the_title();?></h1>
              
                </div>
            </section>

 <div class="main-container">
<?php
		the_content(); 
     endwhile; else: ?><p>
    <?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?> 
<?php get_footer(); ?>