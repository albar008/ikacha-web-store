class AddToCartBtn {
  constructor() {
    this.init();
  }

  init() {
    $('.product .summary button[name="add-to-cart"]')
      .addClass(
        "btn btn-cart btn-extra-large btn-switch-text btn-box-shadow btn-none-transform btn-dark-gray left-icon btn-round-edge border-0 me-15px xs-me-0"
      )
      .html(
        '<span>\
            <span><i class="feather icon-feather-shopping-bag"></i></span>\
            <span class="btn-double-text ls-0px" data-text="Add to cart">Add to cart</span> \
        </span>'
      );
  }
}

export default AddToCartBtn;
