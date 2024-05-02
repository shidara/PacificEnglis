<?php
/**
 * Member Page Template
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */

get_template_part('header-cart');
?>

<div class="MemberPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>マイページ</li>
    </ul>
  </section>

  <section class="MemberContents">
    <div class="MemberContents__title">
      <h3 class="MemberContents__titleText">MY PAGE</h3>
      <p class="MemberContents__subTitle MemberContents__subTitle--beforeIcon">マイページ</p>
    </div>

    <div class="MemberContents__inner" role="main">
      <?php if ( have_posts() ) : usces_remove_filter(); ?>
        <article class="post" id="wc_<?php usces_page_name(); ?>">
          <div id="memberpages">
            <div class="whitebox">
              <div id="memberinfo">

                <h4 class="MemberContents__itemTitle">会員情報</h4>

                <table>
                  <tr>
                    <th scope="row"><?php esc_html_e( 'member number', 'usces' ); ?></th>
                    <td class="num"><?php usces_memberinfo( 'ID' ); ?></td>
                    <th><?php esc_html_e( 'Strated date', 'usces' ); ?></th>
                    <td><?php usces_memberinfo( 'registered' ); ?></td>
                  </tr>
                  <tr>
                    <th scope="row"><?php esc_html_e( 'Full name', 'usces' ); ?></th>
                    <td><?php echo esc_html( sprintf( _x( '%s', 'honorific', 'usces' ), usces_localized_name( usces_memberinfo( 'name1', 'return' ), usces_memberinfo( 'name2', 'return' ), 'return' ) ) ); // phpcs:ignore ?></td>
                    <?php if ( usces_is_membersystem_point() ) : ?>
                      <th><?php esc_html_e( 'The current point', 'usces' ); ?></th>
                      <td class="num"><?php usces_memberinfo( 'point' ); ?></td>
                    <?php else : ?>
                      <th class="space"></th>
                      <td class="space"></td>
                    <?php endif; ?>
                  </tr>
                  <tr>
                    <th scope="row"><?php esc_html_e( 'e-mail adress', 'usces' ); ?></th>
                    <td><?php usces_memberinfo( 'mailaddress1' ); ?></td>
                    <?php $html_reserve = '<th class="space"></th><td class="space"></td>'; ?>
                    <?php echo apply_filters( 'usces_filter_memberinfo_page_reserve', $html_reserve, usces_memberinfo( 'ID', 'return' ) ); // phpcs:ignore ?>
                  </tr>
                </table>

                <div class="header_explanation">
                  <?php do_action( 'usces_action_memberinfo_page_header' ); ?>
                </div><!-- .header_explanation -->

                <h4 class="MemberContents__itemTitle">購入履歴</h4>

                <?php usces_member_history(); ?>

                <h4 class="MemberContents__itemTitle">会員情報編集</h4>
                <form action="<?php usces_url( 'member' ); ?>#edit" method="post" onKeyDown="if(event.keyCode == 13){return false;}">
                  <table class="customer_form">
                    <?php uesces_addressform( 'member', usces_memberinfo( null ), 'echo' ); ?>
                    <tr>
                      <th scope="row"><?php esc_html_e( 'e-mail adress', 'usces' ); ?></th>
                      <td colspan="2"><input name="member[mailaddress1]" id="mailaddress1" type="text" value="<?php usces_memberinfo( 'mailaddress1' ); ?>" /></td>
                    </tr>
                    <tr>
                      <th scope="row"><?php esc_html_e( 'password', 'usces' ); ?></th>
                      <td colspan="2"><input name="member[password1]" id="password1" type="password" value="<?php usces_memberinfo( 'password1' ); ?>" autocomplete="new-password" />
                      <?php esc_html_e( 'Leave it blank in case of no change.', 'usces' ); ?><?php wel_password_policy_message(); ?></td>
                    </tr>
                    <tr>
                      <th scope="row"><?php esc_html_e( 'Password (confirm)', 'usces' ); ?></th>
                      <td colspan="2"><input name="member[password2]" id="password2" type="password" value="<?php usces_memberinfo( 'password2' ); ?>" autocomplete="new-password" />
                      <?php esc_html_e( 'Leave it blank in case of no change.', 'usces' ); ?></td>
                    </tr>
                  </table>

                  <input name="member_regmode" type="hidden" value="editmemberform" />

                  <div class="send">
                    <input name="editmember" class="editmember" type="submit" value="会員情報を保存する" />
                    <input name="deletemember" class="deletemember" type="submit" value="<?php esc_attr_e( 'delete it', 'usces' ); ?>" onclick="return confirm('<?php esc_attr_e( 'All information about the member is deleted. Are you all right?', 'usces' ); ?>');" />
                  </div>

                  <?php do_action( 'usces_action_memberinfo_page_inform' ); ?>
                </form>

                <div class="footer_explanation">
                  <?php do_action( 'usces_action_memberinfo_page_footer' ); ?>
                </div><!-- .footer_explanation -->

              </div><!-- #memberinfo -->
            </div><!-- .whitebox -->
          </div><!-- #memberpages -->

        </article><!-- .post -->

      <?php else : ?>

        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'usces' ); ?></p>

      <?php endif; ?>
    </div>
  </section>

</div>
<?php
get_template_part('footer-cart');
