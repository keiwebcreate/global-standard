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
      <!-- <form class="p-contact__form">
        <div class="p-contact__fields">
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-company" class="p-contact-field__label">会社名</label>
            </div>
            <div class="p-contact-field__body">
              <input type="text" name="your-company" id="your-company" class="p-contact-field__input-text" placeholder="例）○○株式会社">
            </div>
          </div>
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-name" class="p-contact-field__label">お名前</label>
              <span class="p-contact-field__required">必須</span>
            </div>
            <div class="p-contact-field__body">
              <input type="text" name="your-name" id="your-name" class="p-contact-field__input-text" placeholder="例）鈴木　一郎">
            </div>
          </div>
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-name-furigana" class="p-contact-field__label">お名前（フリガナ）</label>
              <span class="p-contact-field__required">必須</span>
            </div>
            <div class="p-contact-field__body"><input type="text" name="your-name-furigana" id="your-name-furigana" class="p-contact-field__input-text" placeholder="例）スズキ　イチロウ">
            </div>
          </div>
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-tel" class="p-contact-field__label">電話番号</label>
              <span class="p-contact-field__required">必須</span>
            </div>
            <div class="p-contact-field__body"><input type="tel" name="your-tel" id="your-tel" class="p-contact-field__input-text" placeholder="例）0312345678">
            </div>
          </div>
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-email" class="p-contact-field__label">メールアドレス</label>
              <span class="p-contact-field__required">必須</span>
            </div>
            <div class="p-contact-field__body"><input type="email" name="your-email" id="your-email" class="p-contact-field__input-text" placeholder="例）info@example.com">
            </div>
          </div>
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-" class="p-contact-field__label">ご用件</label>
              <span class="p-contact-field__required">必須</span>
            </div>
            <div class="p-contact-field__body p-contact-field__body--select">
              <select name="your-content" id="your-content" class="p-contact-field__select">
                <option selected disabled></option>
              </select>
            </div>
          </div>
          <div class="p-contact__field p-contact-field">
            <div class="p-contact-field__head">
              <label for="your-" class="p-contact-field__label">ご用件の詳細</label>
              <span class="p-contact-field__required">必須</span>
            </div>
            <div class="p-contact-field__body">
              <textarea name="your-content-detail" id="your-content-detail" class="p-contact-field__textarea" placeholder="ご自由にご記入ください。"></textarea>
            </div>
          </div>
        </div>
        <div class="p-contact__privacy">
          <label class="p-contact__checkbox">
            <input
              type="checkbox"
              name="your-privacy"
              class="p-contact__checkbox-input" />
            <span class="p-contact__checkbox-text"><a href="">個人情報保護方針</a>に同意します。</span>
          </label>
        </div>
        <div class="p-contact__button">
          <input type="submit" value="送信" class="p-contact__submit" />
        </div>
      </form> -->
    </div>
  </div>
</section>
<!-- /p-contact -->

<?php get_footer(); ?>