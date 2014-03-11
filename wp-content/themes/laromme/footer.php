</div><!-- end of main-container -->
            <div class="footer-top"><span class="driver-logo"></span></div>
            <footer>
                <div class="container">
                    <div class="dt-sc-one-fourth column first">
                        <aside class="widget hotel-timing">
                            <h3 class="widgettitle">Openingstijden</h3>
                            <ul>
                                <li><span class="day">Maandag: </span> 8:00 - 18:00 </li>
                                <li><span class="day">Dinsdag: </span> 8:00 - 18:00 </li>
                                <li><span class="day">Woensdag: </span> 8:00 - 18:00 </li>
                                <li><span class="day">Donderdag: </span> 8:00 - 18:00 </li>
                                <li><span class="day">Vrijdag zomer: </span> 8:00 - 16:00</li>
                                <li><span class="day">Vrijdag winter: </span> 8:00 - 13:00 </li>
                                <li><span class="day">Shabbat: </span> Gesloten </li>
                                <li><span class="day">Zondag: </span> 8:00 - 18:00</li>
                            </ul>
                            <span class="closed">GESLOTEN Zaterdag </span>
                        </aside>
                    </div>
                    <div class="dt-sc-one-fourth column">
                        <aside class="widget hotel-booking">
                            <h3 class="widgettitle">Plaats een bestelling</h3>
                            <ul>
                                <li>
                                    <h4>Openingstijden:</h4>
                                    <p>Laromme staat voor u klaar iedere werkdag van 08:00-18:00 uur
                                     en op vrijdag van 08:00-16:00 uur in de zomer, tot 13:00 in de winter.
                                    Op zaterdag en op joodse feestdagen is Laromme gesloten.</p>
                                </li>
                               
                            </ul>
                            <a href="contact" class="dt-sc-button small theme-btn">Bestel nu</a>
                        </aside>
                    </div>
                    <div class="dt-sc-one-half column">
                        <h3 class="widgettitle">Contact gegevens</h3>
                        <div class="dt-sc-one-half column first">
                            <aside class="widget widget_text">
                                <div id="footer_map"> </div>                        
                            </aside>
                        </div>
                        <div class="dt-sc-one-half column">
                            <aside class="widget widget_text">
                                <p><span class="fa fa-map-marker"></span><strong>Adres:</strong> <br />Kastelenstraat 69, 1083 CC Amsterdam</p>
                                <p><span class="fa fa-phone"></span><strong>Tel</strong> 020 644 7567</p>
                                <p><span class="fa fa-envelope"></span><strong>Mail:</strong> <a href="#">contact@laromme.nl</a></p>
                            </aside>
                            <aside class="widget social-icons">
                                <h3 class="widgettitle">Volg ons:</h3>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/sociable/hover/facebook.png" alt="twitter.png" title="" />
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/sociable/facebook.png" alt="twitter.png" title="" />
                                        </a>
                                    </li>
                                   
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="footer-info">
                    <div class="container">
                        <p class="copyright">&copy; 2014 <a href="http://www.idalize.com"> Idalize</a></p>
                        <ul class="footer-links">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>/</li> 
                            <li><a href="over-ons">Over ons</a>/</li>
                            <li><a href="winkel">Winkel</a>/</li>
                            <li><a href="catering">Catering</a>/</li>
                            <li><a href="bestel">Bestel</a>/</li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
        <!-- wrapper div Ends here -->
    </div>
    <!-- main-content div Ends here -->
    <!-- Java Scripts -->


	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/superfish.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hoverIntent.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
    
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.tabs.min.js"></script>
    
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.gmap.min.js"></script>
    
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/twitter/jquery.tweet.min.js"></script>
    
	<!-- Revolution Slider Starts -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/revolution/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($){ 
    if($.fn.cssOriginal != undefined)
        $.fn.css = $.fn.cssOriginal;

        var api = $('.fullwidthbanner').revolution(
        {
            delay:9000,
            startwidth:940,
            startheight:640,
    
            onHoverStop:"on",                       // Stop Banner Timet at Hover on Slide on/off
    
            thumbWidth:100,                         // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
            thumbHeight:50,
            thumbAmount:3,
    
            hideThumbs:200,
            navigationType:"none",              // bullet, thumb, none
            navigationArrows:"solo",                // nexttobullets, solo (old name verticalcentered), none
    
            navigationStyle:"round",                // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
    
            navigationHAlign:"center",              // Vertical Align top,center,bottom
            navigationVAlign:"bottom",                  // Horizontal Align left,center,right
            navigationHOffset:30,
            navigationVOffset:-40,
    
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
    
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
    
            touchenabled:"on",                      // Enable Swipe Function : on/off
    
            stopAtSlide:-1,                         // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
            stopAfterLoops:-1,                      // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
    
            hideCaptionAtLimit:0,                   // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
            hideAllCaptionAtLilmit:0,               // Hide all The Captions if Width of Browser is less then this value
            hideSliderAtLimit:0,                    // Hide the whole slider, and stop also functions if Width of Browser is less than this value
    
            fullWidth:"on",
    
            shadow:0                                //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)
        }); 
    });
    </script>
    <!-- Revolution Slider Ends -->
    
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
     <?php wp_footer(); ?> 
</body>
</html>