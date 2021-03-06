<?php
    function university_files() { // this function loads all JS and CSS files
        wp_enqueue_script('main-university-js', get_theme_file_uri('./js/scripts-bundled.js'), NULL, microtime(), true);
        wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
    };

    add_action('wp_enqueue_scripts', 'university_files'); // first arg loads the CSS files, second is a callback we define

    function university_features() {
        register_nav_menu('header-menu', 'Header Menu');
        register_nav_menu('footer-menu-explore', 'Footer Explore Menu');
        register_nav_menu('footer-menu-learn', 'Footer Learn Menu');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'university_features');
?>