<?php
/**
 * Template Name: English-class
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>
<?php get_header();?>

<?php get_template_part('mainImage'); ?>

  <!-- コンテンツ -->
  <main class="pageContents EnglishClass">
    <!-- ページタイトル -->
    <section class="PageTitleSection">
      <p class="PageTitleSection__subText">ネイティブだから学べる英会話</p>
      <h2 class="PageTitleSection__title PageTitleSection__title--small">英語の教室</h2>
      <p class="PageTitleSection__summary PageTitleSection__summary--black">「学びの中に楽しさを感じれる」そのようなレッスンの提供をパシフィックイングリッシュは目指してます。弊校のカリキュラムチームは日々、日本の子供たちに最適なレッスンの構築に取り組んでおります。</p>
    </section>

    <!-- Lesson -->
    <section class="LessonMain">
      <div class="LessonMain__title">
        <h3 class="LessonMain__titleText">Lesson</h3>
        <p class="LessonMain__subTitle"><span class="LessonMain__subTitleOrange">年齢別</span>・おもなレッスン内容</p>
      </div>
      <p class="LessonMain__summary">インターナショナルスクール・英会話教室</p>

      <div class="LessonMain__contents">
        <div class="LessonMain__item">
          <div class="LessonMain__itemThumbnail">
            <img src="https://dummyimage.com/350x232/0f0/fff.png" alt="" loading="lazy" />
            <span class="LessonMain__itemThumbnailLabel">1番人気!!</span>
          </div>

          <div class="LessonMain__itemTitle">
            <h4 class="LessonMain__itemTitleText"><span>ジェネラル</span>コース</h4>
            <p class="LessonMain__itemTitleAge"><span>対象年齢：</span>2歳児〜15歳</p>
          </div>
          <p class="LessonMain__itemSummary">週に1回のレッスンで読書き会話の4技能を学べるコースです。小学校・中学校の英語対策に効果的で外国人との英語でのコミュニケーションスキルも身につけられます。</p>
          <p class="LessonMain__itemNote">※英語をアウトプットする時間を増やされたい場合は英語の学童・育成クラブとの併用が効果的です。​</p>

          <div class="LessonMain__itemCombined">
            <p class="LessonMain__itemCombinedTitle">併用できる学童・クラブ</p>
            <ul>
              <li>・ABC Pop Phonics Class（ABCポップフォニックスクラス）</li>
              <li>・Complete Phonics Class（コンプリートフォニックスクラス）</li>
              <li>・Everybody Up Class（エブリバディーアップクラス）</li>
              <li>・All Up Class（オールアップクラス）</li>
            </ul>
          </div>
        </div>

        <div class="LessonMain__item">
          <div class="LessonMain__itemThumbnail">
            <img src="https://dummyimage.com/350x232/0f0/fff.png" alt="" loading="lazy" />
            <span class="LessonMain__itemThumbnailLabel">経験者におすすめ</span>
          </div>

          <div class="LessonMain__itemTitle">
            <h4 class="LessonMain__itemTitleText"><span>インテンシブ</span>コース</h4>
            <p class="LessonMain__itemTitleAge"><span>対象年齢：</span>2歳児〜15歳</p>
          </div>
          <p class="LessonMain__itemSummary">1回2時間のレッスンを週に1回又は2回受講していただけるコースです。授業内容はSTEAM教育や英語でのプレゼンテーション発表のスキルを学ぶために、英語を母語とする国の小学生が授業で学ぶ内容をバランスよく学び、その内容についての自分の考えを英語でまとめて友達や先生に発表する事ができます。</p>
        </div>
      </div>
    </section>

    <!-- School -->
    <section class="SchoolMain">
      <div class="LessonMain__title">
        <h3 class="LessonMain__titleText">School</h3>
        <p class="LessonMain__subTitle">校舎紹介</p>
      </div>
      <p class="LessonMain__summary">インターナショナルスクール・英会話教室</p>
    </section>
  </main>

<?php get_footer();?>