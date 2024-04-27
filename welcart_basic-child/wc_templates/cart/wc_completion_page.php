<?php
/**
 * Completion Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>

<div class="CompletionPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>注文完了</li>
    </ul>
  </section>

  <section class="CompletionModule cart-page" role="main">
    <?php if ( have_posts() ) : usces_remove_filter(); ?>
      <div class="p_thanks_inner">
        <h3>ご注文ありがとうございました。</h3>
        <p>自動送信メールにて、注文完了メールを送信しております。<br/>万が一メールが届かない場合は、大変お手数をおかけいたしますが、<br />0565-41-7825までお電話にてお問い合わせください。</p>

        <div class="CompletionPage__nextWrapper">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="CompletionPage__next">
            <span>他の商品を見る</span>
          </a>
        </div>
      </div>
      <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
      <?php endif; ?>
  </section>

</div>
<?php get_footer();?>
