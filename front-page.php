<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon"
    href="<?php echo get_template_directory_uri()?>/assets/img/favicon.png"
    type="image/svg+xml" />

  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>
  <header class="header">
    <h1>
      <a class="header__logo-wrapper"
        href="<?php echo esc_url(home_url()) ?>">
        <div class="header__logo">
          <img class="header__logo-img"
            src="<?php echo get_template_directory_uri()?>/assets/img/header-logo.png"
            alt="header-icon">
          <div class="header__logo-title">
            <p class="header__logo-title-sub"><?php bloginfo('description')?>
            </p>
            <p class="leader__logo-title-main"><?php bloginfo('name')?>
            </p>
          </div>
        </div>
      </a>
    </h1>
    <button class="header__menu-btn">
      <span class="header__menu-line"></span>
      <span class="header__menu-text">menu</span>
    </button>
    <nav class="gnav">
      <?php
            $args = array(
              'menu' => 'global-navigation',
              'menu_class' => 'gnav__list',
              'container' => false,
            );
            wp_nav_menu($args);
          ?>
    </nav>
    <div class="sns">
      <ul class="sns__list">
        <li><a class="sns__item" href="#"><i class="fab fa-twitter-square"></i></a></li>
        <li><a class="sns__item" href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a class="sns__item" href="#"><i class="fab fa-line"></i></a></li>
      </ul>
    </div>
    <div class="contact-btn">
      <?php
        $page_id = get_page_by_path("contact");
        $page_id = $page_id->ID;
      ?>
      <a class="contact-btn__link" href="<?php echo esc_url(get_permalink($page_id));?>"><button
          class="contact-btn__web"><span>WEBでのお問い合わせ</span></button></a>
      <a  class="contact-btn__link"  href="tel:000-1234-5678"><button class="contact-btn__tel"><span>お電話でのお問い合わせ<br>03-1234-5678</span></button></a>
    </div>
  </header>
  <main>
    <section class="hero">
      <div class="hero__ja-title">
        <p class="hero__ja-title-sub"><?php bloginfo('description')?>
        </p>
        <p class="hero__ja-title-main"><?php bloginfo('name')?>
        </p>
      </div>
      <div class="hero__en-title">
        <p class="hero__en-title-sub">JODO SHINSYU</p>
        <p class="hero__en-title-main">SYOTOKUJI</p>
      </div>
    </section>

    <section class="news-list">
      <div class="container">
        <?php if (have_posts()):?>
        <ul class="news-list__list">
          <?php while (have_posts()):the_post(); ?>
          <li class="news-list__item">
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
        <a href=""><button class="more-btn"><span>もっと見る</span></button></a>
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
        <h2 class="section__title">
          <p class="section__title-main"><?php echo esc_html(get_the_title($page_id)) ?>
          </p>
          <p class="section__title-sub"><?php echo esc_html(strtoupper($slug)) ?>
          </p>
        </h2>
        <div class="section__wrapper">
          <figure class="section__figure">
            <p class="section__comment">建立100年の歴史</p>
            <?php echo get_the_post_thumbnail($page_id, 'large', array("alt" => "$slug", "class" => "section__img")); ?>
          </figure>
          <div class="section__content">
            <p class="section__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <button class="more-btn">もっと見る</button>
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
        <h2 class="section__title">
          <p class="section__title-main"><?php echo esc_html(get_the_title($page_id)) ?>
          </p>
          <p class="section__title-sub reverse"><?php echo esc_html(strtoupper($slug)) ?>
          </p>
        </h2>
        <div class="section__wrapper reverse">
          <figure class="section__figure">
            <p class="section__comment reverse">まごころを大切にします</p>

            <?php echo get_the_post_thumbnail($page_id, 'large', array("alt" => "$slug", "class" => "section__img")); ?>
          </figure>
          <div class="section__content">
            <p class="section__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <button class="more-btn">もっと見る</button>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <?php
          $slug = "gallery";
          if (get_page_by_path($slug)) {
              $page_id = get_page_by_path($slug);
              $page_id = $page_id->ID;
          };
      ?>
      <div class="container">
        <h2 class="section__title">
          <p class="section__title-main">写真集</p>
          <p class="section__title-sub"><?php echo esc_html(strtoupper($slug)) ?>
          </p>
        </h2>
      </div>
      <?php
                $args = array(
                  'post_type' => 'asset',
                  'posts_per_page' => 10
                );
                $the_query = new WP_Query($args);
          ?>
      <?php if ($the_query->have_posts()): ?>
      <div class="swiper">
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
        <h2 class="section__title">
          <p class="section__title-main"><?php echo esc_html(get_the_title($page_id)) ?>
          </p>
          <p class="section__title-sub reverse"><?php echo esc_html(strtoupper($slug)) ?>
          </p>
        </h2>
        <div class="section__wrapper">
          <figure class="section__figure">
            <iframe class="section__map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030380883!2d139.76493611511148!3d35.68123618019423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1643973299347!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </figure>
          <div class="section__content">
            <div class="section__access-item">
              <p class="section__address">〒012-3456</p>
              <p class="section__address">神奈川県横浜市西区浄土真宗町1-2-3</p>
            </div>
            <div class="section__access-item">
              <p class="section__station">最寄り駅：聖徳線　真宗駅</p>
              <p class="section__station">最寄りバス停：聖徳線　真宗停留所</p>
            </div>
            <div class="section__access-item">
              <?php
              $page_id = get_page_by_path("access");
              $page_id = $page_id->ID;
            ?>
              <a class="section__access-nav"
                href="<?php echo esc_url(get_permalink($page_id)."#car") ?>">お車でお越しの方</a>
              <a class="section__access-nav"
                href="<?php echo esc_url(get_permalink($page_id)."#train") ?>">電車でお越しの方</a>
              <a class="section__access-nav"
                href="<?php echo esc_url(get_permalink($page_id)."#bus") ?>">バスでお越しの方</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer__container">
      <a class="footer__logo-wrapper"
        href="<?php echo esc_url(home_url()) ?>">
        <div class="footer__logo">
          <img class="footer__logo-img"
            src="<?php echo get_template_directory_uri()?>/assets/img/footer-logo.png"
            alt="footer-icon">
          <div class="footer__logo-title">
            <p class="footer__logo-title-sub"><?php bloginfo('description')?>
            </p>
            <p class="footer__logo-title-main"><?php bloginfo('name')?>
            </p>
          </div>
        </div>
      </a>
      <?php
        $page_id = get_page_by_path("contact");
        $page_id = $page_id->ID;
      ?>
      <a class="contact-btn__link contact-btn__link--footer" href="<?php echo esc_url(get_permalink($page_id));?>"><button
          class="contact-btn__web contact-btn__web--footer"><span>WEBでのお問い合わせ</span></button></a>
      <a class="contact-btn__link contact-btn__link--footer" href="tel:000-1234-5678"><button
          class="contact-btn__tel contact-btn__tel--footer"><span>お電話でのお問い合わせ<br>03-1234-5678</span></button></a>
    </div>
    <div class="footer__copyright">
      <small>&copy; 2022 聖徳寺 All rights reserved.</small>
    </div>
  </footer>
  <?php wp_footer() ?>
</body>

</html>