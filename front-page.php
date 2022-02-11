<?php get_header() ?>

<section class="hero">
  <div class="swiper swiper__hero">
    <div class="swiper-wrapper">
      <div class="swiper-slide"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri())."/assets/img/hero1.jpg" ?>')">
      </div>
      <div class="swiper-slide"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri())."/assets/img/hero2.jpg" ?>')">
      </div>
      <div class="swiper-slide"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri())."/assets/img/hero3.jpg" ?>')">
      </div>
      <div class="swiper-slide"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri())."/assets/img/hero4.jpg" ?>')">
      </div>
      <div class="swiper-slide"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri())."/assets/img/hero5.jpg" ?>')">
      </div>
      <div class="swiper-slide"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri())."/assets/img/hero6.jpg" ?>')">
      </div>
    </div>
    <div class="swiper-pagination"></div>

  </div>
  <h2 class="hero__ja-title">
    <p class="hero__ja-title-sub"><?php bloginfo('description')?>
    </p>
    <p class="hero__ja-title-main"><?php bloginfo('name')?>
    </p>
  </h2>
  <h2 class="hero__en-title">
    <p class="hero__en-title-sub">JODO SHINSYU</p>
    <p class="hero__en-title-main">KAKUJI</p>
  </h2>
</section>

<section class="news-list">
  <div class="container">
    <?php if (have_posts()):?>
    <ul class="news-list__list">
      <?php while (have_posts()):the_post(); ?>
      <li id="post-<?php the_ID() ?>" <?php post_class('news-list__item') ?>>
        <div class="news-list__heading">
          <time class="news-list__date"
            datetime="<?php the_time('y-m-d')?>"><?php the_time('Y年m月d日') ?></time>
          <div class="news-list__category"><?php the_category() ?>
          </div>
        </div>
        <div class="news-list__title"><a
            href="<?php the_permalink() ?>"><?php the_title() ?>
        </div></a>
      </li>
      <?php endwhile;?>
      <?php endif; ?>
    </ul>
    <a
      href="<?php echo esc_url(home_url("/category/")) ?>"><button
        class="more-btn"><span>もっと見る</span></button></a>
  </div>
</section>


<section class="section background">
  <?php
          $slug = "about";
          if (get_page_by_path($slug)) {
              $page_id = get_page_by_path($slug);
              $page_id = $page_id->ID;
          };
      ?>
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span><?php echo esc_html(get_the_title($page_id)) ?></span>
      </p>
      <p class="section__title-sub fadein-textR"><span><?php echo esc_html(strtoupper($slug)) ?></span>
      </p>
    </h3>
    <div class="front-page__wrapper">
      <figure class="front-page__figure fadein-normal">
        <p class="front-page__comment">建立100年の歴史</p>
        <?php echo get_the_post_thumbnail($page_id, 'large', array("alt" => "$slug", "class" => "front-page__img")); ?>
      </figure>
      <div class="front-page__content">
        <p class="front-page__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
        <a href="<?php echo esc_url(get_permalink($page_id)) ?>"><button
            class="more-btn"><span>もっと見る</span></button></a>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <?php
          $slug = "greeting";
          if (get_page_by_path($slug)) {
              $page_id = get_page_by_path($slug);
              $page_id = $page_id->ID;
          };
      ?>
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span><?php echo esc_html(get_the_title($page_id)) ?></span>
      </p>
      <p class="section__title-sub section__title-sub--reverse fadein-textR"><span><?php echo esc_html(strtoupper($slug)) ?></span>
      </p>
    </h3>
    <div class="front-page__wrapper front-page__wrapper--reverse">
      <figure class="front-page__figure fadein-normal">
        <p class="front-page__comment front-page__comment--reverse">まごころを大切にします</p>

        <?php echo get_the_post_thumbnail($page_id, 'large', array("alt" => "$slug", "class" => "front-page__img")); ?>
      </figure>
      <div class="front-page__content">
        <p class="front-page__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
        <a href="<?php echo esc_url(get_permalink($page_id)) ?>"><button
            class="more-btn"><span>もっと見る</span></button></a>
      </div>
    </div>
  </div>
</section>

<section class="section background">
  <?php
          $slug = "gallery";
          if (get_page_by_path($slug)) {
              $page_id = get_page_by_path($slug);
              $page_id = $page_id->ID;
          };
      ?>
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span>写真集</span>
      </p>
      <p class="section__title-sub fadein-textR"><span><?php echo esc_html(strtoupper($slug)) ?></span>
      </p>
    </h3>
  </div>
  <?php
          $args = array(
            'post_type' => 'asset',
            'posts_per_page' => 10
          );
          $the_query = new WP_Query($args);
          ?>
  <?php if ($the_query->have_posts()): ?>
  <div class="swiper swiper__gallery fadein-normal">
    <div class="swiper-wrapper">
      <?php while ($the_query->have_posts()):$the_query->the_post()?>
      <div class="swiper-slide">
        <a href="<?php the_permalink() ?>">
          <?php the_post_thumbnail('large', array('alt'=>get_post_field('post_name', get_the_ID()))) ?>
        </a>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata() ?>
    </div>
    <div class="swiper-pagination"></div>
    <!-- <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div> -->
  </div>
  <?php endif; ?>
</section>

<section class="section">
  <?php
          $slug = "access";
          if (get_page_by_path($slug)) {
              $page_id = get_page_by_path($slug);
              $page_id = $page_id->ID;
          };
      ?>
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span><?php echo esc_html(get_the_title($page_id)) ?></span>
      </p>
      <p class="section__title-sub section__title-sub--reverse fadein-textR"><span><?php echo esc_html(strtoupper($slug)) ?></span>
      </p>
    </h3>
    <div class="front-page__wrapper">
      <figure class="front-page__figure fadein-normal">
        <iframe class="front-page__map"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030380883!2d139.76493611511148!3d35.68123618019423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1643973299347!5m2!1sja!2sjp"
          style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </figure>
      <div class="front-page__content">
        <div class="front-page__access-item">
          <p class="front-page__address">〒012-3456</p>
          <p class="front-page__address">神奈川県横浜市西区浄土真宗町1-2-3</p>
        </div>
        <div class="front-page__access-item">
          <p class="front-page__station">最寄り駅：架空線　真宗駅</p>
          <p class="front-page__station">最寄りバス停：架空線　真宗停留所</p>
        </div>
        <div class="front-page__access-item">
          <?php
              $page_id = get_page_by_path("access");
              $page_id = $page_id->ID;
            ?>
          <a class="front-page__access-nav"
            href="<?php echo esc_url(get_permalink($page_id)."#car") ?>">お車でお越しの方</a>
          <a class="front-page__access-nav"
            href="<?php echo esc_url(get_permalink($page_id)."#train") ?>">電車でお越しの方</a>
          <a class="front-page__access-nav"
            href="<?php echo esc_url(get_permalink($page_id)."#bus") ?>">バスでお越しの方</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();
