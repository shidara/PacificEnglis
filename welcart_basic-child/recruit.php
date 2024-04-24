<?php
/**
 * Recruit Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/footer/";
?>

<section class="Recruit">
  <div class="Recruit__title">
    <h3 class="Recruit__titleText">Recruit</h3>
    <p class="Recruit__subTitle ">採用情報</p>
  </div>

  <div class="Recruit__links">
    <ul>
      <li class="Recruit__linksItem">
        <a href="#">
          <div class="Recruit__linksItemThumbnail"><img src="<?php echo $imgUri;?>204.webp" loadding="lazy" /></div>
          <div class="Recruit__linksItemInfoWrapper">
            <div class="Recruit__linksItemInfo">
              <p class="Recruit__linksItemInfoTitle">日本人保育士</p>
            </div>
            <div class="Recruit__linksItemArrow"><img src="<?php echo $imgUri;?>98.webp" height="22" /></div>
          </div>
        </a>
      </li>

        <li class="Recruit__linksItem">
        <a href="#">
          <div class="Recruit__linksItemThumbnail"><img src="<?php echo $imgUri;?>205.webp" loadding="lazy" /></div>
          <div class="Recruit__linksItemInfoWrapper">
            <div class="Recruit__linksItemInfo">
              <p class="Recruit__linksItemInfoTitle Recruit__linksItemInfoTitleMedium">Childminder/ENG</p>
            </div>
            <div class="Recruit__linksItemArrow"><img src="<?php echo $imgUri;?>98.webp" height="22" /></div>
          </div>
        </a>
      </li>

        <li class="Recruit__linksItem">
        <a href="#">
          <div class="Recruit__linksItemThumbnail"><img src="<?php echo $imgUri;?>201.webp" loadding="lazy" /></div>
          <div class="Recruit__linksItemInfoWrapper">
            <div class="Recruit__linksItemInfo">
              <p class="Recruit__linksItemInfoTitle">運転手&nbsp;<span class="Recruit__linksItemInfoTitleSmall">普通免許ok</span></p>
            </div>
            <div class="Recruit__linksItemArrow"><img src="<?php echo $imgUri;?>98.webp" height="22" /></div>
          </div>
        </a>
      </li>
    </ul>
  </div>
</section>