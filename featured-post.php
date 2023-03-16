<?php 

/**
 * 
 * index.
 * 
 * @since 1.0
 */
        $args = array(
            'posts_per_page' => 1,
            );
            
            $featured_post = new WP_Query( $args );


            if($featured_post->have_posts()) {
                while( $featured_post->have_posts() ) {
                    $featured_post->the_post(); 
                    $featured_id = $post->ID; 
         
        ?>

        <article class="blog-entry content-block">
            <header class="blog-entry__header">
                <div class="blog-entry__header__category">
                    <?php the_category(); ?>
                </div>
                <a class="blog-entry__header__link" href="<?php the_permalink(); ?>">
                <h1 class="blog-entry__header__title"><?php the_title(); ?></h1> 
                </a>
                <time datetime=""><?php the_time( 'f,j,Y' ) ?></time>
            </header>
        </article>

        <?php }
               
        }
        ?>
