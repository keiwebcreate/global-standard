//375px 未満は JS で viewport を固定する
// =============================
(function () {
  // 　viewportの設定を取得
  const viewport = document.querySelector('meta[name="viewport"]');
  // ビューポートを切り替える関数を定義
  function switchViewport() {
    //   ウインドウサイズが390pxより多き場合はビューポートの値を変更する
    const value =
      window.outerWidth > 390
        ? "width=device-width,initial-scale=1"
        : "width=375";
    // 現在のビューポートの値が新しい値と異なる場合、ビューポートの値を更新
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }

  //ウィンドウのリサイズイベントにswitchViewport関数を割り当てる
  addEventListener("resize", switchViewport, false);
  // ページが読み込まれた時点でswitchViewport関数を実行
  switchViewport();
})();

// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", () => {
  //定義
  const drawerIcon = document.querySelector("#js-drawer-button");
  const drawer = document.querySelector("#js-drawer-content");
  const drawerNavItem = document.querySelectorAll(".p-drawer-content__body a");
  const headerHeight = document.querySelector("header").offsetHeight;
  const breakpoint = 1200;
  let isMenuOpen = false;
  let isMenuOpenAtBreakpoint = false;

  // 開閉に伴う属性の変更

  drawerIcon.addEventListener("click", function () {
    const expanded = drawerIcon.getAttribute("aria-expanded");
    if (expanded) {
      drawerIcon.setAttribute("aria-expanded", "false");
      drawer.setAttribute("aria-hidden", "true");
    } else {
      drawerIcon.setAttribute("aria-expanded", "true");
      drawer.setAttribute("aria-hidden", "false");
    }
  });

  //メニューを開くアニメーション
  const openMenu = () => {
    if (!drawer.classList.contains("is-open")) {
      drawer.classList.add("is-open");
      drawerIcon.classList.add("is-open");
    }
  };
  //メニューを閉じるアニメーション
  const closeMenu = () => {
    if (drawer.classList.contains("is-open")) {
      drawer.classList.remove("is-open");
      drawerIcon.classList.remove("is-open");
      isMenuOpen = false;
    }
  };
  //メニューの開閉動作
  const toggleMenu = () => {
    if (!drawer.classList.contains("is-open")) {
      openMenu();
    } else {
      closeMenu();
    }
  };
  //リサイズ処理
  const handleResize = () => {
    const bp = breakpoint;
    const windowWidth = window.innerWidth;
    if (windowWidth > bp && isMenuOpenAtBreakpoint) {
      closeMenu();
    } else if (windowWidth <= bp && drawer.classList.contains("is-open")) {
      isMenuOpenAtBreakpoint = true;
    }
  };

  //アイコン クリック時
  drawerIcon.addEventListener("click", toggleMenu);
  //画面幅リサイズ時
  window.addEventListener("resize", handleResize);

  //ページ内リンクメニュー クリック時
  drawerNavItem.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      closeMenu();
    });
  });
});
