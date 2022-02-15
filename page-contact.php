<?php get_header() ?>

<?php if (have_posts()): while (have_posts()):the_post(); ?>
<?php
    if (has_post_thumbnail()) {
        $thumbURL = get_the_post_thumbnail_url();
    } else {
        $thumbURL = get_template_directory_uri()."/assets/img/hero1.jpg";
    };
   ?>
<section class="page-hero"
  style="background-image: url('<?php echo esc_url($thumbURL)?>')">
  <h2 class="page-hero__title">お問い合わせ
  </h2>
</section>
<?php get_template_part('template-part/breadcrumb') ?>

<section class="section">
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span>お問い合わせ</span>
      </p>
      <p class="section__title-sub fadein-textR"><span>CONTACT</span>
      </p>
    </h3>
  </div>
</section>
<section class="form">
  <div class="container">
    <?php the_content() ?>
  </div>
</section>
<?php endwhile; endif;?>
<?php get_footer();
