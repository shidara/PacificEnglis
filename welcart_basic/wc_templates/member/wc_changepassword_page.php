<?php
/**
 * Change Password Page
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

				<h1 class="member_page_title"><?php esc_html_e( 'Change password', 'usces' ); ?></h1>

				<div id="memberpages">

					<div class="header_explanation">
						<?php do_action( 'usces_action_changepass_page_header' ); ?>
					</div><!-- .header_explanation -->

					<div class="error_message"><?php usces_error_message(); ?></div>

					<div class="loginbox">
						<form name="loginform" id="loginform" action="<?php usces_url( 'member' ); ?>" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
							<p>
								<label><?php esc_html_e( 'password', 'usces' ); ?><br />
								<input type="password" name="loginpass1" id="loginpass1" class="loginpass" value="" autocomplete="new-password" size="20" /></label>
							</p>
							<?php wel_password_policy_message(); ?>
							<p>
								<label><?php esc_html_e( 'Password (confirm)', 'usces' ); ?><br />
								<input type="password" name="loginpass2" id="loginpass2" class="loginpass" value="" autocomplete="new-password" size="20" /></label>
							</p>
							<p class="submit">
								<input type="submit" name="changepassword" id="member_login" value="<?php esc_attr_e( 'Register', 'usces' ); ?>" />
							</p>
							<?php do_action( 'usces_action_changepass_page_inform' ); ?>
						</form>
					</div><!-- .loginbox -->

					<div class="footer_explanation">
						<?php do_action( 'usces_action_changepass_page_footer' ); ?>
					</div><!-- .footer_explanation -->

				</div><!-- #memberpages -->

				<script type="text/javascript">
					try {
						document.getElementById('loginpass1').focus();
					}
					catch(e) {}
				</script>

			</article><!-- .post -->

		<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
