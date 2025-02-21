<?php /* Template Name: ダウンロード完了 */ ?>
<?php get_header(); ?>


<!-- c-first-view -->
<div class="c-first-view">
  <div class="c-first-view__bg">
    <picture class="c-first-view__image">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/download/download-photo-1-pc.webp">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/download/download-photo-1-sp.webp" alt="ファーストビューの画像" decoding="async" width="375" height="250">
    </picture>
  </div>
  <div class="c-first-view__inner">
    <hgroup class="c-first-view__title">
      <p class="c-first-view__title--en">DOWNLOAD</p>
      <h1 class="c-first-view__title--ja">資料ダウンロード</h1>
    </hgroup>
  </div>
</div>
<!-- c-first-view -->

<?php get_template_part("template-parts/breadcrumbs"); ?>


<?php get_footer(); ?>