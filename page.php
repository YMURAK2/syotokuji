<?php get_header() ?>
<main>
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
    <h2 class="page-hero__title"><?php the_title() ?>
    </h2>
  </section>
  <?php get_template_part('template-part/breadcrumb') ?>

  <section class="section">
    <div class="container">
      <h3 class="section__title">
        <p class="section__title-main fade-in-text-t"><span><?php bloginfo('name') ?>概略</span>
        </p>
        <p class="section__title-sub fade-in-text-r"><span>ABSTRACT</span>
        </p>
      </h3>
      <div class="section__wrapper section__wrapper--cover">
        <figure class="section__figure section__figure--cover fade-in-img">
          <img class="section__img section__img--cover"
            src="<?php echo esc_url(get_template_directory_uri().'/assets/img/hero2.jpg') ?>"
            alt="<?php bloginfo('name') ?>概略">
        </figure>
        <div class="section__content section__content--cover">
          <p class="section__text">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h3 class="section__title">
        <p class="section__title-main fade-in-text-t"><span><?php bloginfo('name') ?>の歴史</span>
        </p>
        <p class="section__title-sub fade-in-text-r"><span>HISTORY</span>
        </p>
      </h3>
      <div class="history">
        <div class="history__head">和暦</div>
        <div class="history__head">西暦</div>
        <div class="history__head">出来事</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入りますテキストが入ります</div>
        <div class="history__data">明治５年</div>
        <div class="history__data">1895年</div>
        <div class="history__data">テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="container">
      <h3 class="section__title">
        <p class="section__title-main fade-in-text-t"><span>寺院紹介</span>
        </p>
        <p class="section__title-sub fade-in-text-r"><span>ASSET</span>
        </p>
      </h3>
      <div class="card">
        <?php
          $args = array(
            'post_type' => 'asset',
            'posts_per_page' => -1
          );
          $the_query = new WP_Query($args);
          ?>
        <?php if ($the_query->have_posts()): ?>
        <ul class="card__list">
          <?php while ($the_query->have_posts()):$the_query->the_post()?>
          <li class="card__item fade-in-img">
            <div class="card__figure">
              <a href="<?php the_permalink() ?>">
                <?php the_post_thumbnail('large', array('alt'=>get_post_field('post_name', get_the_ID()),'class'=>'card__img')) ?>
              </a>
            </div>
            <div class="card__content">
              <h4 class="card__title"><?php the_title() ?>
              </h4>
              <p class="card__desc">
                <?php
                $text = mb_substr(get_field('description'), 0, 150);
                if (get_the_excerpt()) {
                    echo esc_html(get_the_excerpt());
                } else {
                    echo esc_html($text.'...');
                }
                ?>
              </p>
            </div>
            <a href="<?php echo esc_url(get_the_permalink()) ?>"><button
                class="more-btn more-btn--full"><span>もっと見る</span></button></a>
          </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata() ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php endwhile; endif;?>
</main>
<?php get_footer();
