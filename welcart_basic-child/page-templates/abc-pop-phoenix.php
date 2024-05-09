<?php
/**
 * Template Name: ABC-Pop-Phoenix
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/abcPopPhoenix/";

?>
<?php get_header();?>

<?php get_template_part('mainImage'); ?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents AbcPopPhoenix">
  <!-- ページタイトル -->
  <section class="PageTitleSection">
    <p class="PageTitleSection__subText">ネイティブだから学べる英会話</p>
    <h2 class="PageTitleSection__title PageTitleSection__title--small">ご自宅で本格オンライン英語学習</h2>
    <p class="PageTitleSection__summary PageTitleSection__summary--black PageTitleSection__summary--small">ABCポップフォニックスは、パシフィックイングリッシュのオリジナル英語教材ブランドABC Pop Phonicsは３歳から８歳のお子様が楽しみながら英語の読み書き発音が身につく教材となっております。スクールでの英語導入期のお子様のレッスンではもちろん、ご家庭でも楽しめるYou Tubeアニメーションや玩具をオンラインショップでご納入していただきご家庭でも英語を日常的に取り入れるサポートをさせていただいております。</p>
  </section>

  <section class="AbcPopPhoenixArticle">
    <div class="AbcPopPhoenixArticle__inner">
      <div class="AbcPopPhoenixArticle__titleWrapper">
        <div class="AbcPopPhoenixArticle__thumbnail">
          <img src="<?php echo $imgUri;?>/19.webp" alt="" loading="lazy" />
        </div>

        <div>
          <div class="AbcPopPhoenixArticle__title">
            <h3 class="AbcPopPhoenixArticle__titleText">初めて英語に触れるから<br />わかりやすい英語学習を</h3>
          </div>
          <p class="AbcPopPhoenixArticle__summary">当校のオンライン英会話プログラムは、特に送迎の難しいお子様やご家庭に最適です。小学生から始められる1対1のレッスン形式では、ネイティブ講師との直接対話を通じて、会話力を自然かつ効果的に身につけることができます。お子様が自宅にいながらも、質の高い英会話環境を経験できるようになっています。毎回のレッスンで確実に話す機会が得られるため、英語の会話力が着実に向上します。さらに、無料体験レッスンを2回受けられるので、ぜひ予約してみてください。この機会に、お子様の英会話力の向上をサポートできることを楽しみにしています。</p>
        </div>

      </div>
    </div>
  </section>
</main>

<?php get_footer();?>