<?php
/**
 * 
 * index.
 * 
 * @since 1.0
 */
?>



<?php get_header(); ?>

<main class="site-content" role="main">

    <div class="section-inner">
        <?php

        if(is_front_page() ){

            include( TEMPLATEPATH. '/featured-post.php');
        }
        ?>
        <ul class="post-list">
            <?php 
            while( have_posts() ) :
                        the_post();
                        if ( $post->ID !== $featured_id ) : 
            ?>
            <li>
                <div class="post-thumb">
                    <?php the_post_thumbnail( 'thumbnail' );  ?>
                </div>

                <div class="post-entry">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php 
                    the_time( 'F, j, Y', '<time>', '</time>' );
                    ?>
                    
                </div >
            </li>
                <?php
               endif; endwhile;
                ?>
            

        </ul>

        <div class="pagination">
            <a class="prev page-numbers" href="#">&laquo;</a>
            <a class="page-numbers" href="#">1</a>
            <a class="page-numbers" href="#">2</a>
            <span aria-current="page" class="page-numbers current">3</span>
            <a class="next page-numbers" href="http://localhost:8888/wordpress/page/3/">»</a>
        </div>

    </div>

</main>
<?php get_footer(); 

?>
