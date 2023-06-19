  <footer>
        <div class="footer_top">
            <div class="wrapper">
                <div class="footer_top_main">
                    <div class="ftr_left">
                        <div class="contact_info">
                            <h2>Contact Details</h2>
                            <p>If you have more inquiries about our services, please do not hesitate to get in touch. </p>
                        </div>
                        <div class="social_media1">
                            <ul>
                                <li><a href="https://twitter.com/" target="_blank">
                                        <figure><img src="<?php bloginfo('template_url');?>/images/twitter-icon.png" alt="twitter"></figure>
                                    </a></li>
                                <li><a href="https://www.facebook.com/" target="_blank">
                                        <figure><img src="<?php bloginfo('template_url');?>/images/fb-icon.png" alt="facebook"></figure>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
    
                    <div class="ftr_right">
    
                        <div class="footer_logo">
                            <a href="">
                                <figure><img src="<?php bloginfo('template_url');?>/images/main-logo.png" alt="logo"></figure>
                            </a>
                        </div>

                    </div>
    
                    
    
    
                </div>

                <div class="footer_nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'secondary') ); ?>
                </div>
            </div>
        </div>
    
        <div class="footer_btm">
            <div class="wrapper">
                <div class="footer_btm_main">
    
                    <div class="copyright">
                        <q>&copy; Copyright <span id="current-year"><script>document.write( new Date().getFullYear() );</script></span></q>
    
                        <!-- If With Logo -->
                        <span class="footer_comp">
                            Designed by Armin</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>