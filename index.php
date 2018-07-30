<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage Skeleton
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- teste -->
<!-- teste 2 -->
<main id="main" class="SiteMain Site-main" role="main">
	<?php  get_template_part('template-parts/plugins/plugin','lightbox'); ?>
	<?php get_template_part('template-parts/page/intro','page'); ?>
	<?php get_template_part('template-parts/franquia/franquia','sobre'); ?>
</main><!-- #main -->



<?php get_footer();
