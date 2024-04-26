<?php
/**
 * カート用ヘッダー
 */
  $imgUri = get_theme_file_uri() . "/assets/images/navigation/";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">
  <link rel="stylesheet" href=<?php echo get_template_directory_uri().'-child/assets/css/style.css?ver='.date("YmdHi");?>>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

    <header class="Header Header--cart" role="banner">
      <div class="Header__inner">
        <div class="Logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Logo__link">
            <img src="<?php echo $imgUri;?>/logo.webp" alt="パシフィックイングリッシュ ホーム" width="124" height="54" />
          </a>
        </div>

        <div class="Header__cartNavigation">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>/usces-member/">
            <img src="<?php echo $imgUri; ?>/person.webp" alt="マイページ" class="Header__cartNavigationIcon" />
          </a>

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>usces-cart/">
            <img src="<?php echo $imgUri; ?>/cart.webp" alt="カート" class="Header__cartNavigationIcon" />
          </a>
        </div>
      </div>
    </header>