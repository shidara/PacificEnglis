<?php
/**
 * Front-Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
  <link rel="stylesheet" href=<?php echo get_template_directory_uri().'-child/assets/css/style.css?ver='.date("YmdHi");?>>
	<?php wp_head(); ?>
  <style>
    @charset "UTF-8";
/*
 * 個別に作成したcssファイルを読み込む用
*/
/*================================
Base
================================*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
:root {
  --color-wht: #fff;
  --color-blk: #252525;
  --color-primary: #f93c00;
  --color-pacific-gray-a: #e9e9e9;
  --color-pacific-gray-b: #f9f9f9;
  --color-pacific-orange-a: #cf371c;
  --color-pacific-orange-b: #ff8739;
  --color-pacific-orange-c: #ffcdc4;
}

/*================================
Reset CSS
================================*/
button {
  margin: 0;
  padding: 0;
  border: 0;
  appearance: none;
  background-color: transparent;
}

.Header {
  position: relative;
  background-color: green;
}
.Header .Header__inner {
  display: flex;
  justify-content: space-between;
}
.Header .Header__inner a {
  display: block;
}
.Header .Header__navButton {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
  border-radius: 0 0 0 8px;
  font-size: 12px;
  font-weight: 700;
  color: var(--color-wht);
  background-color: var(--color-primary);
}
.Header button {
  margin: 0;
  padding: 0;
  border: 0;
  appearance: none;
  background-color: transparent;
}
  </style>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="Header" role="banner">
  <div class="Header__inner">
    <div class="Logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Logo__link">
        <img src="https://dummyimage.com/248x108/f27d53/fff.png" alt="パシフィックイングリッシュ ホーム" width="124" height="54" />
      </a>
    </div>
    <button class="Header__navButton">MENU</button>


    <div class="Navigation">
      <div class="Navigation__closeWrapper"></div>
      <nav>
        <ul class="Navigation__menu">
          <li class="Navigation__item">
            <a href="#" class="Navigation__itemInner">
              <div>
                <p class="Navigation__menuTitle">International  School</p>
                <p class="Navigation__menuSubText">インターナショナルスクール</p>
              </div>
              <div class="Navigation__itemThumbnail">
                <img src="https://dummyimage.com/155x65/f27d53/fff.png" width="124" height="52" alt="" loading="lazy" />
              </div>
            </a>
          </li>
          <li class="Navigation__item">
            <a href="#" class="Navigation__itemInner">
              <div>
                <p class="Navigation__menuTitle">After  School</p>
                <p class="Navigation__menuSubText">英語の教室</p>
              </div>
              <div class="Navigation__itemThumbnail">
                <img src="https://dummyimage.com/155x65/f27d53/fff.png" width="124" height="52" alt="" loading="lazy" />
              </div>
            </a>
          </li>
          <li class="Navigation__item">
            <a href="#" class="Navigation__itemInner">
              <div>
                <p class="Navigation__menuTitle">Online  School</p>
                <p class="Navigation__menuSubText">オンライン英会話</p>
              </div>
              <div class="Navigation__itemThumbnail">
                <img src="https://dummyimage.com/155x65/f27d53/fff.png" width="124" height="52" alt="" loading="lazy" />
              </div>
            </a>
          </li>
        </ul>
      </nav>

      <div class="Navigation__footerThumbnail">
        <a href="#">
          <img src="https://dummyimage.com/300x183/f27d53/fff.png" width="300" height="183" />
        </a>
      </div>

      <div class="Navigation__footerLinks">
        <ul class="Navigation__footerLinksList">
          <li class="Navigation__footerLinksItem"><a href="#">On the job</a></li>
          <li class="Navigation__footerLinksItem"><a href="#">講師紹介</a></li>
          <li class="Navigation__footerLinksItem"><a href="#">ブログ</a></li>
          <li class="Navigation__footerLinksItem"><a href="#">求人</a></li>
        </ul>
      </div>

    </div>
  </div>
</header>


