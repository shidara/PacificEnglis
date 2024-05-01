<?php
/**
 * Front-Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/top/";
?>
<?php get_header();?>

<?php get_template_part('mainImage'); ?>
<?php get_template_part('FixedNavigation'); ?>

  <!-- コンテンツ -->
  <main class="pageContents Top">
    <!-- ページタイトル -->
    <section class="PageTitleSection">
      <h2 class="PageTitleSection__title"><span class="PageTitleSection__titlePC">英語で世界が広がる</span><span class="PageTitleSection__titleSMP">世界が広がる</span><span class="PageTitleSection__titlePC">楽しい英語学習の第一歩</span><span class="PageTitleSection__titleSMP">英語で話そう!</span></h2>
      <p class="PageTitleSection__summary">創業40年の歴史で1万人以上の卒業生を輩出！<br/>大分県大分市で通える英語脳が身に付くインターナショナルスクールと英語教室</p>
    </section>

    <!-- News -->
    <section class="News">
      <div class="News__inner">
        <h2 class="News__title">News</h2>

        <?php
          $args = array(
              'post_type' => 'news',// 投稿タイプのスラッグを指定
              'posts_per_page' => 1, // 投稿件数の指定
            );
          $news_query = new WP_Query($args); if($news_query->have_posts()):

          while ($news_query->have_posts()):
          $news_query->the_post();
          $image_id = get_post_thumbnail_id();
          // メディアで設定したalt（代替テキスト）属性を取得
          $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
        ?>
        <a href="<?php the_permalink(); ?>" class="News__column">
          <div class="News__columnItem">
            <div class="News__thumbnail">
              <img src="<?php the_post_thumbnail_url();?>" alt="<?php echo $image_alt; ?>" width="119" height="88" loading="lazy" />
            </div>
          </div>
          <div class="News__columnItem">
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
            <p><?php echo get_the_title(); ?></p>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>まだ投稿がありません。</p>
        <?php endif; ?>
      </div>
    </section>

    <!-- Message -->
    <section class="Message">
      <div class="Message__inner">
        <div class="Message__stamp">
          <img src="<?php echo get_theme_file_uri();?>/assets/images/footer/606.webp" />
        </div>

          <div class="Message__titleWrapper">
            <p class="Message__subText">パシフィックイングリッシュだから</p>
            <p class="Message__title">こどもたちに愛と情熱を。<br />グローバル教育で<br />地域に愛され40年。</p>

            <div class="Message__thumbnail Message__thumbnail--pc">
              <img src="<?php echo $imgUri;?>/1.webp" width="450" height="300" loading="lazy" />
              <p class="Message__thumbnailCaption">開校当時のこどもたちと、創業者 原パトリシア</p>
            </div>
          </div>

        <p class="Message__summary">大分市内で英語教室・インターナショナルスクール（英語の保育園）を運営している当校は、ネイティブの先生主体の授業でプロフェッショナルな言動で国際人育成に愛と情熱を注ごうがモットーです。<br/>英語が喋れたり、読み書きの内容を理解できるだけでは本当の意味でのグローバル教育とはいえません。こどもの頃から外国人と日常的に触れ合うことで肌の色や文化の違いを当たり前の事として感じれる感覚こそが本当のグローバル感覚を養う事につながるのです。また、GSE(Global Scale of English)も導入しており、レベルを10から90のスケールで細分化し、学習指標(CAN-DO リスト) と紐づけ標準化した、グローバルで通用する英語習熟度指標です。<br/>英検や、TOEIC、TOEFL、各学校の中学・高校・大学受験などにも対応しております。だからこそ、1984年から大分市内で40年以上英語教室として、地域の皆様に愛され続けています。</p>
        <div class="Message__thumbnail Message__thumbnail--smp">
          <img src="<?php echo $imgUri;?>/1.webp" width="340" height="249" loading="lazy" />
          <p class="Message__thumbnailCaption">開校当時のこどもたちと、創業者 原パトリシア</p>
        </div>
      </div>
    </section>

    <!-- Our Features -->
    <section class="OurFeatures">
      <div class="OurFeatures__inner">
        <div class="OurFeatures__title">
          <h3 class="OurFeatures__titleText">Our Features</h3>
          <p class="OurFeatures__subTitle">大分市で選ばれ続ける理由</p>
        </div>
        <p class="OurFeatures__summary">インターナショナルスクール・英語教室</p>
        <div class="OurFeatures__stamp"><img src="<?php echo $imgUri;?>/32.webp" width="175" height="90" alt="" loading="lazy" /></div>

        <div class="OurFeatures__contents">
          <div class="OurFeatures__item">
            <img src="<?php echo $imgUri;?>/16.webp" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
            <div class="OurFeatures__itemTitleWrapper">
              <p class="OurFeatures__itemSubTitle"><span>01</span><span>選ばれてます</span></p>
              <h4 class="OurFeatures__itemTitle">大分県１校目の英語教室を創立</h4>
            </div>
            <p class="OurFeatures__itemSummary">創業者の原パトリシアはイリノイ州立大学教育学部英語学科卒業後にイリノイ州での高校英語教師の経験を経て１９８４年にパシフィックイングリッシュの先駆けとなるパトリシアイングリッシュスクールを大分県杵築市でスタートしました。教員免許をもった本物の英語講師の学校として直ぐに噂が広まり多くの方が英語を学びに来られました。</p>
          </div>

          <div class="OurFeatures__item">
            <img src="<?php echo $imgUri;?>/21.webp" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
            <div class="OurFeatures__itemTitleWrapper">
              <p class="OurFeatures__itemSubTitle"><span>02</span><span>選ばれてます</span></p>
              <h4 class="OurFeatures__itemTitle">豊富な講師による国際人育成プログラム</h4>
            </div>
            <p class="OurFeatures__itemSummary">英語が喋れたり、読み書きの内容を理解できるだけでは本当の意味でのグローバル教育とはいえません。子どもの頃から外国人と日常的に触れ合うことで肌の色や文化の違いを当たり前の事として感じれる感覚こそが本当のグローバル感覚を養う事につながるのです。</p>
          </div>

          <div class="OurFeatures__item">
            <img src="<?php echo $imgUri;?>/20.webp" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
            <div class="OurFeatures__itemTitleWrapper">
              <p class="OurFeatures__itemSubTitle"><span>03</span><span>選ばれてます</span></p>
              <h4 class="OurFeatures__itemTitle">総生徒数3万人越え</h4>
            </div>
            <p class="OurFeatures__itemSummary">有難いことに40年間の間に、総生徒数が1万人を超えました。地域の皆様に愛され続け、多くの方に英語を教えてきました。</p>
          </div>

          <div class="OurFeatures__item">
            <img src="<?php echo $imgUri;?>/2.webp" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
            <div class="OurFeatures__itemTitleWrapper">
              <p class="OurFeatures__itemSubTitle"><span>04</span><span>選ばれてます</span></p>
              <h4 class="OurFeatures__itemTitle">英語教室なのに<br/>バス送迎</h4>
            </div>
            <p class="OurFeatures__itemSummary">大分市の英語教室では珍しい、バスでの送迎サービスをご用意しております。保育所や小学校よりピックアップ、帰りはご自宅まで安全に送り届けますので、安心してお子様を預けていただけます。</p>
          </div>

          <div class="OurFeatures__item">
            <img src="<?php echo $imgUri;?>/15.webp" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
            <div class="OurFeatures__itemTitleWrapper">
              <p class="OurFeatures__itemSubTitle"><span>05</span><span>選ばれてます</span></p>
              <h4 class="OurFeatures__itemTitle">総生徒数1万人越え</h4>
            </div>
            <p class="OurFeatures__itemSummary">お受験英語ではなく、実際に外国に行った際に活用できる、リアルイングリッシュを学習していただき、諸外国でご活躍いただける、グローバル人材になっていただきます。</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Class -->
    <section class="Class">
      <div class="Class__inner">
        <div class="Class__title">
          <h3 class="Class__titleText">Class</h3>
          <p class="Class__subTitle">クラス紹介</p>
        </div>
        <p class="Class__summary">インターナショナルスクール・英会話教室</p>
        <div class="Class__stamp"><img src="<?php echo $imgUri;?>/31.webp" width="175" height="90" alt="" loading="lazy" /></div>

        <div class="Class__navigation">
          <nav class="Class__navigationList">
            <ul>
              <li class="Class__navigationItem">
                <a href="#Class-2">
                  <p class="Class__navigationItemTitle">英語の保育園</p>
                  <p class="Class__navigationItemSubText">International School</p>
                  <span class="Class__navigationItemIcon"><img src="<?php echo $imgUri;?>/arrow-wht-solo.webp" width="24" height="24" alt="" loading="lazy" /></span>
                </a>
              </li>

              <li class="Class__navigationItem">
                <a href="#Class-1">
                  <p class="Class__navigationItemTitle">英語教室</p>
                  <p class="Class__navigationItemSubText">After School</p>
                  <span class="Class__navigationItemIcon"><img src="<?php echo $imgUri;?>/arrow-wht-solo.webp" width="24" height="24" alt="" loading="lazy" /></span>
                </a>
              </li>

              <li class="Class__navigationItem">
                <a href="#Class-3">
                  <p class="Class__navigationItemTitle">オンライン英会話</p>
                  <p class="Class__navigationItemSubText">Online School</p>
                  <span class="Class__navigationItemIcon"><img src="<?php echo $imgUri;?>/arrow-wht-solo.webp" width="24" height="24" alt="" loading="lazy" /></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>

        <div class="Class__contents">
          <div id="Class-1" class="Class__item">
            <img src="<?php echo $imgUri;?>/17.webp" height="234" alt="" loading="lazy" class="Class__itemImage" />
            <div class="Class__itemInfo">
              <p class="Class__itemTag">2歳児〜OK</p>
              <h4 class="Class__itemTitle">英会話教室</h4>
              <p class="Class__itemSubText">英語脳が身に付く！インターナショナスクール</p>
              <p class="Class__itemSummary">バス送迎・給食制度・お預かり・保育の無償化制度など、親御さんも通わせやすいスクールです。また、大分市より指監第１０６８号（王子校）子企第３２４号（大在校）として認可外保育施設指導監査基準を満たしている施設としてお子様をお預かりして営業できる証明を頂いております。</p>
              <p class="Class__itemMore"><a href="<?php echo esc_url( home_url( '/' ) ); ?>english-class/"><span>くわしく見る</span><span class="Class__itemMoreIcon"><img src="<?php echo $imgUri;?>/arrow-wht-solo.webp" width="12" height="12" alt="" loading="lazy" /></span></a></p>
            </div>
          </div>

          <div id="Class-2" class="Class__item">
            <img src="<?php echo $imgUri;?>/18.webp" height="234" alt="" loading="lazy" class="Class__itemImage" />
            <div class="Class__itemInfo">
              <p class="Class__itemTag">2歳児〜OK</p>
              <h4 class="Class__itemTitle">英語の保育園</h4>
              <p class="Class__itemSubText">受験・試験対策にも！アフタースクール</p>
              <p class="Class__itemSummary">パシフィックイングリッシュで、読み・書き・発音の各スキルを効果的に身につけることが可能なフォニックスを基盤に英語力を飛躍的に伸ばしましょう。</p>
              <p class="Class__itemMore"><a href="<?php echo esc_url( home_url( '/' ) ); ?>international-school/"><span>くわしく見る</span><span class="Class__itemMoreIcon"><img src="<?php echo $imgUri;?>/arrow-wht-solo.webp" width="12" height="12" alt="" loading="lazy" /></span></a></p>
            </div>
          </div>

          <div id="Class-3" class="Class__item">
            <img src="<?php echo $imgUri;?>/19.webp" height="234" alt="" loading="lazy" class="Class__itemImage" />
            <div class="Class__itemInfo">
              <p class="Class__itemTag">小学生〜OK</p>
              <h4 class="Class__itemTitle">オンライン英会話</h4>
              <p class="Class__itemSubText">自分のペースでお家で英会話！</p>
              <p class="Class__itemSummary">自宅で楽しむ1対1のオンライン英会話。小学生からの会話力向上に最適です。</p>
              <p class="Class__itemMore"><a href="<?php echo esc_url( home_url( '/' ) ); ?>online-english/"><span>くわしく見る</span><span class="Class__itemMoreIcon"><img src="<?php echo $imgUri;?>/arrow-wht-solo.webp" width="12" height="12" alt="" loading="lazy" /></span></a></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Voice -->
    <?php get_template_part('voice'); ?>

    <!-- Blog -->
    <section class="Blog">
      <div class="Blog__inner">
        <div class="Blog__title">
          <h3 class="Blog__titleText">Blog</h3>
          <p class="Blog__subTitle">パシフィックブログ</p>
        </div>
        <p class="Blog__summary">インターナショナルスクール・英会話教室</p>

        <div class="Blog__contents">
          <?php
            $args = array(
              'post_type' => 'blog',// 投稿タイプのスラッグを指定
              'posts_per_page' => 4, // 投稿件数の指定 TODO: SMP: 2 PC: 4
            );
            $blog_query = new WP_Query($args); if($blog_query->have_posts()):

            while ($blog_query->have_posts()):
            $blog_query->the_post();
            $image_id = get_post_thumbnail_id();
            // メディアで設定したalt（代替テキスト）属性を取得
            $image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
            ?>
            <a href="<?php the_permalink(); ?>" class="Blog__column">
              <div class="Blog__columnItem">
                <img src="<?php the_post_thumbnail_url();?>" width="119" height="88" alt="<?php echo $image_alt; ?>" loading="lazy" class="Blog__columnItemImage" />
              </div>

              <div class="Blog__columnItem">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                <p><?php echo get_the_title(); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

          <?php else: ?>
            <p>まだ投稿がありません。</p>
          <?php endif; ?>
        </div>

        <div class="Blog__more">
          <a href="#">
            過去のブログはこちら
            <img src="<?php echo $imgUri;?>/blog1.webp" width="12" height="12" alt="" loading="lazy" />
          </a>
        </div>
      </div>
    </section>

    <!-- Hello World -->
    <?php get_template_part('helloWorld'); ?>

    <!-- Recruit -->
    <?php get_template_part('recruit'); ?>
  </main>

<?php get_footer();?>
