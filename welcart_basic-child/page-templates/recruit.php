<?php
/**
 * Template Name: Recruit
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/recruit/";
?>
<?php get_header();?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents RecruitPage">
  <!-- Recruit Module -->
  <section class="RecruitMain">
    <div class="RecruitMain__inner">
      <div class="RecruitMain__title">
        <h3 class="RecruitMain__titleText">Recruit</h3>
        <p class="RecruitMain__subTitle">採用情報</p>
      </div>

      <nav class="RecruitMain__navigation">
        <ul>
          <li class="RecruitMain__navigationItem">
            <a href="#RecruitMain_nav_1">
              <span class="RecruitMain__navigationItemText">日本人保育士<br />運転手(普通免許ok)</span>
              <span class="RecruitMain__navigationItemIcon"><img src="<?php echo $imgUri;?>/arrow_circle.webp" alt="" loading="lazy" /></span>
            </a>
          </li>

          <li class="RecruitMain__navigationItem">
            <a href="#RecruitMain_nav_2">
              <span class="RecruitMain__navigationItemText">childmainder/ENG</span>
              <span class="RecruitMain__navigationItemIcon"><img src="<?php echo $imgUri;?>/arrow_circle.webp" alt="" loading="lazy" /></span>
            </a>
          </li>
        </ul>
      </nav>

      <div class="RecruitMain__info">
        <div class="RecruitMain__thumbnail">
          <img src="<?php echo $imgUri;?>/23.webp" alt="" loading="lazy" />
        </div>

        <div>
          <div class="RecruitMain__titleList">
            <h4 class="RecruitMain__titleListText">働く環境</h4>
          </div>
          <p class="RecruitMain__summary">インターナショナルスクール（保育園）では7～15人のクラスを外国人教師と一緒に2人で担当してもらいます。学童保育は14時以降にお母さんのお迎えを待たれるお子様を外国人スタッフと一緒に遊びながら保育して頂きます。<br />英語ができないスタッフも長く働いてもらえているので安心してください！お子さんの学校の行事やご家庭の都合などみんなよくわかっているので助け合いながら勤務しています。利用されている親御さんも温かく見守って下さる方ばかりなので、安心して下さい。</p>
        </div>
      </div>

      <div id="RecruitMain_nav_1" class="RecruitMain__titleList RecruitMain__titleList--small">
        <h5 class="RecruitMain__titleListText">募集要項</h5>
      </div>

      <div class="RecruitMain__applicationRequirementsWrapper">
        <div class="RecruitMain__applicationRequirements">
          <table>
            <tr>
              <th>
                <p>職種</p>
              </th>
              <td>
                <p>日本人保育士</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>応募資格</p>
              </th>
              <td>
                <p>保育士資格</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>給与</p>
              </th>
              <td>
                <p>時給1,800〜</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>勤務地</p>
              </th>
              <td>
                <p>王子校または大在校</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>勤務時間</p>
              </th>
              <td>
                <p>9:00~14:00 / 14:00~18:00</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>仕事内容</p>
              </th>
              <td>
                <p>パシフィックイングリッシュは大分の英語教室です。パシフィックイングリッシュは大分の英語教室です。</p>
              </td>
            </tr>
          </table>

          <a href="#" class="RecruitMain__applicationRequirementsEntry">
            エントリーする
            <span class="RecruitMain__applicationRequirementsEntryIcon"></span>
          </a>
        </div>

        <div class="RecruitMain__applicationRequirements">
          <table>
            <tr>
              <th>
                <p>職種</p>
              </th>
              <td>
                <p>運転手</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>応募資格</p>
              </th>
              <td>
                <p>普通自動車免許</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>給与</p>
              </th>
              <td>
                <p>時給1,800〜</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>勤務地</p>
              </th>
              <td>
                <p>王子校または大在校</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>勤務時間</p>
              </th>
              <td>
                <p>9:00~14:00 / 14:00~18:00</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>仕事内容</p>
              </th>
              <td>
                <p>パシフィックイングリッシュは大分の英語教室です。パシフィックイングリッシュは大分の英語教室です。</p>
              </td>
            </tr>
          </table>

          <a href="#" class="RecruitMain__applicationRequirementsEntry">
            エントリーする
            <span class="RecruitMain__applicationRequirementsEntryIcon"></span>
          </a>
        </div>
      </div>

      <div class="RecruitMain__info">
        <div class="RecruitMain__thumbnail">
          <img src="<?php echo $imgUri;?>/23.webp" alt="" loading="lazy" />
        </div>

        <div>
          <div class="RecruitMain__titleList">
            <h4 class="RecruitMain__titleListText">working environment</h4>
          </div>
          <p class="RecruitMain__summary">At international schools (nursery schools), two students are in charge of a class of 7 to 15 students, together with a foreign teacher. After-school child care provides care for children who are waiting for their mothers to pick them up after 2:00 pm while playing with foreign staff.Don't worry, even the staff who can't speak English have been working for us for a long time! Everyone is very aware of their children's school events and family circumstances, so we work together and help each other out. Please rest assured that the parents who use our facilities will be watching over you warmly.</p>
        </div>
      </div>

      <div id="RecruitMain_nav_2" class="RecruitMain__titleList RecruitMain__titleList--small">
        <h5 class="RecruitMain__titleListText">Application<br />Requirements</h5>
      </div>

      <div class="RecruitMain__applicationRequirementsWrapper">
        <div class="RecruitMain__applicationRequirements RecruitMain__applicationRequirements--us">
          <table>
            <tr>
              <th>
                <p>Occupation</p>
              </th>
              <td>
                <p>childmainder</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>qualification</p>
              </th>
              <td>
                <p>childmainder</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>hourly wage</p>
              </th>
              <td>
                <p>1,800yen per hour </p>
              </td>
            </tr>

            <tr>
              <th>
                <p>Work location</p>
              </th>
              <td>
                <p>Oji school or Ozai school</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>Working hours</p>
              </th>
              <td>
                <p>9:00~14:00 / 14:00~18:00</p>
              </td>
            </tr>

            <tr>
              <th>
                <p>job description</p>
              </th>
              <td>
                <p>Pacific English is an English conversation school in Oita.Pacific English is an English conversation school in Oita.</p>
              </td>
            </tr>
          </table>

          <a href="#" class="RecruitMain__applicationRequirementsEntry">
            エントリーする
            <span class="RecruitMain__applicationRequirementsEntryIcon"></span>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 入園バナー PCのみ -->
  <?php get_template_part('enrollmentBanner'); ?>

  <!-- LinksNavigation PCのみ -->
  <?php get_template_part('linksNavigation'); ?>

  <!-- Hello World -->
  <?php get_template_part('helloWorld'); ?>

  <!-- Recruit -->
  <?php get_template_part('recruit'); ?>
</main>

<?php get_footer();?>