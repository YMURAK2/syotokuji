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
  <h2 class="page-hero__title"><?php the_title() ?>
  </h2>
</section>
<?php get_template_part('template-part/breadcrumb') ?>

<section class="section">
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span>年間行事</span>
      </p>
      <p class="section__title-sub fadein-textR"><span>EVENT</span>
      </p>
    </h3>
    <div class="timeline">
      <h3 class="timeline__heading">年間を通し、数多くの行事を予定していますのでご案内します。</h3>
      <p class="timeline__desc">年間行事は日付が多少変わる場合がございますので、詳細は事前に事務局にお問合せください。また、当サイトの架空寺通信でもご案内致しておりますのでご覧ください。</p>
      <div class="timeline__contact-btn">
        <?php
          $page_id = get_page_by_path("contact");
          $page_id = $page_id->ID;
        ?>
        <a class="contact-btn__link contact-btn__link--gyoji"
          href="<?php echo esc_url(get_permalink($page_id));?>"><button
            class="contact-btn__web contact-btn__web--gyoji"><span>WEBでのお問い合わせ</span></button></a>
        <a class="contact-btn__link contact-btn__link--gyoji" href="tel:000-1234-5678"><button
            class="contact-btn__tel contact-btn__tel--gyoji"><span>お電話でのお問い合わせ<br>03-1234-5678</span></button></a>
      </div>
      <ul class="timeline__list">
        <li class="timeline__item border">
          <div class="timeline__item-wrapper">
            <p class="timeline__date">1月初旬</p>
            <div class="timeline__inner">
              <div class="timeline__content">
                <h4 class=" timeline__title">正月参り</h4>
                <figure class="timeline__figure">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg") ?>"
                    alt="正月参り" class="timeline__img">
                </figure>
                <p class="timeline__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="timeline__item border">
          <div class="timeline__item-wrapper">
            <p class="timeline__date">3月下旬</p>
            <div class="timeline__inner">
              <div class="timeline__content">
                <h4 class=" timeline__title">彼岸参り</h4>
                <figure class="timeline__figure">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg") ?>"
                    alt="彼岸参り" class="timeline__img">
                </figure>
                <p class="timeline__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="timeline__item border">
          <div class="timeline__item-wrapper">
            <p class="timeline__date">8月13日</p>
            <div class="timeline__inner">
              <div class="timeline__content">
                <h4 class=" timeline__title">お盆参り</h4>
                <figure class="timeline__figure">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg") ?>"
                    alt="お盆参り" class="timeline__img">
                </figure>
                <p class="timeline__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="timeline__item border">
          <div class="timeline__item-wrapper">
            <p class="timeline__date">9月中旬</p>
            <div class="timeline__inner">
              <div class="timeline__content">
                <h4 class=" timeline__title">彼岸参り</h4>
                <figure class="timeline__figure">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg") ?>"
                    alt="彼岸参り" class="timeline__img">
                </figure>
                <p class="timeline__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="timeline__item border">
          <div class="timeline__item-wrapper">
            <p class="timeline__date">10月1週目</p>
            <div class="timeline__inner">
              <div class="timeline__content">
                <h4 class=" timeline__title">お月見・収穫祭</h4>
                <figure class="timeline__figure">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg") ?>"
                    alt="お月見・収穫祭" class="timeline__img">
                </figure>
                <p class="timeline__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。ます。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
            </div>
          </div>
        </li>
        <li class="timeline__item border">
          <div class="timeline__item-wrapper">
            <p class="timeline__date">12月31日</p>
            <div class="timeline__inner">
              <div class="timeline__content">
                <h4 class=" timeline__title">大晦日参り</h4>
                <figure class="timeline__figure">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg") ?>"
                    alt="大晦日参り" class="timeline__img">
                </figure>
                <p class="timeline__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>




  </div>
</section>
<?php endwhile; endif;?>

<?php get_footer();
