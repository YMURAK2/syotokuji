<?php get_header() ?>
<main>
  <?php if (have_posts()):?>
  <?php while (have_posts()):the_post(); ?>
  <?php the_title() ?>
  <?php the_field('description') ?>
  <?php endwhile;?>
  <?php endif; ?>
</main>
<?php get_footer();
