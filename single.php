<?php get_header() ?>

<section class="page-hero"
  style="background-image: url('<?php echo esc_url(get_template_directory_uri()."/assets/img/single.jpg")?>')">
  <h2 class="page-hero__title">お知らせ・情報
  </h2>
</section>
<?php get_template_part('template-part/breadcrumb') ?>
<section class="section">
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT">
        <span><?php $category = get_the_category(); echo esc_html($category[0]->cat_name); ?></span>
      </p>
      <p class="section__title-sub fadein-textR"><span>ARTICLE</span>
      </p>
    </h3>
  </div>
</section>
<section class="article">
  <div class="container">
    <div class="is-sidebar-wrapper">
      <?php if (have_posts()):?>
      <?php while (have_posts()):the_post(); ?>
      <article id="post-<?php the_ID() ?>" <?php post_class("article__inner") ?>>
        <h4 class="article__title"><?php the_title() ?>
        </h4>
        <div class="article__meta">
          <time class="article__date"
            datetime="<?php the_time('y-m-d')?>"><i
              class="far fa-clock"></i>
            <?php the_time('Y年m月d日') ?></time>
          <div class="article__category"><?php the_category() ?>
          </div>
        </div>
        <?php if (has_post_thumbnail()): ?>
        <div class="article__figure">
          <?php the_post_thumbnail('large', array('alt'=>get_the_title(),'class'=>'article__img')) ?>
        </div>
        <div class="article__content">
          <?php the_content() ?>
        </div>
        <?php endif; ?>
        <div class="article__link">
          <?php if (get_previous_post()):?>
          <div class="article__postlink">
            <span>
              <?php previous_post_link('<i class="fas fa-caret-left"></i>&emsp;%link', '前の記事へ') ?>
            </span>
          </div>
          <?php else: ?>
          <div class="article__postlink"></div>
          <?php endif; ?>
          <div class="article__postlink">
            <span>
              <a
                href="<?php echo esc_url(home_url('/latest/')) ?>">一覧へ戻る</a>
            </span>
          </div>
          <?php if (get_next_post()):?>
          <div class="article__postlink">
            <span>
              <?php next_post_link('%link&emsp; <i class="fas fa-caret-right"></i>', '次の記事へ') ?>
            </span>
          </div>
          <?php else: ?>
          <div class="article__postlink"></div>
          <?php endif; ?>
        </div>
      </article>
      <?php endwhile;?>
      <?php endif; ?>
      <?php get_sidebar() ?>
    </div>
  </div>
</section>

<?php get_footer();
