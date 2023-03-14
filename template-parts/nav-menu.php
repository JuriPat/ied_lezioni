




<?php
        if (function_exists('wp_nav_menu') && has_nav_menu( 'primary-navigation' )){
           
           wp_nav_menu(array(
            'container'       => 'nav',
            'container_class' => 'site-header__nav',
            'theme_local'     => 'primary-navigation',
        ) );
    
        }
       ?>