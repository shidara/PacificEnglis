<?php
/**
 * Front-Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no"/>
  <link rel="stylesheet" href=<?php echo get_template_directory_uri().'-child/assets/css/style.css?ver='.date("YmdHi");?>>
	<?php wp_head(); ?>
  <style>
    @charset "UTF-8";
/*
 * 個別に作成したcssファイルを読み込む用
*/
/*================================
Base
================================*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Zen+Kaku+Gothic+New&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
:root {
  --color-wht: #fff;
  --color-blk: #252525;
  --color-primary: #f93c00;
  --color-pacific-gray-a: #e9e9e9;
  --color-pacific-gray-b: #f9f9f9;
  --color-pacific-orange-a: #cf371c;
  --color-pacific-orange-b: #ff8739;
  --color-pacific-orange-c: #ffcdc4;
}

/*================================
Reset CSS
================================*/
button {
  margin: 0;
  padding: 0;
  border: 0;
  appearance: none;
  background-color: transparent;
}

.Header {
  position: relative;
  background-color: green;
}
.Header .Header__inner {
  display: flex;
  justify-content: space-between;
}
.Header .Header__inner a {
  display: block;
}
.Header .Header__navButton {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 48px;
  height: 48px;
  border-radius: 0 0 0 8px;
  font-size: 12px;
  font-weight: 700;
  color: var(--color-wht);
  background-color: var(--color-primary);
}
.Header button {
  margin: 0;
  padding: 0;
  border: 0;
  appearance: none;
  background-color: transparent;
}
  </style>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="Header" role="banner">
  <div class="Header__inner">
    <div class="Logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="Logo__link">
        <img src="https://dummyimage.com/248x108/f27d53/fff.png" alt="パシフィックイングリッシュ ホーム" width="124" height="54" />
      </a>
    </div>
    <button class="Header__navButton">MENU</button>


    <div class="Navigation">
      <div class="Navigation__closeWrapper"></div>
      <nav>
        <ul class="Navigation__menu">
          <li class="Navigation__item">
            <a href="#" class="Navigation__itemInner">
              <div>
                <p class="Navigation__menuTitle">International  School</p>
                <p class="Navigation__menuSubText">インターナショナルスクール</p>
              </div>
              <div class="Navigation__itemThumbnail">
                <img src="https://dummyimage.com/155x65/f27d53/fff.png" width="124" height="52" alt="" loading="lazy" />
              </div>
            </a>
          </li>
          <li class="Navigation__item">
            <a href="#" class="Navigation__itemInner">
              <div>
                <p class="Navigation__menuTitle">After  School</p>
                <p class="Navigation__menuSubText">英語の教室</p>
              </div>
              <div class="Navigation__itemThumbnail">
                <img src="https://dummyimage.com/155x65/f27d53/fff.png" width="124" height="52" alt="" loading="lazy" />
              </div>
            </a>
          </li>
          <li class="Navigation__item">
            <a href="#" class="Navigation__itemInner">
              <div>
                <p class="Navigation__menuTitle">Online  School</p>
                <p class="Navigation__menuSubText">オンライン英会話</p>
              </div>
              <div class="Navigation__itemThumbnail">
                <img src="https://dummyimage.com/155x65/f27d53/fff.png" width="124" height="52" alt="" loading="lazy" />
              </div>
            </a>
          </li>
        </ul>
      </nav>

      <div class="Navigation__footerThumbnail">
        <a href="#">
          <img src="https://dummyimage.com/300x183/f27d53/fff.png" width="300" height="183" />
        </a>
      </div>

      <div class="Navigation__footerLinks">
        <ul class="Navigation__footerLinksList">
          <li class="Navigation__footerLinksItem"><a href="#">On the job</a></li>
          <li class="Navigation__footerLinksItem"><a href="#">講師紹介</a></li>
          <li class="Navigation__footerLinksItem"><a href="#">ブログ</a></li>
          <li class="Navigation__footerLinksItem"><a href="#">求人</a></li>
        </ul>
      </div>

    </div>
  </div>
