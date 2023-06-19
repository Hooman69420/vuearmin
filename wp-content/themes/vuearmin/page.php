<!DOCTYPE html>
<?php @session_start();
get_includes('head');
get_includes('header');
get_includes('nav');
?> 
<?php if ( is_front_page() ) { get_includes('banner'); } ?>
<!-- Main -->
<div id="nh_main_area">
	<div class="wrapper">
		<main>
			<div class="nh_breadcrumbs">
				<?php if(!is_front_page()) { ?>
					<?php if(function_exists('bcn_display'))
					{
					bcn_display();
					}?>
				<?php }?>
			</div>
			</main>
		<div class="clearfix"></div>
	</div>
</div>
<!-- End Main -->
<?php if ( is_front_page() ) { get_includes('bottom'); } ?>

<?php get_includes('footer');?>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://unpkg.com/vue@next"></script>
	<script src="<?php bloginfo('template_url');?>/js/vue.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.js"></script>

<?php wp_footer(); ?>
