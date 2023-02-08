<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo( 'name','description' ); ?></title>
  <?php wp_head() ?>
</head>

<body class="body">
<div class="overlay"></div>
    <header class="header">
        <div class="header-inner">
                <a href="/" class="header__logo">
                    <?php
                        $header_logo = get_theme_mod('header_logo');
                        $img = wp_get_attachment_image_src($header_logo, 'full');
                            if ($img) {
                    ?>
                    <img src="<?php echo $img[0]; ?>" alt="">
                    <?php }else {
                        echo bloginfo('name'); 
                    } ?>
                </a>   
                <?php 
                    if( has_nav_menu( 'head_menu' )) {
                    wp_nav_menu( array(
                        'theme_location' => 'head_menu',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>'
                        //'depth' => 2,
                        //'walker' => new Main_walker_menu()
                    ));
                    }
                ?>   
            <button id="burger" class="burger"><svg width="40" height="29" viewBox="0 0 29 14" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="19" height="2" rx="1" fill="#414141"/>
<rect y="6" width="29" height="2" rx="1" fill="#414141"/>
<rect y="12" width="23" height="2" rx="1" fill="#414141"/>
</svg>
</button>
        </div>
                
          
  </header>

  <main class="main-content">
