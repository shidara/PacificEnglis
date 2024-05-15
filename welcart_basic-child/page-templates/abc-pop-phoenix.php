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

  <!-- メリット -->
  <section class="Merit">
    <div class="Merit__inner">
      <div class="Merit__title">
        <h3 class="Merit__titleText">Merit</h3>
        <p class="Merit__subTitle">フォニックスを学習するメリット</p>
      </div>
      <p class="Merit__subText">インターナショナルスクール・英会話教室</p>

      <div class="Merit__contents">
        <div class="Merit__item">
          <div class="Merit__itemTitle">
            <p class="Merit__itemSubTitle">Merit01</p>
            <h4 class="Merit__itemTitleText">読み方を習得することができます</h4>
          </div>
          <p class="Merit__itemSummary">フォニックスは子供たちが発音と文字の関係を理解するのに役立ちます。</p>
        </div>

        <div class="Merit__item">
          <div class="Merit__itemTitle">
            <p class="Merit__itemSubTitle">Merit02</p>
            <h4 class="Merit__itemTitleText">スピードと正確さの向上</h4>
          </div>
          <p class="Merit__itemSummary">フォニックスは子供たちが発音と文字の関係を理解するのに役立ちます</p>
        </div>

        <div class="Merit__item">
          <div class="Merit__itemTitle">
            <p class="Merit__itemSubTitle">Merit03</p>
            <h4 class="Merit__itemTitleText">語彙力の向上</h4>
          </div>
          <p class="Merit__itemSummary">フォニックスによって新しい単語が簡単に覚えられます。</p>
        </div>

        <div class="Merit__item">
          <div class="Merit__itemTitle">
            <p class="Merit__itemSubTitle">Merit04</p>
            <h4 class="Merit__itemTitleText">自信の向上</h4>
          </div>
          <p class="Merit__itemSummary">読み方が分かることで、子供たちの読書の自信が高まります。</p>
        </div>

        <div class="Merit__item">
          <div class="Merit__itemTitle">
            <p class="Merit__itemSubTitle">Merit05</p>
            <h4 class="Merit__itemTitleText">教育への有効なアプローチ</h4>
          </div>
          <p class="Merit__itemSummary">フォニックスは、子供たちがよりスムーズに読書を学ぶことができるという効果的なアプローチです。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Materials -->
  <section class="Materials">
    <div class="Materials__inner">
      <div class="Materials__title">
        <h3 class="Materials__titleText">Materials</h3>
        <p class="Materials__subTitle">教材のご案内</p>
      </div>
      <p class="Materials__subText">アルファベットマスター</p>
      <p class="Materials__summary">アルファベットの読み書き発音を「サブスクリプション動画」と共に学べるテキストブックです。年齢に合わせて３種類ご用意しております。</p>

      <?php
        $jsonMaterialsUrl = get_theme_file_uri() . '/assets/json/materials.json';
        $jsonMaterials = file_get_contents($jsonMaterialsUrl);
        $arrMaterials = json_decode($jsonMaterials,true);
      ?>
      <div class="Materials__contents">
        <?php
          if(is_array($arrMaterials)) {
            foreach($arrMaterials as $d){
              echo '<div class="Materials__item">
                      <div class="Materials__thumbnail">
                        <img src="'. $imgUri . $d['imgUrl'] . '" alt="" loading="lazy" />
                      </div>';
              echo '<div class="Materials__itemInfo"><div class="Materials__itemInfoLabel">対象年齢：' . $d['age'] . '歳</div>';
              echo '<p class="Materials__itemInfoTitle">' . $d['name'] . '</p>';
              echo '<p class="Materials__itemInfoText">' . $d['summary'] . '</p>';
              echo '</div></div>';
            }
          }
        ?>
      </div>
      <!-- オンラインショップ導線 -->
      <div class="Materials__more">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/">オンラインショップを見る</a>
      </div>
    </div>

    <!-- Phonics -->
    <div class="Materials__inner">
      <div class="Materials__title">
        <h3 class="Materials__titleText">Phonics</h3>
      </div>
      <p class="Materials__subText">コンプリートフォニックス<br />シリーズ１～４</p>
      <p class="Materials__summary">キャラクターの名前でフォニックスのルールを楽しく覚えられるスタイルはそのままで、サイトワードの練習、ショートストーリーもあり、これから読み書きを本格的に始める子ども達に最適です。</p>

      <?php
        $jsonPhonicsUrl = get_theme_file_uri() . '/assets/json/phonics.json';
        $json = file_get_contents($jsonPhonicsUrl);
        $arr = json_decode($json,true);
      ?>
      <div class="Materials__contents Materials__contents--grid">
        <?php
          if(is_array($arr)) {
            foreach($arr as $d){
              echo '<div class="Materials__item">
                      <div class="Materials__thumbnail">
                        <img src="'. $imgUri . $d['imgUrl'] . '" alt="" loading="lazy" />
                      </div>';
              echo '<div class="Materials__itemInfo"><p class="Materials__itemInfoTitle ">' . $d['name'] . '</p></div>';
              echo '</div>';
            }
          }
        ?>
      </div>
      <!-- オンラインショップ導線 -->
      <div class="Materials__more">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/">オンラインショップを見る</a>
      </div>
    </div>

    <!-- Game -->
    <div class="Materials__inner">
      <div class="Materials__title">
        <h3 class="Materials__titleText">Game</h3>
      </div>
      <p class="Materials__subText">ゲーム</p>

      <?php
        $jsonGameUrl = get_theme_file_uri() . '/assets/json/game.json';
        $jsonGame = file_get_contents($jsonGameUrl);
        $arrGame = json_decode($jsonGame,true);
      ?>
      <div class="Materials__contents">
        <?php
          if(is_array($arrGame)) {
            foreach($arrGame as $d){
              echo '<div class="Materials__item">
                      <div class="Materials__thumbnail">
                        <img src="'. $imgUri . $d['imgUrl'] . '" alt="" loading="lazy" />
                      </div>';
              echo '<div class="Materials__itemInfo"><div class="Materials__itemInfoLabel">対象年齢：' . $d['age'] . '</div>';
              echo '<p class="Materials__itemInfoTitle">' . $d['name'] . '</p>';
              echo '<p class="Materials__itemInfoText">' .$d["summary"] . '</p>';
              echo '</div></div>';
            }
          }
        ?>
      </div>
      <!-- オンラインショップ導線 -->
      <div class="Materials__more">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/">オンラインショップを見る</a>
      </div>
    </div>
  </section>

  <!-- 入園バナー PCのみ -->
  <?php get_template_part('enrollmentBanner'); ?>

</main>

<?php get_footer();?>