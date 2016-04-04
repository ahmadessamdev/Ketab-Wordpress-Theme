<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( is_rtl() ): ?>
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<?php else: ?>
		<link href='https://fonts.googleapis.com/css?family=IM+Fell+English:400italic' rel='stylesheet' type='text/css'>
	<?php endif; ?>
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div id="site-frame">
    <div id="site" class="container">
        <header id="header">
	    <div id="header-left-col">
			<h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h3 id="tag-line"><?php bloginfo( 'description' ); ?></h3>
		</div>
        <div id="header-right-col">
            <form id="search-form">
				<fieldset id="search-set">
					<input name="search-string"  type="text" id="search-input" placeholder="<?php _e( 'Search' ) ?>..." />
					<button id="search-btn"></button>
				</fieldset>
			</form>
        </div>
        </header>
