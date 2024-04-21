<?php
/**
 * Template Name: Recruit
 *
 * @package Welcart
 * @subpackage Welcart_Basic
 */
?>
<?php get_header();?>

  <!-- コンテンツ -->
  <main class="pageContents EnglishClass">
    <!-- Recruit Module -->
    <section class="RecruitMain"></section>

    <!-- Hello World -->
    <?php get_template_part('helloWorld'); ?>

    <!-- Recruit -->
    <?php get_template_part('recruit'); ?>
  </main>

<?php get_footer();?>