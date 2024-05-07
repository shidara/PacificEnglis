<?php
/**
 * Template Name: Contact
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/contact/";


  get_template_part('header-cart');
?>
<!-- コンテンツ -->
<main class="pageContents ContactFormPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>お問い合わせ</li>
    </ul>
  </section>

  <section class="ContactForm">
    <div class="ContactForm__title">
      <h3 class="ContactForm__titleText">CONTACT</h3>
      <p class="ContactForm__subTitle ContactForm__subTitle--beforeIcon">お問い合わせ</p>
    </div>

    <div class="ContactForm__contents">
      <h4 class="ContactForm__contentsTitle">フォームでのお問い合わせ</h4>
      <p class="ContactForm__contentsSubTitle">※必須項目は必ずご入力ください。</p>

      <?php the_content(); ?>
    </div>

    <hr class="ContactForm__divider" />

    <h4 class="ContactForm__contentsTitle">お電話でのお問い合わせ</h4>
    <p class="ContactForm__contentsSubTitle"><img src="<?php echo $imgUri;?>/tel.webp" alt="" loading="lazy" class="ContactForm__contentsTelIcon" />0565-41-7825<span class="ContactForm__contentsSubTitleSmallText">受付時間： 8:00～18:00(平日のみ)</span></p>
  </section>
</main>
<?php get_template_part('footer-cart');?>

<script>
  jQuery(function() {
    //規約チェックボックスの文言変更
    jQuery('.js-agree .mwform-checkbox-field-text').html('<a href="<?php echo esc_url(home_url('privacy-policy/')); ?>" target="_blank" rel="noopener noreferrer">個人情報の取り扱い</a>に同意する。');
  });
</script>