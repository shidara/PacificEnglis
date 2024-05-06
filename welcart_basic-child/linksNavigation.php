<?php
/**
 * LinksNavigation Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

$imgUri = get_theme_file_uri() . "/assets/images/english-class/";

?>
<div class="LinksNavigation">
  <ul>
    <li class="LinksNavigation__item" style="background-image: url('<?php echo $imgUri;?>/23.webp');">
      <a href="#">
        <div>
          <p class="LinksNavigation__itemTitle">Contact</p>
          <p class="LinksNavigation__itemSubText">体験・予約する</p>
        </div>
        <div class="LinksNavigation__itemIcon">
          <img src="<?php echo $imgUri;?>/arrow.webp" loading="lazy" />
        </div>
      </a>
    </li>
    <li class="LinksNavigation__item" style="background-image: url('<?php echo $imgUri;?>/23.webp');">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>instructor-list/">
        <div>
          <p class="LinksNavigation__itemTitle">Teachers</p>
          <p class="LinksNavigation__itemSubText">講師を見る</p>
        </div>
        <div class="LinksNavigation__itemIcon">
          <img src="<?php echo $imgUri;?>/arrow.webp" loading="lazy" />
        </div>
      </a>
    </li>
    <li class="LinksNavigation__item" style="background-image: url('<?php echo $imgUri;?>/23.webp');">
      <a href="#">
        <div>
          <p class="LinksNavigation__itemTitle">Company</p>
          <p class="LinksNavigation__itemSubText">会社を知る</p>
        </div>
        <div class="LinksNavigation__itemIcon">
          <img src="<?php echo $imgUri;?>/arrow.webp" loading="lazy" />
        </div>
      </a>
    </li>
  </ul>
</div>