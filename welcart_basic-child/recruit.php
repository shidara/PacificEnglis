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
  <div class="Recruit__inner">
    <div class="Recruit__innerTitle">
      <div class="Recruit__title">
        <h3 class="Recruit__titleText">Recruit</h3>
        <p class="Recruit__subTitle ">採用情報</p>
      </div>

      <div class="Recruit__info">
        <p>パシフィックイングリッシュでは、10代から70代まで、世界10カ国以上の国々から集まったスタッフが働いています。このダイバーシティに富んだ環境で、本当の意味でのグローバルな経験を積みたい方、ぜひお気軽にご連絡ください。随時面接を行っております。</p>
        <p>At Pacific English, we have a diverse team with staff ranging in age from their teens to their seventies, representing over 10 different countries. If you are interested in gaining truly global experience in this diverse environment, please feel free to contact us. We are always conducting interviews.</p>
      </div>
    </div>

    <div class="Recruit__links">
      <ul>
        <li class="Recruit__linksItem">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit/#RecruitMain_nav_1">
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
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit/#RecruitMain_nav_2">
            <div class="Recruit__linksItemThumbnail"><img src="<?php echo $imgUri;?>205.webp" loadding="lazy" /></div>
            <div class="Recruit__linksItemInfoWrapper">
              <div class="Recruit__linksItemInfo">
                <p class="Recruit__linksItemInfoTitle Recruit__linksItemInfoTitleMedium">Careers<br/>Working at Pacific English</p>
              </div>
              <div class="Recruit__linksItemArrow"><img src="<?php echo $imgUri;?>98.webp" height="22" /></div>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>