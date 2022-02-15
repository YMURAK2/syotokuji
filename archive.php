<?php get_header() ?>

<section class="page-hero"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg")?>')">
  <h2 class="page-hero__title">お知らせ・情報
  </h2>
</section>
<?php get_template_part('template-part/breadcrumb') ?>
<section class="section">
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT">
        <span>
          <?php
            if (is_month()) {
                echo the_time('y年n月');
            } elseif (is_year()) {
                echo the_time('Y年');
            } else {
                echo esc_html(wp_title(""));
            };
          ?>
        </span>
      </p>
      <p class="section__title-sub fadein-textR"><span>NEWS & INFO.</span>
      </p>
    </h3>
  </div>
</section>
<section class="archive">
  <div class="container">
    <div class="is-sidebar-wrapper">
      <?php if (is_page('latest')): ?>
      <?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10
          );
          $the_query = new WP_Query($args);
        ?>
      <?php if ($the_query->have_posts()):?>
      <ul class="archive__list">
        <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
        <?php get_template_part('template-part/loop-archive'); ?>
        <?php endwhile;?>
        <?php if (function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
      </ul>
      <?php endif; ?>
      <?php else: ?>
      <?php if (have_posts()):?>
      <ul class="archive__list">
        <?php while (have_posts()):the_post(); ?>
        <?php get_template_part('template-part/loop-archive'); ?>
        <?php endwhile;?>
        <?php if (function_exists('wp_pagenavi')): wp_pagenavi(); endif; ?>
      </ul>
      <?php endif; ?>
      <?php endif; ?>
      <?php get_sidebar() ?>
    </div>
  </div>
</section>

<?php get_footer();
