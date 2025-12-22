class Grid {
  constructor() {
    this.gridEls = document.querySelectorAll(".row-grid");
    this.dynamicContEls = document.querySelectorAll(".dynamic-container");
    this.albPaginationEls = document.querySelectorAll(
      ".alb-pagination-style .page-numbers"
    );
    this.wcResultCountEls = document.querySelectorAll(
      ".woocommerce-result-count"
    );
    this.wcTermDescriptionEls = document.querySelectorAll(".term-description");
    this.wpCommentReplyLinksEls = document.querySelectorAll(
      ".comment-reply-link"
    );
    this.wpCommentChildrenEls = document.querySelectorAll(
      ".blog-comment .children"
    );
    this._init();
  }
  _init() {
    for (let grid of this.gridEls) {
      console.log("Grid", grid.children);
    }

    for (let dynamicContItem of this.dynamicContEls) {
      if (dynamicContItem.children.length === 0) {
        dynamicContItem.remove();
      }
    }

    for (let paginationItem of this.albPaginationEls) {
      paginationItem.classList.remove("page-numbers");
      paginationItem.classList.add("page-link");
    }

    for (let wcResultCountItem of this.wcResultCountEls) {
      wcResultCountItem.classList.add(...["fs-5", "alt-font", "mb-25px"]);
    }

    for (let wcTermDescriptionItem of this.wcTermDescriptionEls) {
      wcTermDescriptionItem
        .querySelector("p")
        .classList.add(...["fs-6", "alt-font", "mb-25px"]);
    }

    for (let wpCommentReplyLinkItem of this.wpCommentReplyLinksEls) {
      wpCommentReplyLinkItem.classList.add(
        ...["btn-reply", "text-uppercase", "section-link"]
      );
    }

    for (let wpCommentChildrenItem of this.wpCommentChildrenEls) {
      wpCommentChildrenItem.classList.add('child-comment');
      wpCommentChildrenItem.classList.remove('children');
    }
  }
}

export default Grid;
