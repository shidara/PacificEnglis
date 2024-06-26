<?php
/**
 * Autodelivery History Page Template
 * For WCEX Auto Delivery
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header();
?>

	<div id="primary" class="site-content">
		<div id="content" class="member-page" role="main">

		<?php
		if ( have_posts() ) :
			usces_remove_filter();
			?>

			<article class="post" id="wc_<?php usces_page_name(); ?>">

				<h1 class="member_page_title"><?php esc_html_e( 'Regular Purchase', 'autodelivery' ); ?></h1>

				<div id="memberpages">
					<div class="whitebox">
						<div id="memberinfo">

							<div class="header_explanation">
								<?php do_action( 'wcad_action_autodelivery_history_page_header' ); ?>
							</div><!-- .header_explanation -->

							<h3><?php esc_html_e( 'Regular purchase information', 'autodelivery' ); ?></h3>
							<div class="currency_code"><?php esc_html_e( 'Currency', 'usces' ); ?> : <?php usces_crcode(); ?></div>

							<div class="error_message"><?php usces_error_message(); ?></div>

							<form action="<?php usces_url( 'member' ); ?>#autodelivery" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
								<?php wel_autodelivery_history(); ?>
								<input name="member_regmode" type="hidden" value="editmemberform" />
								<input name="member_id" type="hidden" value="<?php usces_memberinfo( 'ID' ); ?>" />
								<div class="send">
									<input name="back" type="button" value="<?php esc_attr_e( 'Back to the member page.', 'autodelivery' ); ?>" onclick="location.href='<?php echo esc_url( USCES_MEMBER_URL ); ?>'" />
									<input name="top" type="button" value="<?php esc_attr_e( 'Back to the top page.', 'usces' ); ?>" onclick="location.href='<?php echo esc_url( home_url() ); ?>'" />
								</div>
								<?php do_action( 'wcad_action_autodelivery_history_page_inform' ); ?>
							</form>

							<div class="footer_explanation">
								<?php do_action( 'wcad_action_autodelivery_history_page_footer' ); ?>
							</div><!-- .footer_explanation -->

						</div><!-- .memberinfo -->
					</div><!-- .whitebox -->
				</div><!-- .memberpages -->
			</article><!-- .post -->

		<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
