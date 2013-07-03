<!doctype html>
<html>
<head>

<title><?php bloginfo("title")?></title>

<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri();?>/stylesheets/styles.css" media="screen, projection" rel="stylesheet" type="text/css" />
<!-- <link href="<?php echo get_template_directory_uri();?>/stylesheets/responsiveslides.css" media="screen, projection" rel="stylesheet" type="text/css" /> -->

</head>
<body>

  <div id="viewport">
    <header id="header" role="header">
      <h1>Bailarte</h1>  
    </header>
    <nav id="navigation" role="navigation">
      <?php wp_nav_menu( array(
  		'menu' => 'header-menu'
      ) ); ?> 
    </nav>
    <div id='breadcrumbs'><?php if(function_exists('wpshore_breadcrumbs')) { 
    	echo wpshore_breadcrumbs( array(
    		'echo' => false,
    		'delimiter' => '<i class="icon-angle-double-right"></i>'
    		) ); 
    } ?></div>