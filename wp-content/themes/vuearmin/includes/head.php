    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title><?php echo get_bloginfo('name');?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/media.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php if ( is_user_logged_in() ) { ?>
        <style>
        html{margin-top:32px;}
        @media only screen and (max-width : 1000px) {
        html{margin-top:32px;}

        }
        @media only screen and (max-width : 767px) {
        html{margin-top:46px;}
        }
        @media only screen and (max-width : 600px) {
        html #wpadminbar{top:-46px}
        }
        </style>
	<?php }?>

    </head> 