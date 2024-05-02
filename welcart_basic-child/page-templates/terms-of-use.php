<?php
/**
 * Template Name: TERMS OF USE
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>

<?php get_header();?>
  <!-- コンテンツ -->
  <main class="pageContents TermsPage">
    <section class="Breadcrumbs">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
        <li>利用規約</li>
      </ul>
    </section>

    <section class="Terms">
      <div class="Terms__title">
        <h3 class="Terms__titleText">TERMS OF USE</h3>
        <p class="Terms__subTitle Terms__subTitle--beforeIcon">利用規約</p>
      </div>

      <p class="Terms__summary">この利用規約（以下、「本規約」といいます。）は、株式会社 パシフィック・イングリッシュ（以下、「当社」といいます。）がこのECサイト上で提供するサービス（以下、「本サービス」といいます。）の利用条件を定めるものです。登録会員の皆さま（以下、「会員さま」といいます。）には、本規約に従って、本サービスをご利用いただきます。</p>

      <div class="Terms__contents">
        <div class="Terms__item">
          <h4 class="Terms__itemTitle">第1条（適用）</h4>
          <div class="Terms__itemInner">
            <p>本規約は、会員さまと当社との間の本サービスの利用に関わる一切の関係に適用されるものとします。</p>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_template_part('footer-cart');?>