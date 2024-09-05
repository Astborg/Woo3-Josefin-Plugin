<?php
/*
Plugin Name: Josefin plugin
Description: My own plugin
Author: Josefin
Version: 1.0.0
*/

function create_godispase_post_type() {
    register_post_type('godispase',
        array(
            'labels' => array(
                'name' => __('Godispåsar'),
                'singular_name' => __('Godispåse')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor'),
        )
    );
}

add_action('init', 'create_godispase_post_type');


