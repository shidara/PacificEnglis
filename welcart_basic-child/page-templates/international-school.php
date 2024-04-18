<?php
/**
 * Template Name: International-School
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
</head>

<body <?php body_class(); ?>>

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


<?php wp_body_open(); ?>
	<?php // wp_footer(); ?>
	</body>
</html>