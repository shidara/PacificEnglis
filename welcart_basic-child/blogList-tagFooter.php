<?php
  $imgUri = get_theme_file_uri() . "/assets/images/blog/";
  $tax_type01 = 'blog-category'; // タクソノミー
  // タグ
  $tags = get_terms( array( 'taxonomy'=> $tax_type01, 'get'=>'all' ) );
?>
<div class="BlogList__tagFooter">
  <h2 class="BlogList__tagFooterTitle"><img src="<?php echo $imgUri;?>/tag.webp" alt="" loading="lazy" /><span>タグ一覧</span></h2>
  <div class="BlogList__tagWrapper">
    <?php
      foreach($tags as $value): ?>
        <div class="BlogList__tag">
          <a href="<?php echo get_term_link($value, 'blog');?>" class="BlogList__item"><?php echo $value->name; ?></a>
        </div>
    <?php endforeach;?>
  </div>
</div>