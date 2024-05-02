<?php
/**
 * Template Name: Notation
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>

<?php get_header();?>
  <!-- コンテンツ -->
  <main class="pageContents NotationPage">
    <section class="Breadcrumbs">
      <ul>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
        <li>特定商取引法に基づく表記</li>
      </ul>
    </section>

    <section class="Notation">
      <div class="Notation__title">
        <h3 class="Notation__titleText">Notation</h3>
        <p class="Notation__subTitle Notation__subTitle--beforeIcon">特定商取引法に基づく表記</p>
      </div>

      <div class="Notation__table">
        <table>
          <tr>
            <th><div>販売業者</div></th>
            <td>株式会社 パシフィック・イングリッシュ</td>
          </tr>
          <tr>
            <th><div>代表責任者</div></th>
            <td>原 ジェームス 稔</td>
          </tr>
          <tr>
            <th><div>所在地</div></th>
            <td>〒870-0009 大分県大分市王子町4-4</td>
          </tr>
          <tr>
            <th><div>電話番号</div></th>
            <td>0120-322-985</td>
          </tr>
          <tr>
            <th><div>電話受付時間</div></th>
            <td>08:00～18:00</td>
          </tr>
          <tr>
            <th><div>ホームページURL</div></th>
            <td>https://www.pacificenglish.jp/</td>
          </tr>
          <tr>
            <th><div>販売価格</div></th>
            <td>商品詳細ページをご参照ください。</td>
          </tr>
          <tr>
            <th><div>商品代金以外の必要料金</div></th>
            <td>消費税（10%）<br />振込手数料（振込の場合）</td>
          </tr>
          <tr>
            <th><div>引き渡し時期</div></th>
            <td>ご注文から10日以内にお届け致します。</td>
          </tr>
          <tr>
            <th><div>配送方法</div></th>
            <td>ヤマト運送の普通便でお届けします。。</td>
          </tr>
          <tr>
            <th><div>お支払方法</div></th>
            <td>銀行振込、クレジットカード決済</td>
          </tr>
          <tr>
            <th><div>返品・交換・キャンセル等</div></th>
            <td>商品発送後のキャンセル、返品・交換等はお受け致しかねます。<br />商品が不良の場合のみ良品と交換致します。</td>
          </tr>
          <tr>
            <th><div>返品期限</div></th>
            <td>商品出荷より７日以内にご連絡下さい。</td>
          </tr>
          <tr>
            <th><div>返品送料</div></th>
            <td>返品送料につきましてはお客様負担となります。</td>
          </tr>
        </table>
      </div>
    </section>
  </main>

<?php get_template_part('footer-cart');?>