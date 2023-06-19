<!DOCTYPE html>
<!--[if lt IE 8]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Page not Found</title>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/404.css">
		
	</head>
<body>
	<div class="protect-me">
	<div class="clearfix">
		<div class="container">
			<div class="eyes">
				<div class="eye"></div>
			</div>
			<div class="eyes">
				<div class="eye"></div>
			</div>
		</div>
		<div class = "for-searching">
			<div class="fourofour-logo">
				<a href="<?php echo get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/main-logo.png" alt="<?php echo get_bloginfo('name');?>" /></a>
			</div>
			<div id="fourevent" class="wrapper">
					<h3> Look like you're lost </h3>
					<p>the page you are looking for not avaible!</p>
					<p>You've been lost for <span id="counter">0</span> seconds</p>
					<a href="#" class="formModal1" @mouseover="toggleShowPrompt">Go to Home</a>

				<div class="modalbg">
					<div class="form-container1" v-show="showRequest">
						<h2>Are You Sure ?</h2>
						<a href="<?php echo get_home_url(); ?>">Yes</a>
						<span class="close-modal">No</span>
					</div>
				</div>

			</div>
		</div>
		</div>
	</div>
	<script type="text/javascript" src="https://unpkg.com/vue@next"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/vue.js"></script>

	<script>
    let seconds = 1; // Set the initial value to 1
    let counterElement = document.getElementById("counter");
    counterElement.textContent = seconds; // Update the counter immediately

    function incrementCounter() {
      seconds++;
      counterElement.textContent = seconds;
    }

    // Update the counter every second
    let intervalId = setInterval(incrementCounter, 1000);

    // Stop the counter when the page loses focus
    document.addEventListener("visibilitychange", function() {
      if (document.visibilityState === "hidden") {
        clearInterval(intervalId);
      } else {
        intervalId = setInterval(incrementCounter, 1000);
      }
    });
  </script>

</body>
</html>
