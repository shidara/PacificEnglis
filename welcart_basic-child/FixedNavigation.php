<?php
/**
 * FixedNavigation Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/navigation/";

  /**
   * URLチェック
   * インターナショナルスクール: 1
   * 英語教室: 2
   * オンライン英会話: 3
   * その他: 0
  */
  $currentNum = 0;
  if($_SERVER['REQUEST_URI']){
    $accessUrl = $_SERVER['REQUEST_URI'];

    if(strpos($accessUrl, 'international-school') !== false){
      $currentNum = 1;
    }elseif(strpos($accessUrl, 'english-class') !== false){
      $currentNum = 2;
    }elseif(strpos($accessUrl, 'online-english') !== false){
      $currentNum = 3;
    }
  }

  // クラス名の変更
  $internationalSchoolClass = 'FixedNavigation__item';
  $englishClass = 'FixedNavigation__item';
  $onlineEnglish = 'FixedNavigation__item';
  if($currentNum > 0){
    if($currentNum === 1){
      $internationalSchoolClass = 'FixedNavigation__item FixedNavigation__item--active';
    } elseif($currentNum === 2){
      $englishClass = 'FixedNavigation__item FixedNavigation__item--active';
    } elseif($currentNum === 3){
      $onlineEnglish = 'FixedNavigation__item FixedNavigation__item--active';
    }
  }
?>

<!-- PC用ナビゲーション -->
<nav class="FixedNavigation">
  <ul>
    <li class="FixedNavigation__item FixedNavigation__item--logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo $imgUri;?>/logo.webp" alt="パシフィックイングリッシュ ホーム" width="176" height="76" />
      </a>
    </li>

    <li class="<?php echo $internationalSchoolClass;?>">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>international-school/">
        <img src="<?php echo $imgUri;?>/nav-02.webp" alt="" width="170" height="72" class="FixedNavigation__itemThumbnail" />
        <div class="FixedNavigation__itemTitle">
          <p class="FixedNavigation__itemSubTitle">幼少期から身につけたい</p>
          <p class="FixedNavigation__itemTitleText">インターナショナル<br/>スクール</p>
        </div>
      </a>
    </li>

    <li class="<?php echo $englishClass;?>">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>english-class/">
        <img src="<?php echo $imgUri;?>/experience.webp" alt="" width="170" height="72" class="FixedNavigation__itemThumbnail" />
        <div class="FixedNavigation__itemTitle">
          <p class="FixedNavigation__itemSubTitle">放課後学習</p>
          <p class="FixedNavigation__itemTitleText">英語の教室</p>
        </div>
      </a>
    </li>

    <li class="<?php echo $onlineEnglish;?>">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>online-english/">
        <img src="<?php echo $imgUri;?>/nav-01.webp" alt="" width="170" height="72" class="FixedNavigation__itemThumbnail" />
        <div class="FixedNavigation__itemTitle">
          <p class="FixedNavigation__itemSubTitle">おうちで学習</p>
          <p class="FixedNavigation__itemTitleText">オンライン英会話</p>
        </div>
      </a>
    </li>

    <li class="FixedNavigation__item FixedNavigation__item--experience">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <p class="FixedNavigation__itemBeforeText">最短翌日から可能！</p>
        <img src="<?php echo $imgUri;?>/nav-03.webp" alt="" width="170" height="72" class="FixedNavigation__itemThumbnail" />
        <div class="FixedNavigation__itemTitle">
          <span class="FixedNavigation__itemExperienceButton">無料体験入学</span>
        </div>
      </a>
    </li>
  </ul>
</nav>