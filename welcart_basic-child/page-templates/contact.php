<?php
/**
 * Template Name: Contact
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>

<?php get_header();?>
  <!-- コンテンツ -->
  <main class="pageContents ContactPage">
    <section class="Breadcrumbs">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
        <li>個人情報保護方針</li>
      </ul>
    </section>

    <section class="Contact">
      <div class="Contact__title">
        <h3 class="Contact__titleText">CONTACT</h3>
        <p class="Contact__subTitle Contact__subTitle--beforeIcon">個人情報保護方針</p>
      </div>

      <p class="Contact__summary">株式会社 パシフィック・イングリッシュ（以下、「当社」といいます。）は、本ウェブサイト上で提供するサービス（以下、「本サービス」といいます。）における、ユーザーの個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。</p>

      <div class="Contact__contents">
        <div class="Contact__item">
          <h4 class="Contact__itemTitle">第1条（個人情報）</h4>
          <div class="Contact__itemInner">
            <p>「個人情報」とは、個人情報保護法にいう「個人情報」を指すものとし、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、連絡先その他の記述等により特定の個人を識別できる情報及び容貌、指紋、声紋にかかるデータ、及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer();?>