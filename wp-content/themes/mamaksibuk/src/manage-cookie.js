class ManageCookie {
  constructor() {
    this._init();
  }
  _init() {
    if (typeof $.cookie === "function") {
      if ($("body").find("#cookies-model").length > 0) {
        setTimeout(function () {
          var cookieModel = $("#cookies-model"),
            cookieConsentclosed = $.cookie("mamak_cookie_accepted");

          if (cookieConsentclosed == "true") {
            cookieModel.remove();
          } else {
            cookieModel.fadeIn();
          }

          cookieModel.find("[data-accept-btn]").on("click", function (e) {
            e.preventDefault();
            var expiresDays = 1;
            cookieModel.remove();
            $.cookie("mamak_cookie_accepted", "true", {
              expires: expiresDays,
              path: "/",
            });
          });
        }, 1000);
      }
    }
  }
}

export default ManageCookie;
