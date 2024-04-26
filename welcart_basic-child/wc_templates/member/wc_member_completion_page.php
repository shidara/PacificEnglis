<?php
/**
 * Member Completion Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>

<div class="NewMemberThanksPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>新規会員登録完了</li>
    </ul>
  </section>

  <section class="NewMemberThanks" role="main">
    <?php if ( have_posts() ) : usces_remove_filter(); ?>
      <div class="p_thanks_inner NewMemberThanks__inner">
        <h2 class="NewMemberThanks__title">会員登録ありがとうございました。</h2>
        <p>自動送信メールにて、登録完了メールを送信しております。<br />万が一メールが届かない場合は、大変お手数をおかけいたしますが、<br />0565-41-7825までお電話にてお問い合わせください。</p>

        <div class="NewMemberThanks__submit">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="NewMemberThanks__button">
          商品一覧を見る
          </a>
        </div>
      </div>
      <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>
      <?php endif; ?>
  </section>
<?php get_footer();?>
