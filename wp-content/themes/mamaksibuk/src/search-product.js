class SearchProduct {
  constructor() {
    this.init();
  }

  init() {
    $(".product-search-form input[type='search']").on("input", function () {
      if ($(this).val() === "") {
        // Ambil URL saat ini
        const url = new URL(window.location.href);
        const params = new URLSearchParams(url.search);

        // Hapus parameter 's'
        params.delete("s");

        // Buat URL baru tanpa parameter 's'
        const newUrl = url.origin + url.pathname + "?" + params.toString();

        // Redirect ke URL baru
        window.location.href = newUrl;
      }
    });
  }
}

export default SearchProduct;
