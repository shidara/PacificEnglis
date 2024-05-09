<?php
/**
 * Template Name: International-School
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

  $imgUri = get_theme_file_uri() . "/assets/images/international-school/";
?>
<?php get_header();?>

<?php get_template_part('mainImage'); ?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents InternationalSchool">
  <!-- ページタイトル -->
  <section class="PageTitleSection">
    <p class="PageTitleSection__subText">本物の英語が学べる</p>
    <h2 class="PageTitleSection__title PageTitleSection__title--small">インターナショナルスクール</h2>
    <p class="PageTitleSection__summary PageTitleSection__summary--black">バス送迎・給食制度・お預かり・保育の無償化制度など、親御さんも通わせやすいスクールです。また、大分市より指監第１０６８号（王子校）子企第３２４号（大在校）として認可外保育施設指導監査基準を満たしている施設としてお子様をお預かりして営業できる証明を頂いております。</p>
  </section>

  <!-- バナー -->
  <section class="Banner">
    <div class="Banner__inner">
      <img src="<?php echo $imgUri;?>/banner001.webp" alt="" loading="lazy" />
    </div>
  </section>

  <!-- Importance -->
  <section class="Importance">
    <div class="Importance__inner">
      <div class="Importance__title">
        <h3 class="Importance__titleText">Importance</h3>
        <p class="Importance__subTitle"><span class="Importance__subTitleOrange">幼少期</span>からの英語の重要性</p>
      </div>
      <p class="Importance__subText">インターナショナルスクール・英会話教室</p>
      <p class="Importance__summary">小学校入学前の貴重な時期を、英語の世界で輝かせましょう。当インターナショナルスクールは、2歳から5歳までのお子様が、日々の生活の中で英語を自然に身につけることを目指しています。このゴールデンエイジに、読み書きと会話の基礎を提供することで、大分にいながらにしてバイリンガルへの道を拓きます。独自のフォニックス教育により、語学の基礎をしっかりと学び、世界に向けて第一歩を踏み出す準備を整えます。</p>
    </div>
  </section>

  <!-- Lesson -->
  <section class="Lesson">
    <div class="Lesson__inner">
      <div class="Lesson__title">
        <h3 class="Lesson__titleText">Lesson</h3>
        <p class="Lesson__subTitle"><span class="Lesson__subTitleOrange">年齢別</span>・おもなレッスン内容</p>
      </div>
      <p class="Lesson__summary">インターナショナルスクール・英会話教室</p>

      <div class="Lesson__contents">
        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">2</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview"><span class="Lesson__itemOverviewOrange">アルファベットの発音が聞き取れ、</span>リピートできるようになる</p>
            </div>
          </div>
          <p class="Lesson__itemSummary">日常生活で先生との会話を理解し、行動できるボキャブラリーを身に付けたり、筆圧を養うための色塗りに取り組んだり、Nクラスの準備を整えます。</p>
        </div>

        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">3</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview">アルファベットの<span class="Lesson__itemOverviewOrange">大文字・小文字を書けるようになる</span></p>
            </div>
          </div>
          <p class="Lesson__itemSummary">年度の終わりでは、３文字ほどの短い単語がかける力も身に付いていきます。</p>
        </div>

        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">4</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview">１年を通して単語を書く練習をし、<span class="Lesson__itemOverviewOrange">フォニックスの応用をマスターする</span></p>
            </div>
          </div>
          <p class="Lesson__itemSummary">先生が話す英語を耳で聞き、書けるようになってきます。また、少しずつ長い文章を書く練習も始まります。</p>
        </div>

        <div class="Lesson__item">
          <div class="Lesson__itemColumn">
            <div class="Lesson__itemColumnItem">
              <span class="Lesson__itemAge">5</span>
              <span class="Lesson__itemClass">歳児クラス</span>
            </div>
            <div class="Lesson__itemColumnItem">
              <p class="Lesson__itemOverview">毎日の出来事を自分で考え、<span class="Lesson__itemOverviewOrange">英語で日記を書けるようになる</span></p>
            </div>
          </div>
          <p class="Lesson__itemSummary">プレゼンテーションの作り方や意見発表の方法を学ぶことができ、協調性を持ちながら自分の意見を発言できるようになります。</p>
        </div>

      </div>

    </div>
  </section>

  <!-- STEAM -->
  <section class="Steam">
    <div class="Steam__inner">
      <div class="Steam__title">
        <h3 class="Steam__titleText">STEAM</h3>
        <p class="Steam__subTitle">21世紀型の学びの手法<span class="Steam__subTitleOrange">STEAM教育で</span><br />グローバルな人材教育</p>
      </div>
      <p class="Steam__summary">インターナショナルスクール・英会話教室</p>

      <div class="Steam__image">
        <div class="Steam__imageFullWidthImage">
          <span><img src="<?php echo $imgUri;?>/steam/science.webp" alt="" loading="lazy" /></span>
          <span><img src="<?php echo $imgUri;?>/steam/technology.webp" alt="" loading="lazy" /></span>
          <span><img src="<?php echo $imgUri;?>/steam/engineering.webp" alt="" loading="lazy" /></span>
          <span><img src="<?php echo $imgUri;?>/steam/art.webp" alt="" loading="lazy" /></span>
          <span><img src="<?php echo $imgUri;?>/steam/mathematic.webp" alt="" loading="lazy" /></span>
        </div>
        <div class="Steam__imageMedia">
          <img src="<?php echo $imgUri;?>/steam01.webp" alt="" loading="lazy" />
        </div>
      </div>
      <p class="Steam__Subject"><span>S:Science（科学）</span><span>T:Technology（技術）</span><span>E:Engineering（工学）</span><span>A:Art（芸術・教養）</span><span>M:Mathematics（数学）</span></p>
      <p class="Steam__summary">この5つの要素を重要視した教育である「STEAM教育」は科学的な知識だけでなく、教養や考え方、デザイン性など、子どもの自由な発想で創造性を膨らませ、問題解決を図る力を身に付けるための学びの領域として、IT社会とグローバル社会に適応した人材を多く生み出そうとする世界的にも注目されている21世紀型の学びの手法です。小学校の授業でもタブレットの導入やプログラミングの授業が必須となりました。テクノロジーを活用しながら自分で学び、自分で理解し、自発性や創造性、判断力、問題解決力といった能力を高めるため、さまざまなカリキュラムを準備しています。当スクールでのたくさんの学びを通じて、独自の創造性（クリエイティビティ）につなげていきます。</p>
    </div>
  </section>

  <!-- Programming Curriculum -->
  <section class="ProgrammingCurriculum">
    <div class="ProgrammingCurriculum__inner">
      <div class="ProgrammingCurriculum__title">
        <h3 class="ProgrammingCurriculum__titleText">Programming <span class="ProgrammingCurriculum__titleTextBlack">Curriculum</span></h3>
      </div>

      <p class="ProgrammingCurriculum__labelWrapper"><span class="ProgrammingCurriculum__label">算数カリキュラム</span></p>

      <div class="ProgrammingCurriculum__contents">
        <div class="ProgrammingCurriculum__item">
          <div class="ProgrammingCurriculum__itemTitle">
            <h4 class="ProgrammingCurriculum__itemTitleText">キュベット</h4>
            <p class="ProgrammingCurriculum__itemSubTitle">3歳・4歳児クラス</p>
          </div>
          <p class="ProgrammingCurriculum__itemSummary">STEAM教育へのアプローチとしてNクラス及びK1クラスでは、プログラミング玩具の「キュベット」を用いたコーディング練習を取り入れています。「キュベット」は、手を使って学ぶコーディングが特長で、子どもの自発的な発見と学びを尊重するモンテッソーリ教育に着想を得た“思考力・判断力・表現力”を育むことに適した教材です。</p>
        </div>

        <div class="ProgrammingCurriculum__item">
          <div class="ProgrammingCurriculum__itemTitle">
            <h4 class="ProgrammingCurriculum__itemTitleText">スクラッチJr</h4>
            <p class="ProgrammingCurriculum__itemSubTitle">５歳児クラス</p>
          </div>
          <p class="ProgrammingCurriculum__itemSummary">K2クラスではタブレットを使い、スクラッチJr ※を用いたビジュアルプログラミングを学びます。</p>
          <p class="ProgrammingCurriculum__itemNote">※スクラッチJr…マサチューセッツ工科大学（MIT）メディアラボのライフロングキンダーガーデングループにより開発されたアプリケーション</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sports -->
  <section class="Sports">
    <div class="Sports__inner">
      <div class="Sports__titleWrapper">
        <div class="Sports__thumbnail">
          <img src="<?php echo $imgUri;?>/2.webp" alt="" loading="lazy" />
        </div>
        <div>
          <div class="Sports__title">
            <h3 class="Sports__titleText">Sports</h3>
            <p class="Sports__subTitle">体育 / 昔の遊び</p>
          </div>
          <p class="Sports__summary">子供の運動神経が著しく発達する時期をゴールデンエイジといいます。この時期のすごし方が、子供の運動神経、能力に大きな影響を与えます。</p>
        </div>
      </div>


      <div class="Sports__contents">
        <div class="Sports__item">
          <div class="Sports__itemTitle">
            <h4 class="Sports__itemTitleText">体育</h4>
            <p class="Sports__itemSubTitle">Physical Education</p>
          </div>
          <p class="Sports__itemSummary">体幹とバランス感覚を鍛えることを目的に、学年に合わせて鉄棒や跳び箱、マット運動を中心としたトレーニングを取り入れています。<br />体幹を鍛えることには、運動能力の向上や体力づくり、けがの予防だけでなく、良い姿勢を保つことから学習意欲の向上や自己抑制といった心理面にもプラスの効果をもたらします。</p>
        </div>

        <div class="Sports__item">
          <div class="Sports__itemTitle">
            <h4 class="Sports__itemTitleText">昔の遊び</h4>
            <p class="Sports__itemSubTitle">Funfit</p>
          </div>
          <p class="Sports__itemSummary">「おにごっこ」や「はないちもんめ」、「だるまさんがころんだ」など、昔ながらの遊びは今の子どもたちも夢中に楽しめる要素が多く含まれています。真剣に遊ぶことで、無意識のうちに子どもの運動量を増やし、丈夫な体づくりや運動神経の発達も促し、基礎体力を培うことができます。</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Life Skills -->
  <section class="LifeSkills">
    <div class="LifeSkills__inner">
      <div class="LifeSkills__titleWrapper">
        <div class="LifeSkills__thumbnail">
          <img src="<?php echo $imgUri;?>/1.webp" alt="" loading="lazy" />
        </div>
        <div>
          <div class="LifeSkills__title">
            <h3 class="LifeSkills__titleText">Life Skills</h3>
            <p class="LifeSkills__subTitle">生活スキル</p>
          </div>
          <p class="LifeSkills__summary">自分のことは自分で。英語だけではない、生きる力を磨く</p>
        </div>
      </div>

      <p class="LifeSkills__summary LifeSkills__summary--black">生活スキルは、日々の積み重ねで身に付いていくものです。子どもの気分によってできる日もあれば、なかなかうまくいかない日もあります。そんなときに家庭と一緒に当スクールの大人たちが寄り添ってサポートしていきたいと考えています。<br />朝の登園後、まず自分の荷物を整理整頓し、ボランティアの時間では教室や近くの公園の清掃をします。外から帰ったあとや食事の前には必ず手洗いをし、食後に歯を磨きます。Ｎクラスからは宿題を毎日こつこつと取り組む習慣を身に付け、小学校入学後も自主的に取り組むことができるようになります。<br />このように、当スクールでの集団行動の中で、お友だちと一緒にやるということに楽しみを見いだすことができ、毎日の生活を当たり前に過ごすことで生活習慣が自然と身に付いていきます。<br />脳の発達の仕組みにより、６歳までの生活習慣で人間の基礎能力が固まると言われています。当スクールでは、その大切な時期の生活スキルをサポートをし、子どもたちの小学校までの準備のお手伝いをしていきます。</p>
    </div>
  </section>

  <!-- Weekly Schedule -->
  <section class="WeeklySchedule">
    <div class="WeeklySchedule__title">
      <h3 class="WeeklySchedule__titleText">Weekly Schedule</h3>
      <p class="WeeklySchedule__subTitle">週間スケジュール</p>
    </div>
    <p class="WeeklySchedule__summary">大まかな時間割は共通ですが、Tクラスはレッスン内容が異なります。</p>

    <div class="WeeklySchedule__contents">
      <div class="WeeklySchedule__tabLabel">
        <div class="WeeklySchedule__tabLabelButton">
          <label for="tab_1">
            <span class="WeeklySchedule__tabLabelTitle"><span class="WeeklySchedule__tabLabelTitleText">N・K1・K2クラス</span><span class="WeeklySchedule__tabLabelSubTitle">3-5歳児</span></span>
          </label>
          <input type="radio" name="tab" id="tab_1" checked />
        </div>

        <div class="WeeklySchedule__tabLabelButton">
          <label for="tab_2">
            <span class="WeeklySchedule__tabLabelTitle"><span class="WeeklySchedule__tabLabelTitleText">Tクラス</span><span class="WeeklySchedule__tabLabelSubTitle">2歳児</span></span>
          </label>
          <input type="radio" name="tab" id="tab_2" />
        </div>
      </div>

      <div class="WeeklySchedule__tabContents">
        <!-- Panel 1 -->
        <div id="tab_contents_1" class="WeeklySchedule__tabContentsPanel">
          <div class="WeeklySchedule__tabContentsPanelTitle">
            <p class="WeeklySchedule__tabContentsPanelTitleText">N・K1・K2クラス</p>
            <p class="WeeklySchedule__tabContentsPanelSubText">3-5歳児</p>
            <p class="WeeklySchedule__tabContentsPanelSummary">大まかな時間割は共通ですが、Tクラスはレッスン内容が異なります。</p>
          </div>

          <div class="WeeklySchedule__schedule">
            <table>
              <tr>
                <th class="WeeklySchedule__scheduleFixed WeeklySchedule__scheduleTop"></th>
                <th class="WeeklySchedule__scheduleTop"><span>Monday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Tuesday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Wednesday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Thursday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Friday</span></th>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>09:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div>
                      <p class="WeeklySchedule__scheduleTableDataTitle">【登園・プレイタイム】</p>
                      <p class="WeeklySchedule__scheduleTableDataText">登園したら荷物を片付けてお友達と英語で遊びましょう</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>09:30</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div class="WeeklySchedule__scheduleTableDataInner">
                    <p class="WeeklySchedule__scheduleTableDataTitle">【モーニングミーティング】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">朝の体操の後は毎月違うテーマに沿った歌やボキャブラリーを学びます。<br />曜日や天気もみんなで確認します。</p>
                    <div class="WeeklySchedule__scheduleTableDataStamp"><img src="https://dummyimage.com/210x90/0f0/fff.png" alt="" loading="lazy" /></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>10:10</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">算数</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">プログラミング</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">自然とボランティア</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">昔の遊び</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">算数</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>11:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">昔の遊び</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">音楽</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>11:45</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【ランチタイム】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">食べ終わったら、後片付けをして歯ブラシタイムです。</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>12:20</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【プレイタイム】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">お友達や先生と英語でお喋りしながら、いっぱい遊びましょう。</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>13:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン3】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">体育</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン3】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン3】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">アート</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン3】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン3】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">体育</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>13:45</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div class="WeeklySchedule__scheduleTableDataInner">
                    <p class="WeeklySchedule__scheduleTableDataTitle">【グッバイミーティング】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">その日の出来事を振り返った後でグッバイソングを歌います。<br/>時間がある日は英語の絵本の読み聞かせがあります。</p>
                    <div class="WeeklySchedule__scheduleTableDataStamp"><img src="https://dummyimage.com/210x90/0f0/fff.png" alt="" loading="lazy" /></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>14:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div class="WeeklySchedule__scheduleTableDataTitle">【下校】</div>
                </td>
              </tr>
            </table>
          </div>

          <div class="WeeklySchedule__scheduleDownLoadButton">
            <a href="#" class="WeeklySchedule__scheduleDownLoadButtonLink">ダウンロードする</a>
          </div>
        </div>

        <!-- Panel 2 -->
        <div id="tab_contents_2" class="WeeklySchedule__tabContentsPanel">
          <div class="WeeklySchedule__tabContentsPanelTitle">
            <p class="WeeklySchedule__tabContentsPanelTitleText">Tクラス</p>
            <p class="WeeklySchedule__tabContentsPanelSubText">2歳児</p>
            <p class="WeeklySchedule__tabContentsPanelSummary">大まかな時間割は共通ですが、Tクラスはレッスン内容が異なります。</p>
          </div>

          <div class="WeeklySchedule__schedule">
            <table>
              <tr>
                <th class="WeeklySchedule__scheduleFixed WeeklySchedule__scheduleTop"></th>
                <th class="WeeklySchedule__scheduleTop"><span>Monday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Tuesday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Wednesday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Thursday</span></th>
                <th class="WeeklySchedule__scheduleTop"><span>Friday</span></th>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>09:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div>
                      <p class="WeeklySchedule__scheduleTableDataTitle">【登園・プレイタイム】</p>
                      <p class="WeeklySchedule__scheduleTableDataText">登園したら荷物を片付けてお友達と英語で遊びましょう</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>09:30</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div class="WeeklySchedule__scheduleTableDataInner">
                    <p class="WeeklySchedule__scheduleTableDataTitle">【モーニングミーティング】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">朝の体操の後は毎月違うテーマに沿った歌やボキャブラリーを学びます。<br />曜日や天気もみんなで確認します。</p>
                    <div class="WeeklySchedule__scheduleTableDataStamp"><img src="https://dummyimage.com/210x90/0f0/fff.png" alt="" loading="lazy" /></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>10:10</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi" colspan="5">
                  <div>
                      <p class="WeeklySchedule__scheduleTableDataTitle">【プレイタイム】</p>
                      <p class="WeeklySchedule__scheduleTableDataText">指先を使った遊びを中心に集中力を養っていきます。</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>11:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">

                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">音楽</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン1】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>11:45</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【ランチタイム】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">食べ終わったら、後片付けをして歯ブラシタイムです。</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>12:20</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【プレイタイム】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">お友達や先生と英語でお喋りしながら、いっぱい遊びましょう。</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>13:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">アート</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">体育</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">英語</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">自然とボランティア</p>
                  </div>
                </td>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--multi">
                  <div>
                    <p class="WeeklySchedule__scheduleTableDataTitle">【レッスン2】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">体育</p>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>13:45</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div class="WeeklySchedule__scheduleTableDataInner">
                    <p class="WeeklySchedule__scheduleTableDataTitle">【グッバイミーティング】</p>
                    <p class="WeeklySchedule__scheduleTableDataText">その日の出来事を振り返った後でグッバイソングを歌います。<br/>時間がある日は英語の絵本の読み聞かせがあります。</p>
                    <div class="WeeklySchedule__scheduleTableDataStamp"><img src="https://dummyimage.com/210x90/0f0/fff.png" alt="" loading="lazy" /></div>
                  </div>
                </td>
              </tr>
              <tr>
                <th class="WeeklySchedule__scheduleFixed"><span>14:00</span></th>
                <td class="WeeklySchedule__scheduleTableData WeeklySchedule__scheduleTableData--single" colspan="5">
                  <div class="WeeklySchedule__scheduleTableDataTitle">【下校】</div>
                </td>
              </tr>
            </table>
          </div>

          <div class="WeeklySchedule__scheduleDownLoadButton">
            <a href="#" class="WeeklySchedule__scheduleDownLoadButtonLink">ダウンロードする</a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Voice -->
  <?php get_template_part('voice'); ?>

  <!-- Hello World -->
  <?php get_template_part('helloWorld'); ?>

  <!-- Recruit -->
  <?php get_template_part('recruit'); ?>
</main>

<?php get_footer();?>