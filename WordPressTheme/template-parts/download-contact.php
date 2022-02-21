<?php
  $home = esc_url( home_url( "/" ));
  $about = esc_url( home_url( "/about/" ));
  $service = esc_url( home_url( "/service/" ));
  $case = esc_url( home_url( "/case/" ));
  $news = esc_url( home_url( "/news/" ));
  $download = esc_url( home_url( "/download/" ));
  $contact = esc_url( home_url( "/contact/" ));
?>


  <section class="download-contact">
    <div class="footer-top  ">
      <div class="footer-top__body js-top-download">
        <div class="footer-top__title">
          <div class="section-title section-title--small">
            <h2 class="section-title__en section-title__en--small">download</h2><!-- /.section-title__title -->
            <p class="section-title__jp section-title__jp--small">資料ダウンロード</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.footer-top__title -->
        <div class="footer-top__btn">
          <a href="<?php echo $download ?>" class="btn btn--yellow">View more</a><!-- /.btn -->
        </div><!-- /.footer-top__btn -->
      </div><!-- /.footer-top__body -->
      <div class="footer-top__body js-top-download">
        <div class="footer-top__title">
          <div class="section-title section-title--small">
            <h2 class="section-title__en section-title__en--small">contact</h2><!-- /.section-title__title -->
            <p class="section-title__jp section-title__jp--small">お問い合わせ</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.footer-top__title -->
        <div class="footer-top__btn">
          <a href=" <?php echo $contact ?> " class="btn btn--yellow">View more</a><!-- /.btn -->
        </div><!-- /.footer-top__btn -->
      </div><!-- /.footer-top__body -->
    </div><!-- /.download-contact -->
  </section><!-- /.download-contact -->