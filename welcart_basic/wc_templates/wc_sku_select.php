<?php
/**
 * Product Page Template
 * For WCEX SKU Select
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_header();
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php
		if ( have_posts() ) :
			the_post();
			?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<header class="item-header">
					<h1 class="item_page_title"><?php the_title(); ?></h1>
				</header><!-- .item-header -->

				<div class="storycontent">

					<?php
					usces_remove_filter();
					usces_the_item();
					usces_have_skus();
					?>

					<div id="itempage">

						<div id="img-box">
							<div class="itemimg">
								<a href="<?php usces_the_itemImageURL( 0 ); ?>" <?php echo apply_filters( 'usces_itemimg_anchor_rel', null ); ?>>
									<?php usces_the_itemImage( 0, 335, 335, $post ); ?>
								</a>
								<?php do_action( 'usces_theme_favorite_icon' ); ?>
							</div>
						<?php
						$image_ids = usces_get_itemSubImageNums();
						if ( ! empty( $image_ids ) ) :
							?>
							<div class="itemsubimg">
							<?php foreach ( $image_ids as $image_id ) : ?>
								<a href="<?php usces_the_itemImageURL( $image_id ); ?>" <?php echo apply_filters( 'usces_itemimg_anchor_rel', null ); ?>>
									<?php usces_the_itemImage( $image_id, 135, 135, $post ); ?>
								</a>
							<?php endforeach; ?>
							</div>
							<?php
						endif;
						?>
						</div><!-- #img-box -->

						<div class="detail-box">
							<h2 class="item-name"><?php usces_the_itemName(); ?></h2>
							<div class="itemcode">(<?php usces_the_itemCode(); ?>)</div>
							<?php wel_campaign_message(); ?>
							<div class="item-description">
								<?php the_content(); ?>
							</div>

						<?php if ( 'continue' === wel_get_item_chargingtype() ) : ?>
							<div class="field">
								<table class="dlseller">
									<tr>
										<th><?php esc_html_e( 'First Withdrawal Date', 'dlseller' ); ?></th>
										<td><?php echo esc_html( dlseller_first_charging( $post->ID ) ); ?></td>
									</tr>
								<?php if ( 0 < (int) $usces_item['dlseller_interval'] ) : ?>
									<tr>
										<th><?php esc_html_e( 'Contract Period', 'dlseller' ); ?></th>
										<td><?php echo esc_html( $usces_item['dlseller_interval'] ); ?><?php esc_html_e( 'month (Automatic Updates)', 'welcart_basic' ); ?></td>
									</tr>
								<?php endif; ?>
								</table>
							</div>
						<?php endif; ?>
						</div><!-- .detail-box -->

						<div class="item-info">
							<?php
							$item_custom = usces_get_item_custom( $post->ID, 'list', 'return' );
							if ( $item_custom ) :
								echo wp_kses_post( $item_custom );
							endif;
							?>

							<form action="<?php echo esc_url( USCES_CART_URL ); ?>" method="post">
								<div class="skuform" id="skuform">

									<?php wcex_sku_select_form(); ?>

								<?php if ( usces_is_options() ) : ?>
									<dl class="item-option">
									<?php while ( usces_have_options() ) : ?>
										<dt><?php usces_the_itemOptName(); ?></dt>
										<dd><?php usces_the_itemOption( usces_getItemOptName(), '' ); ?></dd>
									<?php endwhile; ?>
									</dl>
								<?php endif; ?>

									<?php wcex_sku_select_the_itemGpExp(); ?>

									<div class="field">
										<div class="zaikostatus"><?php esc_html_e( 'stock status', 'usces' ); ?> : <span class="ss_stockstatus"><?php usces_the_itemZaikoStatus(); ?></span></div>

									<?php if ( 'continue' === wel_get_item_chargingtype() ) : ?>
										<div class="frequency"><span class="field_frequency"><?php dlseller_frequency_name( $post->ID, 'amount' ); ?></span></div>
									<?php endif; ?>

										<div class="field_price">
										<?php if ( usces_the_itemCprice( 'return' ) > 0 ) : ?>
											<span class="field_cprice ss_cprice"><?php usces_the_itemCpriceCr(); ?></span>
										<?php endif; ?>
											<span class="sell_price ss_price"><?php usces_the_itemPriceCr(); ?></span><?php usces_guid_tax(); ?>
										</div>
										<?php wcex_sku_select_crform_the_itemPriceCr_taxincluded(); ?>
									</div>

									<div id="checkout_box">
										<div class="itemsoldout"><?php echo apply_filters( 'usces_filters_single_sku_zaiko_message', __( 'At present we cannot deal with this product.', 'welcart_basic' ) ); ?></div>
										<div class="c-box">
											<span class="quantity"><?php esc_html_e( 'Quantity', 'usces' ); ?><?php usces_the_itemQuant(); ?></span><span class="unit"><?php usces_the_itemSkuUnit(); ?></span>
											<span class="cart-button"><?php usces_the_itemSkuButton( '&#xf07a;&nbsp;&nbsp;' . __( 'Add to Shopping Cart', 'usces' ), 0 ); ?></span>
										</div>
									</div>
									<div class="error_message"><?php usces_singleitem_error_message( $post->ID, usces_the_itemSku( 'return' ) ); ?></div>
									<div class="wcss_loading"></div>

								</div><!-- .skuform -->

								<?php do_action( 'usces_action_single_item_inform' ); ?>
							</form>

							<?php do_action( 'usces_action_single_item_outform' ); ?>

						</div><!-- .item-info -->

						<?php usces_assistance_item( $post->ID, __( 'An article concerned', 'usces' ) ); ?>

					</div><!-- #itemspage -->
				</div><!-- .storycontent -->
			</article>

		<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
