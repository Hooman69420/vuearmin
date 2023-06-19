    <nav class="pc_only">
        <div class="page_nav">
            <div class="wrapper">
                <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
            </div>
        </div>
    </nav>



<div class="nav_cont sp_only">
    <nav class="hamburger-menu">
        <div class="page_nav">
            <div class="topnav" id="myTopnav">
                <?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </nav>
</div> 

