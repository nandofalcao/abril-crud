<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_cliente',
    'title' => 'Cliente',
    'fields' => array (
      array (
        'key' => 'field_5763786407970',
        'label' => 'Email',
        'name' => 'email',
        'type' => 'email',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ),
      array (
        'key' => 'field_5763788f07971',
        'label' => 'Telefone',
        'name' => 'telefone',
        'type' => 'text',
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'formatting' => 'html',
        'maxlength' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'cliente',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'custom_fields',
        4 => 'discussion',
        5 => 'comments',
        6 => 'revisions',
        7 => 'slug',
        8 => 'author',
        9 => 'format',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
        13 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_pedido',
    'title' => 'Pedido',
    'fields' => array (
      array (
        'key' => 'field_57637b3d79a51',
        'label' => 'Cliente',
        'name' => 'cliente',
        'type' => 'relationship',
        'return_format' => 'object',
        'post_type' => array (
          0 => 'cliente',
        ),
        'taxonomy' => array (
          0 => 'all',
        ),
        'filters' => array (
          0 => 'search',
        ),
        'result_elements' => array (
          0 => 'post_title',
        ),
        'max' => 1,
      ),
      array (
        'key' => 'field_57637b7a79a52',
        'label' => 'Produto',
        'name' => 'produto',
        'type' => 'relationship',
        'return_format' => 'object',
        'post_type' => array (
          0 => 'produto',
        ),
        'taxonomy' => array (
          0 => 'all',
        ),
        'filters' => array (
          0 => 'search',
        ),
        'result_elements' => array (
          0 => 'post_title',
        ),
        'max' => '',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'pedido',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'the_content',
        2 => 'excerpt',
        3 => 'custom_fields',
        4 => 'discussion',
        5 => 'comments',
        6 => 'revisions',
        7 => 'slug',
        8 => 'author',
        9 => 'format',
        10 => 'featured_image',
        11 => 'categories',
        12 => 'tags',
        13 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
  register_field_group(array (
    'id' => 'acf_produto',
    'title' => 'Produto',
    'fields' => array (
      array (
        'key' => 'field_5763664cf4499',
        'label' => 'Preço',
        'name' => 'preco',
        'type' => 'number',
        'default_value' => 0,
        'placeholder' => '',
        'prepend' => 'R$',
        'append' => '',
        'min' => 0,
        'max' => '',
        'step' => '',
      ),
      array (
        'key' => 'field_576388ee4feb0',
        'label' => 'Descrição',
        'name' => 'descricao',
        'type' => 'textarea',
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => 255,
        'rows' => 2,
        'formatting' => 'br',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'produto',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'acf_after_title',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'permalink',
        1 => 'excerpt',
        2 => 'custom_fields',
        3 => 'discussion',
        4 => 'comments',
        5 => 'revisions',
        6 => 'slug',
        7 => 'author',
        8 => 'format',
        9 => 'featured_image',
        10 => 'categories',
        11 => 'tags',
        12 => 'send-trackbacks',
      ),
    ),
    'menu_order' => 0,
  ));
}
