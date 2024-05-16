<?php
/**
 * MainImage Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
  $imgUri = get_theme_file_uri() . "/assets/images/top/";
  $imageList = ['01.webp','02.webp','03.webp','04.webp']
?>

<div class="MainImage">
  <div class="MainImage__inner">
    <div class="MainImageSlider swiper js-homeMainVisualSlider">
      <div class="swiper-wrapper">
        <?php
          foreach($imageList as $value) {
            echo '<div class="swiper-slide">
                    <picture>
                      <img src="' . $imgUri . $value . '" alt="">
                    </picture>
                  </div>';
          }
        ?>
      </div>

      <div class="MainImage__info">
        <div>
          <p class="MainImage__infoTitle">英語の保育園</p>
        </div>
        <div><img src="<?php echo $imgUri;?>/arrow-wht.webp" alt="" width="32" height="32" /></div>
      </div>

    </div>

    <div class="MainImage__progress">
      <div class="progress js-progress">
        <?php
          foreach($imageList as $value) {
            echo '<span></span>';
          }
        ?>
      </div>
    </div>
  </div>
</div>