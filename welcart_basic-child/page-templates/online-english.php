<?php
/**
 * Template Name: Online English
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>
<?php get_header();?>

<?php get_template_part('mainImage'); ?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents RecruitPage">
  <!-- ページタイトル -->
  <section class="PageTitleSection">
    <p class="PageTitleSection__subText">ネイティブだから学べる英会話</p>
    <h2 class="PageTitleSection__title PageTitleSection__title--small">ご自宅で本格オンライン英語学習</h2>
    <p class="PageTitleSection__summary PageTitleSection__summary--black">ABCポップフォニックスは、パシフィックイングリッシュのオリジナル英語教材ブランドABC Pop Phonicsは３歳から８歳のお子様が楽しみながら英語の読み書き発音が身につく教材となっております。スクールでの英語導入期のお子様のレッスンではもちろん、ご家庭でも楽しめるYou Tubeアニメーションや玩具をオンラインショップでご納入していただきご家庭でも英語を日常的に取り入れるサポートをさせていただいております。</p>
  </section>


  <!-- Hello World -->
  <?php get_template_part('helloWorld'); ?>

  <!-- Recruit -->
  <?php get_template_part('recruit'); ?>
</main>

<?php get_footer();?>
