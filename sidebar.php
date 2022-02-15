<aside class="sidebar">
  <div class="sidebar__category">
    <h3 class="sidebar__title">カテゴリー一覧</h3>
    <ul class="sidebar__list">
      <?php wp_list_categories(array('title_li'=>'')) ?>
    </ul>
  </div>
  <div class="sidebar__month">
    <h3 class="sidebar__title">月別アーカイブ</h3>
    <ul class="sidebar__list">
      <?php wp_get_archives(array('type'=>'monthly')) ?>
    </ul>
  </div>
</aside>