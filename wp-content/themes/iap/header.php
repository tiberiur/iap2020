<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

        <header class="header">

            <div class="header-inner">

                <a href="/" class="header-logo">IAP2020</a>

                <?php if(has_nav_menu( 'primary' )):?>
                <nav class="header-nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                        )
                    ); ?>
                </nav>
                <?php endif; ?>

            </div>

        </header>