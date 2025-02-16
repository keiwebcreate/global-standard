<?php /* Template Name: お問い合わせ完了 */ ?>

<?php get_header(); ?>

<main class="l-main">
  <!-- c-first-view -->
  <div class="c-first-view">
    <div class="c-first-view__bg">
      <picture class="c-first-view__image">
        <source media="(min-width: 768px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/contact/contact-photo-1-pc.webp">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/contact/contact-photo-1-sp.webp" alt="ファーストビューの画像" decoding="async" width="375" height="250">
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

  <div class="p-contact-thanks">
    <div class="p-contact-thanks__inner">
      <p class="p-contact-thanks__text">お問い合わせありがとうございました。<br>2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。</p>
      <div class="p-contact-thanks__links">
        <p class="p-contact-thanks__arrow">→</p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-contact-thanks__link">トップへ戻る</a>
      </div>
    </div>
  </div>



<?php get_footer(); ?>