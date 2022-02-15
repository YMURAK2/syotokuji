<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon"
    href="<?php echo esc_url(get_template_directory_uri()."/assets/img/favicon.png") ?>"
    type="image/svg+xml" />

  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>

  <div class="loading">
    <div class="loading__spinner">
      <span>LOADING...</span>
    </div>
  </div>
  <header class="header">
    <h1>
      <a class="header__logo-wrapper"
        href="<?php echo esc_url(home_url()) ?>">
        <div class="header__logo  hover-opacity">
          <img class="header__logo-img"
            src="<?php echo esc_url(get_template_directory_uri()."/assets/img/header-logo.png")?>"
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
        <li><a class="sns__item hover-opacity" href="#"><i class="fab fa-twitter-square"></i></a></li>
        <li><a class="sns__item hover-opacity" href="#"><i class="fab fa-facebook-square"></i></a></li>
        <li><a class="sns__item hover-opacity" href="#"><i class="fab fa-line"></i></a></li>
      </ul>
    </div>
    <div class="contact-btn">
      <?php
        $page_id = get_page_by_path("contact");
        $page_id = $page_id->ID;
      ?>
      <a class="contact-btn__link"
        href="<?php echo esc_url(get_permalink($page_id));?>"><button
          class="contact-btn__web"><span>WEBでのお問い合わせ</span></button></a>
      <a class="contact-btn__link" href="tel:000-1234-5678"><button
          class="contact-btn__tel"><span>お電話でのお問い合わせ<br>03-1234-5678</span></button></a>
    </div>
  </header>
  <main>