
<?php 
/**
 * Template Name: blog
 * 
 * 
 * @author		Koen van der Veldt
 * @copyright	Copyright (c) Koen van der Veldt
 * @link		http://idalize.com
 * @link		http://idalize.com
 * @package 	Theme Laromme
 */

get_header(); ?>

    <section class="breadcrumb-wrapper">
                <div class="container">
                    <h1 class="page-title">Recepten</h1>
              
                </div>
            </section>
            <div class="container">
                    <section id="primary" class="content-full-width">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
?>
                        <div class=" column dt-sc-one-third">
                            <article class="blog-post">
                            <div class="post-details">
                                <div class="date rounded">
                                    <span>27</span><br />Aug <br /> 2013
                                </div>
                                <ul class="post-meta">
                                    <li class="post-authour">Admin <span class="fa fa-user"></span></li>
                                    <li class="post-tag"><a href="#">Party</a>, <a href="">Events</a> <span class="fa fa-thumb-tack"></span></li>
                                    <li class="post-comments"><a href="#">4<span class="fa fa-comment"></span></a></li>
                                </ul>
                            </div>
                            <div class="post-content">
                                    <div class="entry-thumb">
                                    <a href="blog-detail.html">
                                        <div class="border">
                                            <span class="top-right"></span>
                                            <img src="http://placehold.it/948X495&text=Blog" alt="" title="">
                                            <span class="bottom-left"></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="entry-datail">
                                	<h2><a href=""><?php the_title(); ?></a></h2>
									<?php the_content(); 
    								?>
    								</div>
                                    </div>
                            </article>
                           </div>
                           endwhile; else: ?><p>
    								<?php _e('Sorry, no posts matched your criteria.'); ?></p>
    								<?php endif; ?> 

    							</div> <!-- end of container -->
    						</section> <!-- end of section -->

<?php get_footer(); ?>