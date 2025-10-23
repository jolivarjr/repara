<?php

/**
 * Register Custom Post Type
 */

class MJRegisterCustomPostType
{
    private string $type_name = '';
    private string $singular_name = '';
    private string $plural_name = '';
    private string $gen = 'o';
    private array $args = array();
    private array $labels = array();

    function __construct($type_name, $singular_name, $gen = 'o', $args = array(), $labels = array(), $plural_name = '')
    {
        $this->type_name = $type_name;
        $this->singular_name = $singular_name;
        $this->plural_name = $plural_name;
        $this->gen = ($gen === 'o' || $gen === 'a') ? $gen : 'o';
        $this->args = $args;
        $this->labels = $labels;

        add_action('init', array($this, 'register_post_type'));
    }

    function register_post_type()
    {
        $gen_letra = $this->gen;
        $plural_name_final = $this->plural_name ?: $this->singular_name . 's';

        $labels = array(
            'name' => $plural_name_final,
            'singular_name' => $this->singular_name,
            'menu_name' => $plural_name_final,
            'add_new' => 'Adicionar nov' . $gen_letra,
            'add_new_item' => 'Adicionar nov' . $gen_letra . ' ' . strtolower($this->singular_name),
            'new_item' => 'Nov' . $gen_letra . ' ' . strtolower($this->singular_name),
            'edit_item' => 'Editar ' . strtolower($this->singular_name),
            'view_item' => 'Visualizar ' . strtolower($this->singular_name),
            'all_items' => ($this->gen === 'o' ? 'Todos os' : 'Todas as') . ' ' . $plural_name_final,
            'search_items' => 'Pesquisar ' . $plural_name_final,
            'not_found' => 'Nenhum' . ($this->gen === 'o' ? '' : 'a') . ' ' . strtolower($this->singular_name) . ' encontrad' . ($this->gen === 'o' ? 'o' : 'a'),
            'not_found_in_trash' => 'Nenhum' . ($this->gen === 'o' ? '' : 'a') . ' ' . strtolower($this->singular_name) . ' encontrado na lixeira',
            'featured_image' => 'Imagem destacada',
            'set_featured_image' => 'Escolher como imagem destacada',
            'remove_featured_image' => 'Remover imagem destacada',
            'use_featured_image' => 'Usar como imagem destacada'
        );

        $labels = array_merge($this->labels, $labels);

        $default_args = array(
            'labels' => $labels,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'query_var' => true,
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => null,
            'supports' => array('title', 'editor', 'thumbnail')
        );

        $args = array_merge($default_args, $this->args);
        register_post_type($this->type_name, $args);
    }
}

//exemplo de como utilizar
// $varteste = new MJRegisterCustomPostType('slider', 'Slider');
// $varteste = new MJRegisterCustomPostType('curso', 'Curso');
// $varteste = new MJRegisterCustomPostType('banner', 'Banner');
// $varteste = new MJRegisterCustomPostType('produto', 'Produto');
