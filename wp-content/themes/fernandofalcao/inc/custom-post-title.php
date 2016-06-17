<?php

// PEDIDO
// ======================================================================
add_filter ( 'title_save_pre', 'custom_post_title_pedido' );
function custom_post_title_pedido( $title ) {
    global $post;

    if ( isset( $post->ID ) ) :
        if ( empty( $_POST['post_title'] ) && 'pedido' == get_post_type( $post->ID ) )
            $title = 'Pedido '. $post->ID;
    endif;

    return $title;
}
