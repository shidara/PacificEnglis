<?php
/**
 * MainImage Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
  $imgUri = get_theme_file_uri() . "/assets/images/top/";
  // 画像リスト
  $jsonMainImageLinks = get_theme_file_uri() . '/assets/json/mainImageLinks.json';
  $jsonMainImage = file_get_contents($jsonMainImageLinks);
  $arrMainImage = json_decode($jsonMainImage,true);
?>

<div class="MainImage">
  <div class="MainImage__inner">
    <div class="MainImageSlider swiper js-homeMainVisualSlider">
      <div class="swiper-wrapper">
        <?php
        if($arrMainImage){
          foreach($arrMainImage as $value) {
            echo '<div class="swiper-slide">
                    <picture>
                      <img src="' . $imgUri . $value['image'] . '" alt="">
                    </picture>
                  </div>';
          }
        }
        ?>
      </div>

      <div class="MainImage__info js-MainImage__info">
        <?php
          if($arrMainImage){
            foreach($arrMainImage as $value) {
              echo '<a href="' . $value['url'] . '">
                      <p class="MainImage__infoTitle">' . $value['text'] . '</p>
                      <div><img src="' . $imgUri . '/arrow-wht.webp" alt="" width="32" height="32" /></div>
                    </a>';
            }
          }
        ?>
      </div>

    </div>

    <div class="MainImage__progress">
      <div class="progress js-progress">
        <?php
          if($arrMainImage){
            foreach($arrMainImage as $value) {
              echo '<span></span>';
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>