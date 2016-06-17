<?php

add_filter( 'enter_title_here', 'change_default_placeholder_title' );
function change_default_placeholder_title( $title ){
    $screen = get_current_screen();
    if ( 'cliente' == $screen->post_type ){
        $title = 'Nome';
    }

    if ( 'produto' == $screen->post_type ){
        $title = 'Nome';
    }

    if ( 'pedido' == $screen->post_type ){
        $title = 'Nome';
    }

    return $title;
}
