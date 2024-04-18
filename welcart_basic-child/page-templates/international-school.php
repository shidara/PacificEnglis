<?php
/**
 * Template Name: International-School
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */


?>
<?php get_header();?>

<?php get_template_part('mainImage'); ?>

  <!-- コンテンツ -->
  <main class="pageContents InternationalSchool">
    <!-- ページタイトル -->
    <section class="PageTitleSection">
      <p class="PageTitleSection__subText">本物の英語が学べる</p>
      <h2 class="PageTitleSection__title PageTitleSection__title--small">インターナショナルスクール</h2>
      <p class="PageTitleSection__summary PageTitleSection__summary--black">バス送迎・給食制度・お預かり・保育の無償化制度など、親御さんも通わせやすいスクールです。また、大分市より指監第１０６８号（王子校）子企第３２４号（大在校）として認可外保育施設指導監査基準を満たしている施設としてお子様をお預かりして営業できる証明を頂いております。</p>
    </section>

    <!-- Lesson -->
    <section class="Lesson">
      <div class="Lesson__title">
        <h3 class="Lesson__titleText">Lesson</h3>
        <p class="Lesson__subTitle"><span class="Lesson__subTitleOrange">年齢別</span>・おもなレッスン内容</p>
      </div>
      <p class="Lesson__summary">インターナショナルスクール・英会話教室</p>

      <div class="Lesson__contents">
        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">2</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview"><span class="Lesson__itemOverviewOrange">アルファベットの発音が聞き取れ、</span>リピートできるようになる</p>
            </div>
          </div>
          <p class="Lesson__itemSummary">日常生活で先生との会話を理解し、行動できるボキャブラリーを身に付けたり、筆圧を養うための色塗りに取り組んだり、Nクラスの準備を整えます。</p>
        </div>

        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">3</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview">アルファベットの<span class="Lesson__itemOverviewOrange">大文字・小文字を書けるようになる</span></p>
            </div>
          </div>
          <p class="Lesson__itemSummary">年度の終わりでは、３文字ほどの短い単語がかける力も身に付いていきます。</p>
        </div>

        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">4</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview">１年を通して単語を書く練習をし、<span class="Lesson__itemOverviewOrange">フォニックスの応用をマスターする</span></p>
            </div>
          </div>
          <p class="Lesson__itemSummary">先生が話す英語を耳で聞き、書けるようになってきます。また、少しずつ長い文章を書く練習も始まります。</p>
        </div>

        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">5</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview">毎日の出来事を自分で考え、<span class="Lesson__itemOverviewOrange">英語で日記を書けるようになる</span></p>
            </div>
          </div>
          <p class="Lesson__itemSummary">プレゼンテーションの作り方や意見発表の方法を学ぶことができ、協調性を持ちながら自分の意見を発言できるようになります。</p>
        </div>

      </div>
    </section>

    <!-- STEAM -->
    <section class="Steam">
      <div class="Steam__title">
        <h3 class="Steam__titleText">STEAM</h3>
        <p class="Steam__subTitle">21世紀型の学びの手法<span class="Steam__subTitleOrange">STEAM教育で</span>グローバルな人材教育</p>
      </div>
      <p class="Steam__summary">インターナショナルスクール・英会話教室</p>

      <div class="Steam__image">
        <img src="https://dummyimage.com/390x120/0f0/fff.png" alt="" loading="lazy" />
      </div>
      <p class="Steam__Subject"><span>S:Science（科学）</span><span>T:Technology（技術）</span><span>E:Engineering（工学）</span><span>A:Art（芸術・教養）</span><span>M:Mathematics（数学）</span></p>
      <p class="Steam__summary">この5つの要素を重要視した教育である「STEAM教育」は科学的な知識だけでなく、教養や考え方、デザイン性など、子どもの自由な発想で創造性を膨らませ、問題解決を図る力を身に付けるための学びの領域として、IT社会とグローバル社会に適応した人材を多く生み出そうとする世界的にも注目されている21世紀型の学びの手法です。小学校の授業でもタブレットの導入やプログラミングの授業が必須となりました。テクノロジーを活用しながら自分で学び、自分で理解し、自発性や創造性、判断力、問題解決力といった能力を高めるため、さまざまなカリキュラムを準備しています。当スクールでのたくさんの学びを通じて、独自の創造性（クリエイティビティ）につなげていきます。</p>
    </section>

    <!-- Voice -->
    <?php get_template_part('voice'); ?>

    <!-- Hello World -->
    <?php get_template_part('helloWorld'); ?>

    <!-- Recruit -->
    <?php get_template_part('recruit'); ?>
  </main>

<?php get_footer();?>