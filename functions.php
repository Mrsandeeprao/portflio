<?php
function my_portfolio_enqueue_styles() {
    wp_enqueue_style('my-portfolio-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_styles');
