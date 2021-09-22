<?php
function mcl_supports() {
    add_theme_support('title-tag');
}

add_action('after_theme_support', 'mcl_supports');

