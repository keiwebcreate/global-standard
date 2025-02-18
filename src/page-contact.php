<?php /* Template Name: お問い合わせ */ ?>
<?php get_header(); ?>

<!-- c-first-view -->
<div class="c-first-view">
  <div class="c-first-view__bg">
    <picture class="c-first-view__image">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/contact-photo-1-pc.webp">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/contact/contact-photo-1-sp.webp" alt="ファーストビューの画像" decoding="async" width="375" height="250">
    </picture>
  </div>
  <div class="c-first-view__inner">
    <hgroup class="c-first-view__title">
      <p class="c-first-view__title--en">CONTACT</p>
      <h1 class="c-first-view__title--ja">お問い合わせ</h1>
    </hgroup>
  </div>
</div>
<!-- c-first-view -->

<?php get_template_part("template-parts/breadcrumbs"); ?>

<!-- p-contact -->
<section class="p-contact">
  <div class="p-contact__inner">
    <p class="p-contact__text">研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br>2日以内に担当者からメールにてご連絡いたします。</p>
    <h2 class="p-contact__title">お問い合わせ</h2>
    <div class="p-contact__form-wrap">
      <?php echo do_shortcode('[contact-form-7 id="d5750da" title="お問い合わせ"]'); ?>
    </div>
  </div>
</section>
<!-- /p-contact -->

<?php get_footer(); ?>