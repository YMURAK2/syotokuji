<li id="post-<?php the_ID() ?>" <?php post_class('archive__item') ?>>
  <figure class="archive__figure">
    <a href="<?php the_permalink() ?>">
      <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail('medium', array('alt'=>get_the_title(),'class'=>'archive__img hover-opacity')) ?>
      <?php else: ?>
      <img class="archive__img hover-opacity"
        src="<?php echo esc_url(get_template_directory_uri()."/assets/img/hero1.jpg")?>"
        alt="NO Image">
      <?php endif; ?>
    </a>
  </figure>
  <div class="archive__content">
    <div class="archive__meta">
      <time class="archive__date"
        datetime="<?php the_time('y-m-d')?>"><i
          class="far fa-clock"></i>
        <?php the_time('Y年m月d日') ?></time>
      <div class="archive__category hover-opacity"><?php the_category() ?>
      </div>
    </div>
    <h4 class="archive__title"><a
        href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
    <p class="archive__excerpt"><?php echo get_the_excerpt() ?>
    </p>
  </div>
</li>