<?php
/**
 * 
 * single template
 */
?>
<?php get_header(); ?>




<main class="site-content" role="main">

        <?php if (have_posts()) : ?>
     
    <div class="section-inner">

            <?php while( have_posts()):
             the_post(); ?>

        <article class="blog-entry content-block">
            <header class="blog-entry__header">
                <div class="blog-entry__header__category">
                   <?php the_category( ',' ); ?>
                </div>
                <h1 class="blog-entry__header__title"><?php the_title() ?> </h1>
                <time datetime=""><?php the_time( 'f,j,Y' ) ?></time>
            </header>

            <?php

            tema_ied_post_thumbnail('large');
            
            the_content();
            ?>

        </article> <!-- /blog-entry -->
                <!--
        <div class="tags-widget">
            <ul>
                <li>
                    <a href="#">Web Design</a>
                </li>

                <li>
                    <a href="#" rel="tag">VFX</a>
                </li>

                <li>
                    <a href="#">Sound</a>
                </li>
            </ul>
        </div>
-->
    

    <?php endwhile ?>
</div>
 <?php endif ?>
</main>

<?php
get_footer();
?>