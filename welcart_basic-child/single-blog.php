<?php
  $imgUri = get_theme_file_uri() . "/assets/images/blog/";
?>
<?php get_header();?>
<?php get_template_part('FixedNavigation'); ?>

<!-- コンテンツ -->
<main class="pageContents BlogItemPage">
  <section class="Breadcrumbs">
    <ul>
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
      <li>ブログ</li>
    </ul>
  </section>

  <section class="BlogItem">
  <div class="BlogItem__inner">
    <div class="BlogList__title">
      <h3 class="BlogList__titleText">Blog</h3>
      <p class="BlogList__subTitle">ブログ</p>
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