<?php
/**
 * Voice Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/top/";
  $jsonVoice = get_theme_file_uri() . '/assets/json/voice.json';
  $jsonContents = file_get_contents($jsonVoice);
  $arrVoice = json_decode($jsonContents,true);
?>

<section class="Voice">
  <div class="Voice__inner">
    <div class="Voice__title">
      <h3 class="Voice__titleText">Voice</h3>
      <p class="Voice__subTitle">親御様の声</p>
    </div>
    <p class="Voice__summary">インターナショナルスクール・英会話教室</p>
    <div class="Voice__stamp"><img src="<?php echo $imgUri;?>/32.webp" width="175" height="90" alt="" loading="lazy" /></div>

    <div class="Voice__contentsWrapper">
      <?php
        if($arrVoice){
          foreach($arrVoice as $v){
            echo '<div class="Voice__contents">
                    <div class="Voice__column">
                      <div class="Voice__columnItem">
                        <img src="' . $imgUri . '/' . $v['image'] . '" width="80" height="80" alt="" loading="lazy"/>
                      </div>

                      <div class="Voice__columnItem">
                        <p>' . $v['title'] . '</p>
                      </div>
                    </div>

                    <p class="Voice__contentsSummary">' . $v['summary'] . '</p>
                    <p class="Voice__contentsTag">' . $v['tag'] . '</p>
                  </div>';
          }
        }
      ?>
    </div>
  </div>
</section>