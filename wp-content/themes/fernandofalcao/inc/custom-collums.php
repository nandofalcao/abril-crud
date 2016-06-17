<?php

// PRODUTO
// ======================================================================
add_filter('manage_edit-produto_columns', 'add_new_produto_columns');
function add_new_produto_columns($produto_columns) {
  $new_columns['cb'] = '<input type="checkbox" />';
  $new_columns['id'] = __('ID');
  $new_columns['title'] = __('Nome');
  $new_columns['preco'] = __('Preço');
  $new_columns['descricao'] = __('Descrição');
  $new_columns['date'] = __('Data');

  return $new_columns;
}

add_action('manage_produto_posts_custom_column', 'manage_produto_columns', 10, 2);
function manage_produto_columns($column_name, $id) {
  global $wpdb;

  switch ($column_name) {
    case 'id':
      echo $id;
      break;

    case 'descricao':
      if(get_field('descricao'))
        echo get_field('descricao');
      break;

    case 'preco':
      if(get_field('preco'))
        echo 'R$ ' . number_format(get_field('preco'), 2, ',', '.');
      break;

    default:
      break;
  }
}

// CLIENTE
// ======================================================================
add_filter('manage_edit-cliente_columns', 'add_new_cliente_columns');
function add_new_cliente_columns($cliente_columns) {
  $new_columns['cb'] = '<input type="checkbox" />';
  $new_columns['id'] = __('ID');
  $new_columns['title'] = __('Nome');
  $new_columns['telefone'] = __('Telefone');
  $new_columns['email'] = __('Email');
  $new_columns['date'] = __('Data');

  return $new_columns;
}

add_action('manage_cliente_posts_custom_column', 'manage_cliente_columns', 10, 2);
function manage_cliente_columns($column_name, $id) {
  global $wpdb;

  switch ($column_name) {
    case 'id':
      echo $id;
      break;

    case 'telefone':
      if(get_field('telefone'))
        echo get_field('telefone');
      break;

    case 'email':
      if(get_field('email'))
        echo get_field('email');
      break;

    default:
      break;
  }
}

// PEDIDO
// ======================================================================
add_filter('manage_edit-pedido_columns', 'add_new_pedido_columns');
function add_new_pedido_columns($pedido_columns) {
  $new_columns['cb'] = '<input type="checkbox" />';
  $new_columns['title'] = __('Pedido');
  $new_columns['cliente'] = __('Cliente');
  $new_columns['produto'] = __('Produto');
  $new_columns['date'] = __('Data');

  return $new_columns;
}

add_action('manage_pedido_posts_custom_column', 'manage_pedido_columns', 10, 2);
function manage_pedido_columns($column_name, $id) {
  global $wpdb;

  switch ($column_name) {

    case 'cliente':
      if(get_field('cliente'))
        echo edit_post_link(get_field('cliente')[0]->post_title, null, null, get_field('cliente')[0]->ID);
      break;

    case 'produto':
      $produtos = get_field('produto');
      if($produtos)
        echo '<ul>';
        foreach ($produtos as $prod) {
            echo edit_post_link($prod->post_title, '<li>', '</li>', $prod->ID);
        }
        echo '</ul>';
      break;

    default:
      break;
  }
}
