<footer class="footer">
  <div class="footer__container">
    <a class="footer__logo-wrapper"
      href="<?php echo esc_url(home_url()) ?>">
      <div class="footer__logo">
        <img class="footer__logo-img"
          src="<?php echo esc_url(get_template_directory_uri()."/assets/img/footer-logo.png") ?>"
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
    <a class="contact-btn__link contact-btn__link--footer"
      href="<?php echo esc_url(get_permalink($page_id));?>"><button
        class="contact-btn__web contact-btn__web--footer"><span>WEBでのお問い合わせ</span></button></a>
    <a class="contact-btn__link contact-btn__link--footer" href="tel:000-1234-5678"><button
        class="contact-btn__tel contact-btn__tel--footer"><span>お電話でのお問い合わせ<br>03-1234-5678</span></button></a>
  </div>
  <div class="footer__copyright">
    <small>&copy; 2022 架空寺 All rights reserved.</small>
  </div>
</footer>
<?php wp_footer() ?>
</body>

</html>