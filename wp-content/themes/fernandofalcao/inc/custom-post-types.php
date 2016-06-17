<?php

// PRODUTO
// ======================================================================
add_action( 'init', 'create_post_type_produto' );
function create_post_type_produto() {
  register_post_type( 'produto',
    array(
      'labels' => array(
        'name' => __( 'Produtos' ),
        'singular_name' => __( 'Produto' ),
        'add_new' => __('Adicionar Novo'),
        'add_new_item' => __('Adicionar Novo Produto'),
        'edit_item' => __('Editar Produto'),
        'new_item' => __('Novo Produto'),
        'all_items' => __('Todos os Produtos'),
        'view_item' => __('Ver Produto'),
        'search_items' => __('Procurar Produtos'),
        'not_found' =>  __('Nenhum Produto foi Encontrado'),
        'not_found_in_trash' => __('Nenhum Produto foi Encontrado na Lixeira'),
        'parent_item_colon' => '',
        'menu_name' => __('Produtos')
        ),
      'public' => true,
      'publicly_queryable' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'supports' => array('title')
      )
    );
}

// CLIENTE
// ======================================================================
add_action( 'init', 'create_post_type_cliente' );
function create_post_type_cliente() {
  register_post_type( 'cliente',
    array(
      'labels' => array(
        'name' => __( 'Clientes' ),
        'singular_name' => __( 'Cliente' ),
        'add_new' => __('Adicionar Novo'),
        'add_new_item' => __('Adicionar Novo Cliente'),
        'edit_item' => __('Editar Cliente'),
        'new_item' => __('Novo Cliente'),
        'all_items' => __('Todos os Clientes'),
        'view_item' => __('Ver Cliente'),
        'search_items' => __('Procurar Clientes'),
        'not_found' =>  __('Nenhum Cliente foi Encontrado'),
        'not_found_in_trash' => __('Nenhum Cliente foi Encontrado na Lixeira'),
        'parent_item_colon' => '',
        'menu_name' => __('Clientes')
        ),
      'public' => true,
      'publicly_queryable' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'supports' => array('title')
      )
    );
}

// PEDIDO
// ======================================================================
add_action( 'init', 'create_post_type_pedido' );
function create_post_type_pedido() {
  register_post_type( 'pedido',
    array(
      'labels' => array(
        'name' => __( 'Pedidos' ),
        'singular_name' => __( 'Pedido' ),
        'add_new' => __('Adicionar Novo'),
        'add_new_item' => __('Adicionar Novo Pedido'),
        'edit_item' => __('Editar Pedido'),
        'new_item' => __('Novo Pedido'),
        'all_items' => __('Todos os Pedidos'),
        'view_item' => __('Ver Pedido'),
        'search_items' => __('Procurar Pedidos'),
        'not_found' =>  __('Nenhum Pedido foi Encontrado'),
        'not_found_in_trash' => __('Nenhum Pedido foi Encontrado na Lixeira'),
        'parent_item_colon' => '',
        'menu_name' => __('Pedidos')
        ),
      'public' => true,
      'publicly_queryable' => false,
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'has_archive' => true,
      'hierarchical' => false,
      'menu_position' => 5,
      'supports' => array(null)
      )
    );
}
