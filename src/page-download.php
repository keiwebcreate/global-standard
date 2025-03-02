<?php /* Template Name: ダウンロード */ ?>
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

<!-- p-download -->
  <section class="p-download">
    <div class="p-download__inner">
      <!-- p-download__description-wrap -->
      <div class="p-download__description-wrap">
        <h2 class="p-download__title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</h2>
        <picture class="p-download__image">
          <source media="(min-width: 768px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/download/download-photo-2-PC.webp">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/download/download-photo-2-SP.webp" alt="ビジネス英会話研修資料の外観" decoding="async" loading="lazy" width="275" height="389">
        </picture>
        <p class="p-download__text">急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。<br><br>英語に苦手意識のある方でもご安心ください。<br>ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br>まずはこちらの資料をごらんください。</p>
      </div>
      <!-- /p-download__description-wrap -->
      <!-- p-download__form-wrap -->
      <div class="p-download__form-wrap">
        <h2 class="p-download__form-head">資料ダウンロード</h2>
        <div class="p-download__form-body">
          <?php echo do_shortcode('[contact-form-7 id="6ef018c" title="ダウンロード"]'); ?>
        </div>
      </div>
      <!-- /p-download__form-wrap -->
    </div>
  </section>
<!-- /p-download -->

<?php get_footer(); ?>