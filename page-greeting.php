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
      <p class="section__title-main fadein-textT"><span>住職の挨拶</span>
      </p>
      <p class="section__title-sub fadein-textR"><span>GREETING</span>
      </p>
    </h3>
    <div class="greeting fadein-normal">
      <figure class="greeting__figure">
        <img class="greeting__img"
          src="<?php echo esc_url(get_template_directory_uri().'/assets/img/man3.jpg') ?>"
          alt="住職">
      </figure>
      <div class="greeting__namebox">
        <p class="greeting__post">住職</p>
        <p class="greeting__name">山田 太郎</p>
        <p class="greeting__comment">まごころを大切にします。<br>南無阿弥陀仏。</p>
      </div>
      <div class="greeting__message">
        <p class="greeting__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>
    <div class="greeting fadein-normal">
      <figure class="greeting__figure">
        <img class="greeting__img"
          src="<?php echo esc_url(get_template_directory_uri().'/assets/img/man4.jpg') ?>"
          alt="副住職">
      </figure>
      <div class="greeting__namebox">
        <p class="greeting__post">副住職</p>
        <p class="greeting__name">山田 次郎</p>
        <p class="greeting__comment">仏様の教えを皆さんにお伝えします。<br>南無阿弥陀仏。</p>
      </div>
      <div class="greeting__message">
        <p class="greeting__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h3 class="section__title">
      <p class="section__title-main fadein-textT"><span>概略</span>
      </p>
      <p class="section__title-sub fadein-textR"><span>CAREER</span>
      </p>
    </h3>
    <div class="career">
      <div class="career__content fadein-normal">
        <div class="career__headline"><span class="career__post">住職</span class="career__name"><span>山田 太郎</span></div>
        <div class="career__list">
          <p class="career__date">2007年3月</p>
          <p class="career__event">浄土真宗大学卒業</p>
          <p class="career__date">2008年6月</p>
          <p class="career__event">浄土真宗本願寺派　〇〇を取得</p>
          <p class="career__date">2010年12月</p>
          <p class="career__event">架空寺　副住職に就任</p>
          <p class="career__date">2012年4月</p>
          <p class="career__event">浄土真宗本願寺派　〇〇を取得</p>
          <p class="career__date">2015年4月</p>
          <p class="career__event">架空寺　住職に就任</p>
        </div>
      </div>
      <figure class="career__figure fadein-normal">
        <img class="career__img"
          src="<?php echo esc_url(get_template_directory_uri().'/assets/img/man1.jpg') ?>"
          alt="住職">
      </figure>
      <div class="career__content fadein-normal">
        <div class="career__headline"><span class="career__post">副住職</span class="career__name"><span>山田 次郎</span></div>
        <div class="career__list">
          <p class="career__date">2012年3月</p>
          <p class="career__event">浄土真宗大学卒業</p>
          <p class="career__date">2013年6月</p>
          <p class="career__event">浄土真宗本願寺派　〇〇を取得</p>
          <p class="career__date">2015年12月</p>
          <p class="career__event">架空寺　副住職に就任</p>
          <p class="career__date">2018年4月</p>
          <p class="career__event">浄土真宗本願寺派　〇〇を取得</p>
        </div>
      </div>
      <figure class="career__figure fadein-normal">
        <img class="career__img"
          src="<?php echo esc_url(get_template_directory_uri().'/assets/img/man2.jpg') ?>"
          alt="副住職">
      </figure>
    </div>
  </div>
</section>

<?php endwhile; endif;?>

<?php get_footer();
