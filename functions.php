  
<?php
/* Makes it possible to apply a thumbnail */
add_theme_support('post-thumbnails');
/* Adds the options to customize menus */
add_theme_support('menus');
/* Adds the options to customize widgets */
add_theme_support('widgets');

/* Links to CSS and JS */
add_action('wp_enqueue_scripts', 'css_and_js');

function css_and_js(){
    /* Styling que */
    wp_enqueue_style('temastil', get_template_directory_uri(). '/style.css');
    wp_enqueue_style('temastil3', get_template_directory_uri(). '/font-awesome.css');
    wp_enqueue_style('temastil2', get_template_directory_uri(). '/bootstrap.css');
    wp_enqueue_style('temastil4', get_template_directory_uri(). '/new-style.css');
    /*  JS que */
    wp_enqueue_script('temascript1', get_template_directory_uri(). '/jquery.js', [], false, true);
    wp_enqueue_script('temascript2', get_template_directory_uri(). '/script.js', [], false, true);

}
/* Runs the show_my_menus at a specific hook */
add_action('after_setup_theme', 'show_my_menus');

/* Function to place menus */
function show_my_menus(){
    register_nav_menu('mainmenu', 'Huvudmeny');
    register_nav_menu('footermenu', 'Sociala medier');
    register_nav_menu('sidemenu', 'Sidomeny');
    register_nav_menu('bloggsidesidor', 'Blogg sidomeny sidor');
    register_nav_menu('bloggsidearkiv', 'Blogg sidomeny arkiv');
    register_nav_menu('bloggsidekategorier', 'Blogg sidomeny kategorier');
}

/* Creates widget spaces */
register_sidebar(
    [
        'name' => 'Footer till vänster',
        'Description' => 'placering footer',
        'id' => 'footerleft',
        'before_widget' => ' '
    ]
);
register_sidebar(
    [
        'name' => 'Footer i mitten',
        'Description' => 'placering2 footer',
        'id' => 'footermiddle',
        'before_widget' => ' '
    ]
);



/* From 55 words to 1000 words to get the whole paragraphs etc*/

function wpdocs_custom_excerpt_length( $length ) {
    return 1000;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );





?>