<div class="MainImage">
  <div class="MainImage__inner">
    <div class="MainImageSlider swiper js-homeMainVisualSlider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <picture>
            <!-- <source srcset="https://dummyimage.com/350x530/f27d53/fff.png" media="(min-width:600px)" type="image/webp">
            <source srcset="<?php echo $imgUri; ?>corporate/xl_mainvisual-1.jpg" media="(min-width:600px)">
            <source srcset="<?php echo $imgUri; ?>corporate/sm_mainvisual-1.webp" type="image/webp"> -->
            <img src="https://dummyimage.com/350x446/f00/fff.png" alt="">
          </picture>
        </div>
        <div class="swiper-slide">
          <picture>
            <!-- <source srcset="<?php echo $imgUri; ?>corporate/xl_mainvisual-2.webp" media="(min-width:600px)" type="image/webp">
            <source srcset="<?php echo $imgUri; ?>corporate/xl_mainvisual-2.jpg" media="(min-width:600px)">
            <source srcset="<?php echo $imgUri; ?>corporate/sm_mainvisual-2.webp" type="image/webp"> -->
            <img src="https://dummyimage.com/350x446/0f0/fff.png" alt="">
          </picture>
        </div>
        <div class="progress js-progress"><span></span></div>
      </div>
      <div class="MainImage__info">
        <div>
          <p class="MainImage__infoTitle">英語の保育園</p>
        </div>
        <div><img src="https://dummyimage.com/248x108/00f/fff.png" alt="" width="32" height="32" /></div>
      </div>
    </div>
  </div>
