<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Compassrome
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */
?>
<?php get_header(); ?>

<div <?php hybrid_attr( 'site-inner' ); ?>>

	<?php tha_content_before(); ?>

	<main <?php hybrid_attr( 'content' ); ?>>

		<?php tha_content_top(); ?>

		<?php hybrid_get_menu( 'breadcrumbs' ); ?>

		<?php if ( ! is_front_page() && ! is_home() && ! is_404() ) : ?>

			<?php get_template_part( 'content/parts/loop-meta' ); ?>

		<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php tha_entry_before(); ?>

				<?php hybrid_get_content_template(); ?>

				<?php tha_entry_after(); ?>

			<?php endwhile; ?>

			<?php flagship_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content/error' ); ?>

		<?php endif; ?>

		<?php tha_content_bottom(); ?>

	</main><!-- #content -->

	<?php tha_content_after(); ?>

	<?php hybrid_get_sidebar( 'primary' ); ?>

</div><!-- #site-inner -->

<?php
get_footer();