</header>


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


  <!-- コンテンツ -->
  <main class="pageContents Top">
    <!-- メッセージ -->
    <section class="Top__mainMessageSection">
      <h2 class="Top__mainMessageTitle">世界が広がる<br />英語で話そう!</h2>
      <p class="Top__mainMessage">創業40年の歴史で1万人以上の卒業生を輩出！<br/>大分県大分市で通える英語脳が身に付くインターナショナルスクールと英語教室</p>
    </section>
    <!-- News -->
    <section class="News">
      <h2 class="News__title">News</h2>
      <div class="News__column">
        <div class="News__columnItem">
          <div class="News__thumbnail">
            <img src="https://dummyimage.com/119x88/f27d53/fff.png" width="119" height="88" loading="lazy" />
          </div>
        </div>
        <div class="News__columnItem">
          <time>2024.02.19</time>
          <p>【幼児・小学生】無料体験レッスンの募集をはじめまあああああ</p>
        </div>
      </div>
    </section>

    <!-- Message -->
    <section class="Message">
      <div class="Message__inner">
        <p class="Message__subText">パシフィックイングリッシュだから</p>
        <p class="Message__title">こどもたちに愛と情熱を。<br />グローバル教育で<br />地域に愛され40年。</p>
        <p class="Message__summary">大分市内で英語教室・インターナショナルスクール（英語の保育園）を運営している当校は、ネイティブの先生主体の授業でプロフェッショナルな言動で国際人育成に愛と情熱を注ごうがモットーです。<br/>英語が喋れたり、読み書きの内容を理解できるだけでは本当の意味でのグローバル教育とはいえません。こどもの頃から外国人と日常的に触れ合うことで肌の色や文化の違いを当たり前の事として感じれる感覚こそが本当のグローバル感覚を養う事につながるのです。また、GSE(Global Scale of English)も導入しており、レベルを10から90のスケールで細分化し、学習指標(CAN-DO リスト) と紐づけ標準化した、グローバルで通用する英語習熟度指標です。<br/>英検や、TOEIC、TOEFL、各学校の中学・高校・大学受験などにも対応しております。だからこそ、1984年から大分市内で40年以上英語教室として、地域の皆様に愛され続けています。</p>
        <div><img src="https://dummyimage.com/340x249/f27d53/fff.png" width="340" height="249" /></div>
      </div>
    </section>

    <!-- Our Features -->
    <section class="OurFeatures">
      <div class="OurFeatures__title">
        <h3 class="OurFeatures__titleText">Our Features</h3>
        <p class="OurFeatures__subTitle">大分市で選ばれ続ける理由</p>
      </div>
      <p class="OurFeatures__summary">インターナショナルスクール・英語教室</p>
      <div class="OurFeatures__stamp"><img src="https://dummyimage.com/175x90/f27d53/fff.png" width="175" height="90" alt="" loading="lazy" /></div>

      <div class="OurFeatures__contents">
        <div class="OurFeatures__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
          <p class="OurFeatures__itemSubTitle"><img src="https://dummyimage.com/32x29/f27d53/fff.png" width="32" height="29" alt="" loading="lazy" class="" />選ばれてます</p>
          <h4 class="OurFeatures__itemTitle">大分県１校目の英語教室を創立</h4>
          <p class="OurFeatures__itemSummary">創業者の原パトリシアはイリノイ州立大学教育学部英語学科卒業後にイリノイ州での高校英語教師の経験を経て１９８４年にパシフィックイングリッシュの先駆けとなるパトリシアイングリッシュスクールを大分県杵築市でスタートしました。教員免許をもった本物の英語講師の学校として直ぐに噂が広まり多くの方が英語を学びに来られました。</p>
        </div>

         <div class="OurFeatures__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
          <p class="OurFeatures__itemSubTitle"><img src="https://dummyimage.com/32x29/f27d53/fff.png" width="32" height="29" alt="" loading="lazy" class="" />選ばれてます</p>
          <h4 class="OurFeatures__itemTitle">豊富な講師による国際人育成プログラム</h4>
          <p class="OurFeatures__itemSummary">英語が喋れたり、読み書きの内容を理解できるだけでは本当の意味でのグローバル教育とはいえません。子どもの頃から外国人と日常的に触れ合うことで肌の色や文化の違いを当たり前の事として感じれる感覚こそが本当のグローバル感覚を養う事につながるのです。</p>
        </div>

         <div class="OurFeatures__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
          <p class="OurFeatures__itemSubTitle"><img src="https://dummyimage.com/32x29/f27d53/fff.png" width="32" height="29" alt="" loading="lazy" class="" />選ばれてます</p>
          <h4 class="OurFeatures__itemTitle">総生徒数3万人越え</h4>
          <p class="OurFeatures__itemSummary">有難いことに40年間の間に、総生徒数が1万人を超えました。地域の皆様に愛され続け、多くの方に英語を教えてきました。</p>
        </div>

        <div class="OurFeatures__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
          <p class="OurFeatures__itemSubTitle"><img src="https://dummyimage.com/32x29/f27d53/fff.png" width="32" height="29" alt="" loading="lazy" class="" />選ばれてます</p>
          <h4 class="OurFeatures__itemTitle">英語教室なのに<br/>バス送迎</h4>
          <p class="OurFeatures__itemSummary">大分市の英語教室では珍しい、バスでの送迎サービスをご用意しております。保育所や小学校よりピックアップ、帰りはご自宅まで安全に送り届けますので、安心してお子様を預けていただけます。</p>
        </div>

        <div class="OurFeatures__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="OurFeatures__itemImage" />
          <p class="OurFeatures__itemSubTitle"><img src="https://dummyimage.com/32x29/f27d53/fff.png" width="32" height="29" alt="" loading="lazy" class="" />選ばれてます</p>
          <h4 class="OurFeatures__itemTitle">総生徒数1万人越え</h4>
          <p class="OurFeatures__itemSummary">お受験英語ではなく、実際に外国に行った際に活用できる、リアルイングリッシュを学習していただき、諸外国でご活躍いただける、グローバル人材になっていただきます。</p>
        </div>
      </div>
    </section>

    <!-- Class -->
    <section class="Class">
      <div class="Class__title">
        <h3 class="Class__titleText">Class</h3>
        <p class="Class__subTitle">クラス紹介</p>
      </div>
      <p class="Class__summary">インターナショナルスクール・英会話教室</p>
      <div class="Class__stamp"><img src="https://dummyimage.com/175x90/f27d53/fff.png" width="175" height="90" alt="" loading="lazy" /></div>

      <div class="Class__navigation">
        <nav class="Class__navigationList">
          <ul>
            <li class="Class__navigationItem">
              <a href="#Class-2">
                <p class="Class__navigationItemTitle">英語の保育園</p>
                <p class="Class__navigationItemSubText">International School</p>
                <span class="Class__navigationItemIcon">↓</span>
              </a>
            </li>

            <li class="Class__navigationItem">
              <a href="#Class-1">
                <p class="Class__navigationItemTitle">英語教室</p>
                <p class="Class__navigationItemSubText">After School</p>
                <span class="Class__navigationItemIcon">↓</span>
              </a>
            </li>

            <li class="Class__navigationItem">
              <a href="#Class-3">
                <p class="Class__navigationItemTitle">オンライン英会話</p>
                <p class="Class__navigationItemSubText">Online School</p>
                <span class="Class__navigationItemIcon">↓</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>

      <div class="Class__contents">
        <div id="Class-1" class="Class__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="Class__itemImage" />
          <p class="Class__itemTag">2歳児〜OK</p>
          <h4 class="Class__itemTitle">英会話教室</h4>
          <p class="Class__itemSubText">英語脳が身に付く！インターナショナスクール</p>
          <p class="Class__itemSummary">バス送迎・給食制度・お預かり・保育の無償化制度など、親御さんも通わせやすいスクールです。また、大分市より指監第１０６８号（王子校）子企第３２４号（大在校）として認可外保育施設指導監査基準を満たしている施設としてお子様をお預かりして営業できる証明を頂いております。</p>
          <p class="Class__itemMore"><a href="#"><span>くわしく見る</span><span class="Class__itemMoreIcon">→</span></a></p>
        </div>

         <div id="Class-2" class="Class__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="Class__itemImage" />
          <p class="Class__itemTag">2歳児〜OK</p>
          <h4 class="Class__itemTitle">英語の保育園</h4>
          <p class="Class__itemSubText">受験・試験対策にも！アフタースクール</p>
          <p class="Class__itemSummary">パシフィックイングリッシュで、読み・書き・発音の各スキルを効果的に身につけることが可能なフォニックスを基盤に英語力を飛躍的に伸ばしましょう。</p>
          <p class="Class__itemMore"><a href="#"><span>くわしく見る</span><span class="Class__itemMoreIcon">→</span></a></p>
        </div>

         <div id="Class-3" class="Class__item">
          <img src="https://dummyimage.com/350x234/f27d53/fff.png" height="234" alt="" loading="lazy" class="Class__itemImage" />
          <p class="Class__itemTag">小学生〜OK</p>
          <h4 class="Class__itemTitle">オンライン英会話</h4>
          <p class="Class__itemSubText">自分のペースでお家で英会話！</p>
          <p class="Class__itemSummary">自宅で楽しむ1対1のオンライン英会話。小学生からの会話力向上に最適です。</p>
          <p class="Class__itemMore"><a href="#"><span>くわしく見る</span><span class="Class__itemMoreIcon">→</span></a></p>
        </div>
      </div>
    </section>

    <!-- Voice -->
    <section class="Voice">
      <div class="Voice__title">
        <h3 class="Voice__titleText">Voice</h3>
        <p class="Voice__subTitle">親御様の声</p>
      </div>
      <p class="Voice__summary">インターナショナルスクール・英会話教室</p>
      <div class="Voice__stamp"><img src="https://dummyimage.com/175x90/f27d53/fff.png" width="175" height="90" alt="" loading="lazy" /></div>

      <div class="Voice__contents">
        <div class="Voice__column">
          <div class="Voice__columnItem">
            <img src="https://dummyimage.com/80x80/f27d53/fff.png" width="80" height="80" alt="" loading="lazy" class="Voice__columnItemImage" />
          </div>

          <div class="Voice__columnItem">
            <p>忙しい中でも英語学習を続けられています！</p>
          </div>
        </div>
        <p class="Voice__contentsSummary">自宅で学べるオンラインレッスンのおかげで、忙しい中でも英語学習を続けられています。息子も自然に英会話ができるようになり、発音も格段に良くなりました。</p>
        <p class="Voice__contentsTag">小学2年生｜クラスオンライン</p>
      </div>

       <div class="Voice__contents">
        <div class="Voice__column">
          <div class="Voice__columnItem">
            <img src="https://dummyimage.com/80x80/f27d53/fff.png" width="80" height="80" alt="" loading="lazy" class="Voice__columnItemImage" />
          </div>

          <div class="Voice__columnItem">
            <p>自然な形で英語に触れられているんだなと実感</p>
          </div>
        </div>
        <p class="Voice__contentsSummary">インターナショナルスクールに通わせて本当に良かったと思います。息子が毎日英語で歌を歌って帰ってくるのを聞くと、自然な形で英語に触れられているんだなと実感します。保育園での経験が、息子の将来に大きな影響を与えてくれるんだなと思って見守っています。</p>
        <p class="Voice__contentsTag">4歳児｜クラスインターナショナルスクール</p>
      </div>

      <div class="Voice__contents">
        <div class="Voice__column">
          <div class="Voice__columnItem">
            <img src="https://dummyimage.com/80x80/f27d53/fff.png" width="80" height="80" alt="" loading="lazy" class="Voice__columnItemImage" />
          </div>

          <div class="Voice__columnItem">
            <p>ニーズに合わせて指導してくれる</p>
          </div>
        </div>
        <p class="Voice__contentsSummary">オンラインレッスンは、我が家にとって最高の選択でした。娘がレッスンを楽しみにしており、英語での会話に自信を持ち始めているのを見ると、本当に感謝しています。1対1のレッスンで、彼女のニーズに合わせて指導してくれるのが大きなポイントです。</p>
        <p class="Voice__contentsTag">小学5年生｜クラスオンライン</p>
      </div>

         <div class="Voice__contents">
        <div class="Voice__column">
          <div class="Voice__columnItem">
            <img src="https://dummyimage.com/80x80/f27d53/fff.png" width="80" height="80" alt="" loading="lazy" class="Voice__columnItemImage" />
          </div>

          <div class="Voice__columnItem">
            <p>アットホームな雰囲気と実践的なレッスン</p>
          </div>
        </div>
        <p class="Voice__contentsSummary">うちの子が英会話をこんなに楽しんでいるとは思いませんでした。授業参観日に見学した教室のアットホームな雰囲気と、実践的なレッスンが彼女の成長につながっているのだと思います。いつもありがとうございます。</p>
        <p class="Voice__contentsTag">2歳児｜クラスインターナショナルスクール</p>
      </div>
    </section>

    <!-- Blog -->
    <section class="Blog">
      <div class="Blog__title">
        <h3 class="Blog__titleText">Blog</h3>
        <p class="Blog__subTitle">パシフィックブログ</p>
      </div>
      <p class="Blog__summary">インターナショナルスクール・英会話教室</p>

      <div class="Blog__contents">
        <div class="Blog__column">
          <div class="Blog__columnItem">
            <img src="https://dummyimage.com/119x88/f27d53/fff.png" width="119" height="88" alt="" loading="lazy" class="Blog__columnItemImage" />
          </div>

          <div class="Blog__columnItem">
            <time>2024/02/29</time>
            <p>幼児・小学生】無料体験レッスンの募集をはじめまあああああ</p>
          </div>
        </div>

         <div class="Blog__column">
          <div class="Blog__columnItem">
            <img src="https://dummyimage.com/119x88/f27d53/fff.png" width="119" height="88" alt="" loading="lazy" class="Blog__columnItemImage" />
          </div>

          <div class="Blog__columnItem">
            <time>2024/02/29</time>
            <p>幼児・小学生】無料体験レッスンの募集をはじめまあああああ</p>
          </div>
        </div>
      </div>

      <div class="Blog__more">
        <a href="#">
          過去のブログはこちら
          <img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" alt="" loading="lazy" />
        </a>
      </div>
    </section>

    <!-- Hello World -->
    <section class="HelloWorld">
      <div class="HelloWorld__title">
        <h3 class="HelloWorld__titleText">HelloWorld</h3>
        <p class="HelloWorld__subTitle">一生モノの英語脳を身につけて、広い世界を体験しよう。</p>
      </div>
      <p class="HelloWorld__summary">お気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せくださいお気軽にお問合せください</p>

      <div class="HelloWorld__tell">
        <a href="tel:0975387350">
          <p class="HelloWorld__tellTitle">日本人スタッフが対応します</p>
          <div class="HelloWorld__tellNumber">
            <span class="HelloWorld__tellNumberIcon"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="10" height="17" alt="" /></span>
            <span class="HelloWorld__tellNumberText">097-538-7350</span>
          </div>
          <p class="HelloWorld__tellTime">受付時間 10:00-19:00</p>
        </a>
      </div>

      <div class="HelloWorld__experience">
        <a href="#">
          <p class="HelloWorld__experienceTitle">&nbsp;&nbsp;&nbsp;最短翌日から可能！<br /><span class="HelloWorld__experienceTitleLarge">4</span>ステップで予約完了<span class="HelloWorld__experiencePin"><img src="https://dummyimage.com/38x38/f27d53/fff.png" width="38" height="38" alt="" /></span></p>
          <div class="HelloWorld__experienceLine">
            <span class="HelloWorld__experienceLineIcon"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="10" height="17" alt="" /></span>
            <span class="HelloWorld__experienceLineText">無料体験入学</span>
          </div>

        </a>
      </div>
    </section>

    <!-- Recruit -->
    <section class="Recruit">
      <div class="Recruit__title">
        <h3 class="Recruit__titleText">Recruit</h3>
        <p class="Recruit__subTitle ">採用情報</p>
      </div>

      <div class="Recruit__links">
        <ul>
          <li class="Recruit__linksItem">
            <a href="#">
              <div><img src="https://dummyimage.com/167x190/f27d53/fff.png" loadding="lazy" /></div>
              <div class="Recruit__linksItemInfoWrapper">
                <div class="Recruit__linksItemInfo">
                  <p class="Recruit__linksItemInfoTitle">日本人保育士</p>
                </div>
                <div class="Recruit__linksItemArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="6" height="6" /></div>
              </div>
            </a>
          </li>

           <li class="Recruit__linksItem">
            <a href="#">
              <div><img src="https://dummyimage.com/167x190/f27d53/fff.png" loadding="lazy" /></div>
              <div class="Recruit__linksItemInfoWrapper">
                <div class="Recruit__linksItemInfo">
                  <p class="Recruit__linksItemInfoTitle Recruit__linksItemInfoTitleMedium">Childminder/ENG</p>
                </div>
                <div class="Recruit__linksItemArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="6" height="6" /></div>
              </div>
            </a>
          </li>

           <li class="Recruit__linksItem">
            <a href="#">
              <div><img src="https://dummyimage.com/167x190/f27d53/fff.png" loadding="lazy" /></div>
              <div class="Recruit__linksItemInfoWrapper">
                <div class="Recruit__linksItemInfo">
                  <p class="Recruit__linksItemInfoTitle">運転手&nbsp;<span class="Recruit__linksItemInfoTitleSmall">普通免許ok</span></p>
                </div>
                <div class="Recruit__linksItemArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="6" height="6" /></div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <!-- フッター -->
  <footer class="Footer">
    <div class="Footer__title">
      <h3 class="Footer__titleText">For<br/>Instagram</h3>
      <p class="Footer__subTitle">スクールライフをインスタグラムで投稿中!</p>
    </div>

    <div class="Footer__imageList">
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
      <div class="Footer__imageItem">
        <img src="https://dummyimage.com/160x160/f27d53/fff.png" alt="" />
      </div>
    </div>

    <div class="Footer__officialAccount">
      <a href="#" class="Footer__officialAccountLinks">
        <img src="https://dummyimage.com/26x26/f27d53/fff.png" width="26" height="26" loading="lazy" class="Footer__officialAccountImage" />
        <span>公式アカウントはこちら</span>
      </a>
    </div>

    <hr class="Footer__divider" />

    <div class="Footer__navigation">
      <ul>
        <li class="Footer__navigationItem">
          <a href="" class="Footer__navigationLink">
            <div class="Footer__navigationInfo">
              <p class="Footer__navigationInfoTitle">インターナショナル</p>
              <p class="Footer__navigationInfoText">スクール</p>
            </div>
            <div class="Footer__navigationArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" /></div>
          </a>
        </li>

         <li class="Footer__navigationItem">
          <a href="" class="Footer__navigationLink">
            <div class="Footer__navigationInfo">
              <p class="Footer__navigationInfoTitle">放課後</p>
              <p class="Footer__navigationInfoText">スクール</p>
            </div>
            <div class="Footer__navigationArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" /></div>
          </a>
        </li>

         <li class="Footer__navigationItem">
          <a href="" class="Footer__navigationLink">
            <div class="Footer__navigationInfo">
              <p class="Footer__navigationInfoTitle">オンライン</p>
              <p class="Footer__navigationInfoText">スクール</p>
            </div>
            <div class="Footer__navigationArrow"><img src="https://dummyimage.com/26x26/f27d53/fff.png" width="12" height="12" /></div>
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
          <div class="Footer__schoolItemMap"></div>
        </li>

        <li class="Footer__schoolItem">
          <h4 class="Footer__schoolItemTitle">大在校</h4>
          <p class="Footer__schoolItemAddress">〒870-0251</p>
          <p class="Footer__schoolItemAddress">大分県大分市大在中央１丁目８−８</p>
          <div class="Footer__schoolItemMap"></div>
        </li>
      </ul>
    </div>

    <!-- リンクス -->
    <div class="Footer__links">
      <ul>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
        <li class="Footer__linksItem"><a href="#">サイトコンテンツ</a></li>
      </ul>
    </div>

    <!-- instagram -->
    <div class="Footer__instagram">
      <a href="#"><img src="https://dummyimage.com/36x36/f27d53/fff.png" loading="lazy"/></a>
    </div>

    <small class="Footer__small">©Pacific English</small>
  </footer>
	<?php // wp_footer(); ?>
	</body>
</html>