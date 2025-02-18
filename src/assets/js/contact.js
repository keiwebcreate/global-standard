document.addEventListener("DOMContentLoaded", () => {
  const select = document.querySelector(".p-contact-field__select");
  if (!select) return; // select が存在しない場合は処理を中断

  if (select.value !== "") {
    // 初期選択された value をチェック
    select.classList.add("is-selected");
  }

  select.addEventListener("change", () => {
    if (select.value !== "") {
      select.classList.add("is-selected");
    } else {
      select.classList.remove("is-selected");
    }
  });
});