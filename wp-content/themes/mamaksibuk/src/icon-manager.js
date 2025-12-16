class IconManager {
  constructor() {
    this.feature_box_el = document.querySelectorAll(
      ".icon-manager .feature-box"
    );
    this._init();
  }
  _init() {
    this.feature_box_el.forEach((box) => {
      box.addEventListener(
        "click",
        (ev) => {
          let feature_box = ev.target;
          while (!feature_box.classList.contains("feature-box")) {
            feature_box = feature_box.parentElement;
          }
          let span = feature_box.querySelector(".feature-box-content span");

          if (!span) return;

          // Highlight text tanpa copy
          const selection = window.getSelection();
          const range = document.createRange();
          selection.removeAllRanges();
          range.selectNodeContents(span);
          selection.addRange(range);
        },
        false
      );
    });
  }
}

export default IconManager;
