       <header>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="wrapper">
            <div class="header_con">
                <div class="main_logo">
                    <a href="<?php echo get_home_url(); ?>""><img src="<?php bloginfo('template_url');?>/images/main-logo.png" alt="logo"></a>
                </div>
                <div class="header_right">
                    <div class="header_info">
                        <div id="reqSuggestion">
                            <h2>For more suggestions, <span @click="toggleShowRequest" class="formModal">contact us.</span> <mark>123-456-7890</mark></h2>
                            
                            <div class="modalbg">
                                <div class="form-container1" v-show="showRequest">
                                    <span class="close-modal">×</span>
                                    <h2>Request a Suggestion</h2>
                                    <form>
                                        <div class="form-row-main">
                                            <div class="form-col">
                                                <label for="fullname">Full Name:</label>
                                                <input type="text" id="fullname" name="fullname" required>
                                            </div>
                                            <div class="form-col">
                                                <label for="age">Age:</label>
                                                <input type="number" id="age" name="age" required min="1">
                                            </div>
                                        </div>
                                        <label for="address">Address:</label>
                                        <input type="text" id="address" name="address" required>
                                        <label for="comment">Comment:</label>
                                        <textarea id="comment" name="comment" required></textarea>
                                        <button type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>

                            
                        </div>

                    </div>
                    <div class="social_media">
                        <ul>
                            <li><a href="https://twitter.com/" target="_blank"> <figure><img src="<?php bloginfo('template_url');?>/images/twitter-icon.png" alt="twitter"></figure> </a></li>
                            <li><a href="https://www.facebook.com/" target="_blank"> <figure><img src="<?php bloginfo('template_url');?>/images/fb-icon.png" alt="facebook"></figure> </a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </header>