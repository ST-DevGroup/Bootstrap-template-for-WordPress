<?php
/**
 * Template Name: Home Page
 * Description: 
 *
 */

get_header();

// Hero Template Section
get_template_part('templates-part/section', 'hero');

// Services Template Section
get_template_part('templates-part/section', 'services');

// Portfolio Template Section
get_template_part('templates-part/section', 'portfolio');

// About Template Section
get_template_part('templates-part/section', 'about');

// Team Template Section
get_template_part('templates-part/section', 'team');

// Clien Slider Template Section
get_template_part('templates-part/section', 'client-slider');

// Contact Template Section
get_template_part('templates-part/section', 'contact-us');

get_footer();