<?php
/**
 * Template Name: TERMS OF USE
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

$jsonOriginUrl = get_theme_file_uri() . '/assets/json/terms-of-use.json';
$json = file_get_contents($jsonOriginUrl);
$arr = json_decode($json,true);
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
        <?php
          if(is_array($arr)){
            foreach($arr as $d) {
              echo '<div class="Terms__item">
                    <h4 class="Terms__itemTitle">' . $d['title'] . '</h4>
                    <div class="Terms__itemInner">';

              if(isset($d['text'])){
                echo '<p>' . $d['text'] . '</p>';
              }

              if(isset($d['orderList'])){
                $i = 1 ;
                echo '<ol class="Terms__orderList">';
                if(is_array($arr)){
                  foreach ($d['orderList'] as $olValue) {
                      echo '<li class="Terms__orderListItem">
                            <span class="Terms__orderListNumber">(' . $i . ')</span>' . $olValue . '</li>';
                      $i ++;
                    }
                  }
                echo '</ol>';
              }

              if(isset($d['afterText'])){
                echo '<p class="Terms__afterText">' . $d['afterText'] . '</p>';
              }

              echo '</div></div>';
            }
          }
        ?>
      </div>
    </section>
  </main>

<?php get_template_part('footer-cart');?>