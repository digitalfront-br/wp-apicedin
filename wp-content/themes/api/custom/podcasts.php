<?php
add_action('init', 'cc_Podcast');
function cc_Podcast()
{
    // variaveis locais para customização do conteúdo
    $singleContent = 'Podcast';
    $pluralContent = 'Podcasts';
    $descricao = 'Um novo conteudo do tipo ' . $singleContent . ' para ser utlizado.';

    // cria os paramentros de um tipo de conteúdo personalizado
    register_post_type(strtolower($singleContent), array(
        'label'       =>  $singleContent,
        'has_archive' =>  false,
        'public'      =>  true,
        'rewrite'     =>  true,
        'labels'      =>  array(
            'name'     =>   $singleContent,
            'add_new'  =>   'Adicionar ' . strtolower($singleContent),
            'edit_new' =>   'Editar ' . strtolower($singleContent),
            'new_item' =>   'Novo ' . strtolower($singleContent),
            'view_item' =>   'Ver ' . strtolower($singleContent),
            'all_items' =>  'Todos ' . strtolower($pluralContent),
            'view_items'      =>  'Ver ' . strtolower($pluralContent),
            'singular_name'   => $singleContent,
            'featured_image'  =>  'Imagem de capa',
            'remove_featured_image' => 'Remover imagem',
        ),
        'description'  => $descricao,
        'supports'  => array(
            'title',
            'editor',
            'revisions',
            'excerpt',
            'page-attributes',
            'thumbnail',
            'custom_fields',
            'post-formats'
        ),
        'query_var' => true,
        'show_ui'   => true,
        'rest_base' => strtolower($pluralContent),
        // use o link para escolher qual icone usar https://developer.wordpress.org/resource/dashicons
        'menu_icon' => 'dashicons-microphone',
        'show_in_rest' => true,
    ));
}
