<?php
/**
 * Footer Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/footer/";
?>

  <!-- フッター -->
  <footer class="Footer">
    <div class="Footer__inner">
      <div class="Footer__innerColumn">
        <div class="Footer__title">
          <h3 class="Footer__titleText">For<br/>Instagram</h3>
          <p class="Footer__subTitle">スクールライフを<br />インスタグラムで投稿中!</p>

          <div class="Footer__officialAccount">
            <a href="https://www.instagram.com/pacific_english_oita/" target="_blank" rel="noreferrer" class="Footer__officialAccountLinks">
              <img src="<?php echo $imgUri;?>instagram-logo-bold.webp" width="26" height="26" loading="lazy" class="Footer__officialAccountImage" />
              <span>公式アカウントはこちら</span>
            </a>
          </div>
        </div>

        <div class="Footer__imageList">
          <div class="Footer__imageItem">
            <img src="<?php echo $imgUri;?>ig_1.webp" alt="" loading="lazy"/>
          </div>
          <div class="Footer__imageItem">
            <img src="<?php echo $imgUri;?>ig_2.webp" alt="" loading="lazy" />
          </div>
          <div class="Footer__imageItem">
            <img src="<?php echo $imgUri;?>ig_3.webp" alt="" loading="lazy" />
          </div>
          <div class="Footer__imageItem">
            <img src="<?php echo $imgUri;?>ig_4.webp" alt="" loading="lazy" />
          </div>
          <div class="Footer__imageItem">
            <img src="<?php echo $imgUri;?>ig_5.webp" alt="" loading="lazy" />
          </div>
          <div class="Footer__imageItem">
            <img src="<?php echo $imgUri;?>ig_6.webp" alt="" loading="lazy" />
          </div>
        </div>
      </div>

      <div class="Footer__officialAccount">
        <a href="https://www.instagram.com/pacific_english_oita/" target="_blank" rel="noreferrer" class="Footer__officialAccountLinks">
          <img src="<?php echo $imgUri;?>instagram-logo-bold.webp" width="26" height="26" loading="lazy" class="Footer__officialAccountImage" />
          <span>公式アカウントはこちら</span>
        </a>
      </div>

      <hr class="Footer__divider" />

      <div class="Footer__navigation">
        <ul>
          <li class="Footer__navigationItem">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>international-school/" class="Footer__navigationLink">
              <div class="Footer__navigationInfo">
                <p class="Footer__navigationInfoTitle">インターナショナル</p>
                <p class="Footer__navigationInfoText">スクール</p>
              </div>
              <div class="Footer__navigationArrow"><img src="<?php echo $imgUri;?>98.webp" height="32" /></div>
            </a>
          </li>

          <li class="Footer__navigationItem">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>english-class/" class="Footer__navigationLink">
              <div class="Footer__navigationInfo">
                <p class="Footer__navigationInfoTitle">放課後</p>
                <p class="Footer__navigationInfoText">スクール</p>
              </div>
              <div class="Footer__navigationArrow"><img src="<?php echo $imgUri;?>98.webp" height="32" /></div>
            </a>
          </li>

          <li class="Footer__navigationItem">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>online-english/" class="Footer__navigationLink">
              <div class="Footer__navigationInfo">
                <p class="Footer__navigationInfoTitle">オンライン</p>
                <p class="Footer__navigationInfoText">スクール</p>
              </div>
              <div class="Footer__navigationArrow"><img src="<?php echo $imgUri;?>98.webp" height="32" /></div>
            </a>
          </li>
        </ul>
      </div>

      <hr class="Footer__divider" />

      <!-- 学校の種類 -->
      <div class="Footer__school">
        <ul class="Footer__schoolList">
          <li class="Footer__schoolItem">
            <h4 class="Footer__schoolItemTitle">王子校</h4>
            <p class="Footer__schoolItemAddress">〒870-0009</p>
            <p class="Footer__schoolItemAddress">大分県大分市王子町４−４</p>
            <div class="Footer__schoolItemMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.8659851151506!2d131.58871101278748!3d33.243814173361415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3546a1d020f48253%3A0xdf81074f3ce8b3f!2z44CSODcwLTAwMDkg5aSn5YiG55yM5aSn5YiG5biC546L5a2Q55S677yU4oiS77yU!5e0!3m2!1sja!2sjp!4v1713067349205!5m2!1sja!2sjp" width="100%" height="189" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </li>

          <li class="Footer__schoolItem">
            <h4 class="Footer__schoolItemTitle">大在校</h4>
            <p class="Footer__schoolItemAddress">〒870-0251</p>
            <p class="Footer__schoolItemAddress">大分県大分市大在中央１丁目８−８</p>
            <div class="Footer__schoolItemMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3336.8016713162847!2d131.7158512127875!3d33.245498873360454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35442778349bc525%3A0x79195580825c837f!2z44CSODcwLTAyNTEg5aSn5YiG55yM5aSn5YiG5biC5aSn5Zyo5Lit5aSu77yR5LiB55uu77yY4oiS77yY!5e0!3m2!1sja!2sjp!4v1713067483603!5m2!1sja!2sjp" width="100%" height="189" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </li>
        </ul>
      </div>

      <!-- リンクス -->
      <div class="Footer__links">
        <ul>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホーム</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>international-school/">インターナショナルスクール</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>english-class/">英語の教室</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>online-english/">オンライン英会話</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>instructor-list/">講師紹介</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">ブログ</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>recruit/">採用情報</a></li>
          <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>shop/">オンラインショップ</a></li>
          <!-- <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">サイトコンテンツ</a></li> -->
          <!-- <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">サイトコンテンツ</a></li> -->
          <!-- <li class="Footer__linksItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">サイトコンテンツ</a></li> -->
        </ul>
      </div>

      <!-- instagram -->
      <div class="Footer__instagramWrapper">
        <div class="Footer__instagram">
          <a href="https://www.instagram.com/pacific_english_oita/" target="_blank" rel="noreferrer"><img src="<?php echo $imgUri;?>instagram-logo-bold-white.webp" height="36" loading="lazy"/></a>
        </div>

        <small class="Footer__small">©Pacific English</small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>

