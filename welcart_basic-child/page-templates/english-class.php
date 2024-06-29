<?php
/**
 * Template Name: English-class
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/english-class/";
  $imgTopUri = get_theme_file_uri() . "/assets/images/top/";
  $imgFooterUri = get_theme_file_uri() . "/assets/images/footer/";

  // lesson general
  $jsonLessonGeneral = get_theme_file_uri() . '/assets/json/lesson-general.json';
  $jsonLessonGeneralContents = file_get_contents($jsonLessonGeneral);
  $arrLessonGeneral = json_decode($jsonLessonGeneralContents,true);

  // lesson Intensive
  $jsonLessonIntensive = get_theme_file_uri() . '/assets/json/lesson-Intensive.json';
  $jsonLessonIntensiveContents = file_get_contents($jsonLessonIntensive);
  $arrLessonIntensive = json_decode($jsonLessonIntensiveContents,true);
?>
<?php get_header();?>

<?php get_template_part('FixedNavigation'); ?>

  <!-- コンテンツ -->
  <main class="pageContents EnglishClass">
    <!-- メインイメージ -->
    <section class="PageStaticImage">
      <div class="PageStaticImage__inner">
        <img src="<?php echo $imgTopUri;?>/03.webp" alt="" loading="lazy" class="PageStaticImage__image PageStaticImage__image--right" />
      </div>
    </section>
    <!-- ページタイトル -->
    <section class="PageTitleSection">
      <p class="PageTitleSection__subText">ネイティブだから学べる英会話</p>
      <h2 class="PageTitleSection__title PageTitleSection__title--small">英語の教室</h2>
      <p class="PageTitleSection__summary PageTitleSection__summary--black">「学びの中に楽しさを感じれる」そのようなレッスンの提供をパシフィックイングリッシュは目指してます。弊校のカリキュラムチームは日々、日本の子供たちに最適なレッスンの構築に取り組んでおります。</p>
    </section>

    <!-- Lesson -->
    <section class="LessonMain">
      <div class="LessonMain__inner">
        <div class="LessonMain__title">
          <h3 class="LessonMain__titleText">Lesson</h3>
          <p class="LessonMain__subTitle"><span class="LessonMain__subTitleOrange">年齢別</span>・おもなレッスン内容</p>
        </div>
        <p class="LessonMain__summary">インターナショナルスクール・英会話教室</p>

        <div class="LessonMain__contents">
          <div class="LessonMain__item">
            <div class="LessonMain__itemThumbnail">
              <img src="<?php echo $imgUri;?>/22.webp" alt="" loading="lazy" />
              <span class="LessonMain__itemThumbnailLabel">1番人気!!</span>
            </div>

            <div class="LessonMain__itemInfo">
              <span class="LessonMain__itemLabel">1番人気!!</span>
              <div class="LessonMain__itemTitle">
                <h4 class="LessonMain__itemTitleText"><span>ジェネラル</span>コース</h4>
                <p class="LessonMain__itemTitleAge"><span>対象年齢：</span>3歳児〜</p>
              </div>
              <p class="LessonMain__itemSummary">週に1回のレッスンで読書き会話の4技能を学べるコースです。小学校・中学校の英語対策に効果的で外国人との英語でのコミュニケーションスキルも身につけられます。</p>
              <p class="LessonMain__itemNote">※英語をアウトプットする時間を増やされたい場合は英語の学童・育成クラブとの併用が効果的です。​</p>
            </div>
          </div>

          <div class="LessonMain__combined">
            <?php
              if($arrLessonGeneral){
                foreach($arrLessonGeneral as $v){
                  if($v['subText']) {
                    // \nを改行コードに変換
                    $afterSubTitle = str_replace("\n", "<br />", $v['subText']);
                  }
                  if($v['text']) {
                    // \nを改行コードに変換
                    $afterText = str_replace("\n", "<br />", $v['text']);
                  }
                  echo '<div class="LessonMain__combinedItem">
                          <div class="LessonMain__combinedItemTitle">
                            <h4 class="LessonMain__combinedItemTitleText">' . $v['title'] . '</h4>
                            <p class="LessonMain__combinedItemSubTitle">' . $afterSubTitle . '</p>
                          </div>
                          <p class="LessonMain__combinedItemSummary">' . $afterText. '</p>
                        </div>';
                }
              }
            ?>
          </div>

          <div class="LessonMain__item LessonMain__item--reverse">
            <div class="LessonMain__itemThumbnail">
              <img src="<?php echo $imgUri;?>/21.webp" alt="" loading="lazy" />
              <span class="LessonMain__itemThumbnailLabel">経験者におすすめ</span>
            </div>

            <div class="LessonMain__itemInfo">
              <span class="LessonMain__itemLabel">経験者におすすめ</span>
              <div class="LessonMain__itemTitle">
                <h4 class="LessonMain__itemTitleText"><span>インテンシブ</span>コース</h4>
                <p class="LessonMain__itemTitleAge"><span>対象年齢：</span>3歳児〜</p>
              </div>
              <p class="LessonMain__itemSummary">1回2時間のレッスンを週に1回又は2回受講していただけるコースです。授業内容はSTEAM教育や英語でのプレゼンテーション発表のスキルを学ぶために、英語を母語とする国の小学生が授業で学ぶ内容をバランスよく学び、その内容についての自分の考えを英語でまとめて友達や先生に発表する事ができます。</p>
            </div>
          </div>

          <div class="LessonMain__combined">
            <?php
              if($arrLessonIntensive){
                foreach($arrLessonIntensive as $v){
                  if($v['subText']) {
                    // \nを改行コードに変換
                    $afterSubTitle = str_replace("\n", "<br />", $v['subText']);
                  }
                  if($v['text']) {
                    // \nを改行コードに変換
                    $afterText = str_replace("\n", "<br />", $v['text']);
                  }
                  echo '<div class="LessonMain__combinedItem">
                          <div class="LessonMain__combinedItemTitle">
                            <h4 class="LessonMain__combinedItemTitleText">' . $v['title'] . '</h4>
                            <p class="LessonMain__combinedItemSubTitle">' . $afterSubTitle . '</p>
                          </div>
                          <p class="LessonMain__combinedItemSummary">' . $afterText. '</p>
                        </div>';
                }
              }
            ?>
          </div>
        </div>
      </div>
    </section>

    <!-- School -->
    <section class="SchoolMain">
      <div class="SchoolMain__inner">
        <div class="SchoolMain__title">
          <h3 class="SchoolMain__titleText">School</h3>
          <p class="SchoolMain__subTitle">校舎紹介</p>
        </div>
        <p class="SchoolMain__summary">インターナショナルスクール・英会話教室</p>

        <div class="SchoolMain__contents">
          <ul class="SchoolMain__list">
            <li class="SchoolMain__item">
              <h4 class="SchoolMain__itemTitle">王子校</h4>
              <p class="SchoolMain__itemAddress">〒870-0009</p>
              <p class="SchoolMain__itemAddress">大分県大分市王子町４−４</p>
              <div class="SchoolMain__itemMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.8659851151506!2d131.58871101278748!3d33.243814173361415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546a1d020f48253%3A0xdf81074f3ce8b3f!2z44CSODcwLTAwMDkg5aSn5YiG55yM5aSn5YiG5biC546L5a2Q55S677yU4oiS77yU!5e0!3m2!1sja!2sjp!4v1713067349205!5m2!1sja!2sjp" width="100%" height="189" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </li>

            <li class="SchoolMain__item">
              <h4 class="SchoolMain__itemTitle">大在校</h4>
              <p class="SchoolMain__itemAddress">〒870-0251</p>
              <p class="SchoolMain__itemAddress">大分県大分市大在中央１丁目８−８</p>
              <div class="SchoolMain__itemMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.8016713162847!2d131.7158512127875!3d33.245498873360454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35442778349bc525%3A0x79195580825c837f!2z44CSODcwLTAyNTEg5aSn5YiG55yM5aSn5YiG5biC5aSn5Zyo5Lit5aSu77yR5LiB55uu77yY4oiS77yY!5e0!3m2!1sja!2sjp!4v1713067483603!5m2!1sja!2sjp" width="100%" height="189" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <!-- 入園バナー PCのみ -->
  <section class="EnrollmentBanner">
    <div class="EnrollmentBanner__inner EnrollmentBanner__inner--large">
      <div class="EnrollmentBannerItem EnrollmentBannerItem--row">
        <a href="https://s.lmes.jp/landing-qr/2003697225-ljRgV8Vk?uLand=KrlXg5">
          <p class="EnrollmentBannerExperienceTitle">最短翌日から可能！<br />
            <span class="EnrollmentBannerExperienceTitleLarge">4</span>
            ステップで予約完了
            <span class="EnrollmentBannerPin"><img src="<?php echo $imgFooterUri;?>610.webp" height="38" alt="" loading="lazy" /></span>
          </p>
          <div class="EnrollmentBannerLine">
            <span class="EnrollmentBannerLineIcon"><img src="<?php echo $imgFooterUri;?>line_logo.webp"  height="29" alt="" loading="lazy" /></span>
            <span class="EnrollmentBannerLineText">無料体験入学</span>
          </div>
        </a>
      </div>
    </div>
  </section>

    <!-- Hello World -->
    <?php get_template_part('helloWorld'); ?>

    <!-- Recruit -->
    <?php get_template_part('recruit'); ?>
  </main>

<?php get_footer();?>