<?php
if (comments_open() || get_comments_number()) {
  // $comments = get_comments([
  //   'post_id' => get_the_ID(),
  //   'number' => 5,
  //   'status' => 'approve'
  // ]);
  // print_r($comments);
  ?>
  <!-- start section -->
  <section class="<?php if (comments_open()) {echo "pb-0";} ?>">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 text-center mb-2">
          <h6 class="alt-font fw-600 text-dark-gray"><?php echo count($comments) ?>
            Comment<?php if (count($comments) > 1)
              echo 's' ?></h6>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul class="blog-comment">
            <?php wp_list_comments([
              'callback' => 'mytheme_comment',
              'max_depth' => 2,
            ]); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
<?php } ?>
<?php if (comments_open()) { ?>
  <!-- start section -->
  <section id="comments">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 mb-3 sm-mb-6">
          <h6 class="alt-font fw-600 text-dark-gray mb-5px">Write a comment</h6>
          <div class="mb-5px">Your email address will not be published. Required fields are marked *</div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9 position-relative z-index-1">
          <?php
          comment_form(
            [
              'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label>' . ' ' . wp_required_field_indicator() . '<br /><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required></textarea></p>',
              'class_submit' => 'btn btn-dark-gray btn-small btn-round-edge submit',
              'title_reply_before' => '<h3 id="reply-title" class="text-dark-gray ls-minus-2px alt-font">'
            ]
          );
          ?>
        </div>
      </div>
      <!-- <div class="row justify-content-center">
      <div class="col-lg-9 position-relative z-index-1">
        <form action="email-templates/contact-form.php" method="post" class="row contact-form-style-02">
          <div class="col-md-6 mb-30px">
            <input class="input-name border-radius-4px form-control required" type="text" name="name"
              placeholder="Enter your name*">
          </div>
          <div class="col-md-6 mb-30px">
            <input class="border-radius-4px form-control required" type="email" name="email"
              placeholder="Enter your email address*">
          </div>
          <div class="col-md-12 mb-30px">
            <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment"
              placeholder="Your message"></textarea>
          </div>
          <div class="col-12">
            <input type="hidden" name="redirect" value="">
            <button class="btn btn-dark-gray btn-small btn-round-edge submit" type="submit">Post Comment</button>
            <div class="form-results mt-20px d-none"></div>
          </div>
        </form>
      </div>
    </div> -->
    </div>
  </section>
  <!-- end section -->
<?php } ?>