<?php

function tema_ied_post_thumbnail( $size ) {

    if( is_single() ) { ?>
        <figure class="bleed">
            <?php the_post_thumbnail( $size ); ?>
            <figcaption><?php echo get_post_meta( get_the_ID(), 'didascalia_immagine', true ); ?></figcaption>
        </figure>
        
        <?php
       } else{
            the_post_thumbnail( $size );
        }
    }
