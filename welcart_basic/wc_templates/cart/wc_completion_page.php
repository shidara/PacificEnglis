<?php
/**
 * Completion Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header();
?>

	<div id="primary" class="site-content">
		<div id="content" class="cart-page" role="main">

		<?php
		if ( have_posts() ) :
			usces_remove_filter();
			?>

			<article class="post" id="wc_<?php usces_page_name(); ?>">

				<h1 class="cart_page_title"><?php esc_html_e( 'Completion', 'usces' ); ?></h1>

				<div id="cart_completion">

					<h3><?php esc_html_e( 'It has been sent succesfully.', 'usces' ); ?></h3>

					<div class="header_explanation">
						<p>
							<?php esc_html_e( 'Thank you for shopping.', 'usces' ); ?><br />
							<?php esc_html_e( "If you have any questions, please contact us by 'Contact'.", 'usces' ); ?>
						</p>
						<?php do_action( 'usces_action_cartcompletion_page_header', $usces_entries, $usces_carts ); ?>
					</div><!-- .header_explanation -->

					<?php if ( defined( 'WCEX_DLSELLER' ) ) : ?>
						<?php dlseller_completion_info( $usces_carts ); ?>
					<?php endif; ?>

					<?php usces_completion_settlement(); ?>

					<?php do_action( 'usces_action_cartcompletion_page_body', $usces_entries, $usces_carts ); ?>

					<div class="footer_explanation">
						<?php do_action( 'usces_action_cartcompletion_page_footer', $usces_entries, $usces_carts ); ?>
					</div><!-- .footer_explanation -->

					<div class="send">
						<a href="<?php echo esc_url_raw( home_url() ); ?>" class="back_to_top_button">
							<?php esc_html_e( 'Back to the top page.', 'usces' ); ?>
						</a>
					</div><!-- .send -->
					<?php echo apply_filters( 'usces_filter_conversion_tracking', null, $usces_entries, $usces_carts ); ?>

				</div><!-- #cart_completion -->

			</article><!-- .post -->

		<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
