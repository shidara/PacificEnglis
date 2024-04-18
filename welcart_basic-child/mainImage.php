<?php
/**
 * MainImage Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

?>

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