<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo get_bloginfo( 'name' ); ?></title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="<?php bloginfo('template_directory');?>/css/style.css" rel="stylesheet">
<!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 –>
<!–[if lt IE 9]-->
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<?php wp_head(); ?>
</head>

<body>

<div class="blog-header">
<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
</div>

<div>
	<?php 
		if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
	?>
</div>

<div class="header">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navigation-principale" role="navigation">
<?php wp_nav_menu( array( 'Open innovation' => 'menu-principal' ) ); ?>
</nav>
</div>
