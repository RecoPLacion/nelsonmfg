<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TEMPLATENAME
 */

get_header();
$blog_cat_slug = get_queried_object()->slug;
$blog_cat_name = get_queried_object()->name;
?>




<?php
get_footer(); ?>