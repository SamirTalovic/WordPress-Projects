<!DOCTYPE HTML>
<html>
	<head>
		<title>Project MMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
        <?php wp_head() ?>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Project <span>for MMS</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="page.html">Sample Page</a></li>
				</ul>
			</nav>
            <?php
            wp_nav_menu(
                array('theme_location' => 'head_menu',
                'container' => 'nav',
                'container_id' => 'menu',
                'menu_class' => 'links'
                )
            );
            ?>