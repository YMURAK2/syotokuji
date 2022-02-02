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
      <a class="logo-wrapper"
        href="<?php echo esc_url(home_url()) ?>">
        <div class="logo">
          <img class="logo__img"
            src="<?php echo get_template_directory_uri()?>/assets/img/header-logo.png"
            alt="header-icon">
          <div class="logo__title">
            <p class="logo__title-sub"><?php bloginfo('description')?>
            </p>
            <p class="logo__title-main"><?php bloginfo('name')?>
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
      <a href="<?php echo esc_url(get_permalink($page_id));?>"><button
          class="contact-btn__web"><span>WEBでのお問い合わせ</span></button></a>
      <a href="tel:000-1234-5678"><button class="contact-btn__tel"><span>お電話でのお問い合わせ<br>03-1234-5678</span></button></a>
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
          $page_id = get_page_by_path($slug);
          $page_id = $page_id->ID;
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
          $page_id = get_page_by_path($slug);
          $page_id = $page_id->ID;
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
  </main>

  <?php wp_footer() ?>
</body>

</html>