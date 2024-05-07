<?php
/**
 * Template Name: Contact-Complete
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
      <li>お問い合わせ完了</li>
    </ul>
  </section>

  <section class="ContactForm ContactFormComplete">
    <div class="ContactFormComplete__inner">
      <h2 class="ContactFormComplete__title">お問い合わせありがとうございました。</h2>
      <?php the_content(); ?>

      <div class="ContactFormComplete__button">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          商品一覧を見る<img src="<?php echo $imgUri;?>/arrow.webp" alt="" loading="lazy" />
        </a>
      </div>
    </div>
  </section>
</main>
<?php get_template_part('footer-cart');?>
