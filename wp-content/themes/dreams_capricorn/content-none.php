<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<div class="container-xl">
<section class="no-results not-found py-md-5 py-3">
	<header class="page-header text-center">
		<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyfifteen' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content text-center">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="text-xl py-3 font-weight-light"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfifteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p class="text-xl py-3 font-weight-light"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfifteen' ); ?></p>
			<?php get_search_form(); ?> 

		<?php else : ?>

			<p class="text-xl py-3 font-weight-light"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfifteen' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
</div>