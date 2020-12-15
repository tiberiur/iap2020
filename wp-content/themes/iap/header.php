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

                <?php if (has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>

                <?php if(has_nav_menu( 'primary' )):?>
                <input type="checkbox" id="menu-open" class="menu-input" />
                <label for="menu-open" class="menu-trigger">
                    <svg width="30" height="30" viewBox="0 -53 384 384" xmlns="http://www.w3.org/2000/svg"><path d="M368 154.668H16c-8.832 0-16-7.168-16-16s7.168-16 16-16h352c8.832 0 16 7.168 16 16s-7.168 16-16 16zm0 0M368 32H16C7.168 32 0 24.832 0 16S7.168 0 16 0h352c8.832 0 16 7.168 16 16s-7.168 16-16 16zm0 0M368 277.332H16c-8.832 0-16-7.168-16-16s7.168-16 16-16h352c8.832 0 16 7.168 16 16s-7.168 16-16 16zm0 0"/></svg>
                </label>
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