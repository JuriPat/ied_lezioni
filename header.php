<?php 
/**
 * header
 * 
 * @since 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Cardo|Montserrat:400,700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

</head>

<body>
<header class="site-header" role="banner">
    <div class="header-inner section-inner">

        <div class="site-header__logo">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <?php echo bloginfo( 'name' ); ?>
            </a>
        </div>

        <?php
        get_template_part( 'template-parts/nav-menu' );
        ?>
    </div>
</header>