</div>


  <!-- コンテンツ -->
  <main class="pageContents Top">
    <!-- メッセージ -->
    <section class="Top__mainMessageSection">
      <h2 class="Top__mainMessageTitle">世界が広がる<br />英語で話そう!</h2>
      <p class="Top__mainMessage">創業40年の歴史で1万人以上の卒業生を輩出！<br/>大分県大分市で通える英語脳が身に付くインターナショナルスクールと英語教室</p>
    </section>
    <!-- News -->
    <section class="Top__news">
      <h2 class="Top__newsTitle">News</h2>
      <div class="Top__newsColumn">
        <div class="Top__newsColumnItem">
          <div class="Top__newsThumbnail">
            <img src="https://dummyimage.com/119x88/f27d53/fff.png" width="119" height="88" loading="lazy" />
          </div>
        </div>
        <div class="Top__newsColumnItem">
          <time>2024.02.19</time>
          <p>【幼児・小学生】無料体験レッスンの募集をはじめまあああああ</p>
        </div>
      </div>
    </section>

    <!-- Hello World -->
    <section class="HelloWorld">
      <div class="HelloWorld__title">
        <h3 class="HelloWorld__titleText">HelloWorld</h3>
        <p class="HelloWorld__subTitle">一生モノの英語脳を身につけて、広い世界を体験しよう。</p>
      </div>
      <p class="HelloWorld__summary">お気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せください</p>

      <div class="HelloWorld__tell">
        <a href="tel:0975387350">
          <p class="HelloWorld__tellTitle">日本人スタッフが対応します</p>
          <div class="HelloWorld__tellNumber">
            <span class="HelloWorld__tellNumberIcon"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="10" height="17" alt="" /></span>
            <span class="HelloWorld__tellNumberText">097-538-7350</span>
          </div>
          <p class="HelloWorld__tellTime">受付時間 10:00-19:00</p>
        </a>
      </div>

      <div class="HelloWorld__experience">
        <a href="#">
          <p class="HelloWorld__experienceTitle">&nbsp;&nbsp;&nbsp;最短翌日から可能！<br /><span class="HelloWorld__experienceTitleLarge">4</span>ステップで予約完了<span class="HelloWorld__experiencePin"><img src="https://dummyimage.com/38x38/f27d53/fff.png" width="38" height="38" alt="" /></span></p>
          <div class="HelloWorld__experienceLine">
            <span class="HelloWorld__experienceLineIcon"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="10" height="17" alt="" /></span>
            <span class="HelloWorld__experienceLineText">無料体験入学</span>
          </div>

        </a>
      </div>
    </section>

    <!-- Recruit -->
    <section class="Recruit">
      <div class="Recruit__title">
        <h3 class="Recruit__titleText">Recruit</h3>
        <p class="Recruit__subTitle ">採用情報</p>
      </div>

      <div class="Recruit__links">
        <ul>
          <li class="Recruit__linksItem">
            <a href="#">
              <div><img src="https://dummyimage.com/167x190/f27d53/fff.png" loadding="lazy" /></div>
              <div class="Recruit__linksItemInfoWrapper">
                <div class="Recruit__linksItemInfo">
                  <p class="Recruit__linksItemInfoTitle">日本人保育士</p>
                </div>
                <div class="Recruit__linksItemArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="6" height="6" /></div>
              </div>
            </a>
          </li>

           <li class="Recruit__linksItem">
            <a href="#">
              <div><img src="https://dummyimage.com/167x190/f27d53/fff.png" loadding="lazy" /></div>
              <div class="Recruit__linksItemInfoWrapper">
                <div class="Recruit__linksItemInfo">
                  <p class="Recruit__linksItemInfoTitle Recruit__linksItemInfoTitleMedium">Childminder/ENG</p>
                </div>
                <div class="Recruit__linksItemArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="6" height="6" /></div>
              </div>
            </a>
          </li>

           <li class="Recruit__linksItem">
            <a href="#">
              <div><img src="https://dummyimage.com/167x190/f27d53/fff.png" loadding="lazy" /></div>
              <div class="Recruit__linksItemInfoWrapper">
                <div class="Recruit__linksItemInfo">
                  <p class="Recruit__linksItemInfoTitle">運転手&nbsp;<span class="Recruit__linksItemInfoTitleSmall">普通免許ok</span></p>
                </div>
                <div class="Recruit__linksItemArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="6" height="6" /></div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <!-- フッター -->
  <footer class="Footer">
    <div class="Footer__title">
      <h3 class="Footer__titleText">For<br/>Instagram</h3>
      <p class="Footer__subTitle">スクールライフをインスタグラムで投稿中!</p>
    </div>

    <div class="Footer__imageList">
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
    </div>

    <div class="Footer__officialAccount">
      <a href="#" class="Footer__officialAccountLinks">
        <img src="https://dummyimage.com/26x26/f27d53/fff.png" width="26" height="26" loading="lazy" class="Footer__officialAccountImage" />
        <span>公式アカウントはこちら</span>
      </a>
    </div>

    <hr class="Footer__divider" />

    <div class="Footer__navigation">
      <ul>
        <li class="Footer__navigationItem">
          <a href="" class="Footer__navigationLink">
            <div class="Footer__navigationInfo">
              <p class="Footer__navigationInfoTitle">インターナショナル</p>
              <p class="Footer__navigationInfoText">スクール</p>
            </div>
            <div class="Footer__navigationArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" /></div>
          </a>
        </li>

         <li class="Footer__navigationItem">
          <a href="" class="Footer__navigationLink">
            <div class="Footer__navigationInfo">
              <p class="Footer__navigationInfoTitle">放課後</p>
              <p class="Footer__navigationInfoText">スクール</p>
            </div>
            <div class="Footer__navigationArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" /></div>
          </a>
        </li>

         <li class="Footer__navigationItem">
          <a href="" class="Footer__navigationLink">
            <div class="Footer__navigationInfo">
              <p class="Footer__navigationInfoTitle">オンライン</p>
              <p class="Footer__navigationInfoText">スクール</p>
            </div>
            <div class="Footer__navigationArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" /></div>
          </a>
        </li>
      </ul>
    </div>

    <hr class="Footer__divider" />

    <!-- 学校の種類 -->
    <div class="Footer__school">
      <ul class="Footer__schoolList">
        <li class="Footer__schoolItem">
          <h4 class="Footer__schoolItemTitle">王子校</h4>
          <p class="Footer__schoolItemAddress">〒870-0009</p>
          <p class="Footer__schoolItemAddress">大分県大分市王子町４−４</p>
          <div class="Footer__schoolItemMap"></div>
        </li>

        <li class="Footer__schoolItem">
          <h4 class="Footer__schoolItemTitle">大在校</h4>
          <p class="Footer__schoolItemAddress">〒870-0251</p>
          <p class="Footer__schoolItemAddress">大分県大分市大在中央１丁目８−８</p>
          <div class="Footer__schoolItemMap"></div>
        </li>
      </ul>
    </div>

    <!-- リンクス -->
    <div class="Footer__links">
      <ul>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
      </ul>
    </div>

    <!-- instagram -->
    <div class="Footer__instagram">
      <a href="#"><img src="https://dummyimage.com/36x36/f27d53/fff.png" loading="lazy"/></a>
    </div>

    <small class="Footer__small">©Pacific English</small>
  </footer>
	<?php // wp_footer(); ?>
	</body>
</html>