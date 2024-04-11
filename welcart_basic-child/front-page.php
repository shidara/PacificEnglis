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

  <div class="MainImage">

  </div>
</header>

<!-- コンテンツ -->
<div id="top" class="page">
  <main class="pageContents">

  </main>
</div>


<!-- フッター -->
	<?php wp_footer(); ?>
	</body>
</html>