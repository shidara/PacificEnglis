<?php
/**
 * Hello World Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/footer/";

?>

<section class="HelloWorld">
  <div class="HelloWorld__inner">
    <div class="HelloWorld__title">
      <h3 class="HelloWorld__titleText">HelloWorld</h3>
      <p class="HelloWorld__subTitle">一生モノの英語脳を身につけて、<br />広い世界を体験しよう。</p>
    </div>
    <p class="HelloWorld__summary">お気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せください</p>

    <div class="HelloWorld__info">
      <div class="HelloWorld__tell">
        <a href="tel:0975387350">
          <p class="HelloWorld__tellTitle">日本人スタッフが対応します</p>
          <div class="HelloWorld__tellNumber">
            <span class="HelloWorld__tellNumberIcon"><img src="<?php echo $imgUri;?>611.webp" height="29" alt="" /></span>
            <span class="HelloWorld__tellNumberText">097-538-7350</span>
          </div>
          <p class="HelloWorld__tellTime">受付時間 10:00-19:00</p>
        </a>
      </div>

      <div class="HelloWorld__experience">
        <a href="#">
          <p class="HelloWorld__experienceTitle">&nbsp;&nbsp;&nbsp;最短翌日から可能！<br />
            <span class="HelloWorld__experienceTitleLarge">4</span>
            ステップで予約完了
            <span class="HelloWorld__experiencePin"><img src="<?php echo $imgUri;?>610.webp" height="38" alt="" /></span>
          </p>
          <div class="HelloWorld__experienceLine">
            <span class="HelloWorld__experienceLineIcon"><img src="<?php echo $imgUri;?>line_logo.webp"  height="29" alt="" /></span>
            <span class="HelloWorld__experienceLineText">無料体験入学</span>
          </div>

        </a>
      </div>
    </div>
  </div>
</section>