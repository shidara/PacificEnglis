<?php
/**
 * Header Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */


  $imgUri = get_theme_file_uri() . "/assets/images/navigation/";
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <link rel="stylesheet" href=<?php echo get_template_directory_uri().'-child/assets/css/style.css?ver='.date("YmdHi");?>>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <header class="Header" role="banner">
    <div class="Header__inner">
      <div class="Logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Logo__link">
          <img src="<?php echo $imgUri;?>/logo.webp" alt="パシフィックイングリッシュ ホーム" width="124" height="54" />
        </a>
      </div>
      <button class="Header__navButton">MENU</button>


      <div class="Navigation">
        <div class="Navigation__closeWrapper"></div>
        <nav>
          <ul class="Navigation__menu">
            <li class="Navigation__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>international-school/" class="Navigation__itemInner">
                <div>
                  <p class="Navigation__menuTitle">International  School</p>
                  <p class="Navigation__menuSubText">インターナショナルスクール</p>
                </div>
                <div class="Navigation__itemThumbnail">
                  <img src="<?php echo $imgUri;?>nav-01.webp" width="124" height="52" alt="" loading="lazy" />
                </div>
              </a>
            </li>
            <li class="Navigation__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>english-class/" class="Navigation__itemInner">
                <div>
                  <p class="Navigation__menuTitle">After  School</p>
                  <p class="Navigation__menuSubText">英語の教室</p>
                </div>
                <div class="Navigation__itemThumbnail">
                  <img src="<?php echo $imgUri;?>nav-02.webp" width="124" height="52" alt="" loading="lazy" />
                </div>
              </a>
            </li>
            <li class="Navigation__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>online-english/" class="Navigation__itemInner">
                <div>
                  <p class="Navigation__menuTitle">Online  School</p>
                  <p class="Navigation__menuSubText">オンライン英会話</p>
                </div>
                <div class="Navigation__itemThumbnail">
                  <img src="<?php echo $imgUri;?>nav-03.webp" width="124" height="52" alt="" loading="lazy" />
                </div>
              </a>
            </li>
          </ul>
        </nav>

        <div class="Navigation__footerThumbnail">
          <a href="#">
            <p class="Navigation__footerThumbnailTitle">最短翌日から可能！</p>
            <img src="<?php echo $imgUri;?>experience.webp" alt="" loading="lazy" />
            <p class="Navigation__footerThumbnailButton">無料体験入学</p>
          </a>
        </div>

        <div class="Navigation__footerLinks">
          <ul class="Navigation__footerLinksList">
            <li class="Navigation__footerLinksItem"><a href="#">On the job</a></li>
            <li class="Navigation__footerLinksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>instructor-list/">講師紹介</a></li>
            <li class="Navigation__footerLinksItem"><a href="#">ブログ</a></li>
            <li class="Navigation__footerLinksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit/">求人</a></li>
          </ul>
        </div>

      </div>
    </div>
  </header>