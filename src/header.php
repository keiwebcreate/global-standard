<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=1, initial-scale=1.0" />

  <!-- GoogleFontsの読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- CSSの読み込み-->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php wp_head(); ?>
</head>

<body>
  <!-- l-header -->
  <header class="l-header">
    <div class="p-header">
      <div class="p-header__inner">
        <!-- p-header__logo -->
        <div class="p-header__logo">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo-link">Global Standard</a>
        </div>
        <!-- /p-header__logo -->
        <!-- p-header__nav-wrap -->
        <div class="p-header__nav-wrap">
          <nav class="p-header__nav">
            <ul class="p-header__list">
              <li class="p-header__item">
                <a href="" class="p-header__link">トップ</a>
              </li>
              <li class="p-header__item">
                <a href="" class="p-header__link">当社について</a>
              </li>
              <li class="p-header__item">
                <a href="" class="p-header__link">サービス</a>
              </li>
              <li class="p-header__item">
                <a href="" class="p-header__link">導入事例</a>
              </li>
              <li class="p-header__item">
                <a href="" class="p-header__link">お知らせ</a>
              </li>
            </ul>
          </nav>
          <div class="p-header__buttons">
            <div class="p-header__button">
              <a href="" class="c-button c-button--default">資料ダウンロード</a>
            </div>
            <div class="p-header__button">
              <a href="" class="c-button c-button--primary">お問い合わせ</a>
            </div>
          </div>
        </div>
        <!-- p-header__nav-wrap -->
      </div>
    </div>
  </header>
  <!-- /l-header -->

  <!-- l-drawer-button -->
  <div class="l-drawer-button">
    <div class="p-drawer-button">
      <span class="p-drawer-button__bar"></span>
      <span class="p-drawer-button__bar"></span>
      <span class="p-drawer-button__bar"></span>
    </div>
  </div>
  <!-- l-drawer-button -->