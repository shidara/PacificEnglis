<?php
/**
 * Template Name: Privacy-Policy
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

$jsonOriginUrl = get_theme_file_uri() . '/assets/json/privacy-policy.json';
$json = file_get_contents($jsonOriginUrl);
$arr = json_decode($json, true);
?>

<?php get_header();?>
  <!-- コンテンツ -->
  <main class="pageContents PrivacyPolicyPage">
    <section class="Breadcrumbs">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
        <li>個人情報保護方針</li>
      </ul>
    </section>

    <section class="PrivacyPolicy">
      <div class="PrivacyPolicy__title">
        <h3 class="PrivacyPolicy__titleText">Privacy policy</h3>
        <p class="PrivacyPolicy__subTitle PrivacyPolicy__subTitle--beforeIcon">個人情報保護方針</p>
      </div>

      <p class="PrivacyPolicy__summary">株式会社 パシフィック・イングリッシュ（以下、「当社」といいます。）は、本ウェブサイト上で提供するサービス（以下、「本サービス」といいます。）における、ユーザーの個人情報の取扱いについて、以下のとおりプライバシーポリシー（以下、「本ポリシー」といいます。）を定めます。</p>

      <div class="PrivacyPolicy__contents">
        <?php
          if(is_array($arr)){
            foreach($arr as $d) {
              echo '<div class="PrivacyPolicy__item">
                <h4 class="PrivacyPolicy__itemTitle">' . $d['title'] .'</h4>
                <div class="PrivacyPolicy__itemInner">';

              if(isset($d['text'])){
                // \nを改行コードに変換
                $afterText = str_replace("\n", "<br />", $d['text']);
                echo '<p>' . $afterText . '</p>';
              }

              if(isset($d['orderList'])){
                echo '<ul class="PrivacyPolicy__orderList">';
                if(is_array($arr)){
                  foreach ($d['orderList'] as $olValue) {
                    $afterValue = str_replace("\n", "<br />", $olValue);
                    echo '<li class="PrivacyPolicy__orderListItem">・' . $afterValue . '</li>';
                    }
                  }
                echo '</ul>';
              }

              if(isset($d['keyValue'])){
                if(is_array($arr)){
                  foreach ($d['keyValue'] as $kv) {
                    echo '<div class="PrivacyPolicy__keyvalue">
                            <strong>' . $kv["title"] .'</strong>
                            <span>' . $kv["text"] . '</span>
                          </div>';
                    }
                  }
              }

              if(isset($d['afterText'])){
                echo '<p class="PrivacyPolicy__afterText">' . $d['afterText'] . '</p>';
              }

              echo '</div></div>';
            }
          }
        ?>
        <div class="PrivacyPolicy__item">
          <h4 class="PrivacyPolicy__itemTitle">第1条（個人情報）</h4>
          <div class="PrivacyPolicy__itemInner">
            <p>「個人情報」とは、個人情報保護法にいう「個人情報」を指すものとし、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日、住所、電話番号、連絡先その他の記述等により特定の個人を識別できる情報及び容貌、指紋、声紋にかかるデータ、及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_template_part('footer-cart');?>