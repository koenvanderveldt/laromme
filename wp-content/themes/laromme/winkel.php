<?php 
/**
 * Template Name: winkel
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
<div class="container">
                    <section id="primary" class="content-full-width menu-items-list">
                    	<div id="page-menu-sticky">
                        	<div class="container">
                                <ul class="menu-categories">
                                    <li>
                                        <div class="cat-item">
                                            <a href="#breakfast"><span class="item-seven"></span><br />brood</a>
                                        </div>
                                        <a href="#" class="star"><span class="fa fa-star-o"><span></span></span></a>
                                    </li>
                                    <li>
                                        <div class="cat-item">
                                            <a href="#lunch"><span class="item-five"></span><br />banket</a>
                                        </div>
                                        <a href="#" class="star"><span class="fa fa-star-o"><span></span></span></a>
                                    </li>
                                    <li>
                                        <div class="cat-item">
                                            <a href="#dinner"><span class="item-eight"></span><br />lunch</a>
                                        </div>
                                        <a href="#" class="star"><span class="fa fa-star-o"><span></span></span></a>
                                    </li>
                                    <li>
                                        <div class="cat-item">
                                            <a href="#desserts"><span class="item-four"></span><br />taart</a>
                                        </div>
                                        <a href="#" class="star"><span class="fa fa-star-o"><span></span></span></a>
                                    </li>
                                    
                                    <li>
                                        <div class="cat-item">
                                            <a href="#ice-creams"><span class="item-three"></span><br />kosher artikelen</a>
                                        </div>
                                        <a href="#" class="star"><span class="fa fa-star-o"><span></span></span></a>
                                    </li>
                                </ul>
							</div>
                        </div>  
</div>
</section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; else: ?><p>
    <?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?> 
<?php get_footer(); ?>