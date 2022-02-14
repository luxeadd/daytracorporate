<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-download">
    <div class="inner">
      <div class="sub-download__breadcrumb sub-breadcrumb">
        <nav class="breadcrumb">
          <ol class="breadcrumb__list">
            <li class="breadcrumb__item">
              <a href=" index.html "> ホーム </a>
            </li>
            <li class="breadcrumb__item">
              <a href="  "> 無料ダウンロード </a>
            </li>
          </ol>
        </nav><!-- /.breadcrumb -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->
    <section class="sub-download__body">
      <div class="inner">
        <div class="sub-download__flex">
          <div class="sub-download__top">
            <div class="sub-download__top-message">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</div><!-- /.sub-download__top-message -->
            <div class="sub-download__img">
              <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/pamphlet.jpg" alt="ビジネス英会話研修画像">
            </div><!-- /.sub-download__img -->
            <p class="sub-download__top-text text-main">急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br>ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。</p><!-- /.sub-download__top-text -->
            <p class="sub-download__top-text text-main">英語に苦手意識のある方でもご安心ください。<br>ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br> まずはこちらの資料をごらんください。</p><!-- /.sub-download__top-text -->
          </div><!-- /.sub-download__top -->
          <div class="sub-download__bottom">
            <div class="contact">
              <div class="contact__contents">
                <div class="contact__content">
                  <div class="contact__head">
                    <p class="contact__title">会社名</p><!-- /.contact__title -->
                  </div><!-- /.contact__head -->
                  <div class="contact__item contact-text">
                    <input class="contact-text__text" type="text" placeholder="例）○○株式会社">
                  </div><!-- /.contact__item -->
                </div><!-- /.contact__content -->
                <div class="contact__content">
                  <div class="contact__head">
                    <p class="contact__title">お名前</p><!-- /.contact__title -->
                    <span class="contact__required">必須</span>
                  </div><!-- /.contact__head -->
                  <div class="contact__item contact-text">
                    <input class="contact-text__text" type="text" placeholder="例）鈴木 一郎">
                  </div><!-- /.contact__item -->
                </div><!-- /.contact__content -->
                <div class="contact__content">
                  <div class="contact__head">
                    <p class="contact__title">お名前(フリガナ)</p><!-- /.contact__title -->
                    <span class="contact__required">必須</span>
                  </div><!-- /.contact__head -->
                  <div class="contact__item contact-text">
                    <input class="contact-text__text" type="text" placeholder="例）スズキ イチロウ">
                  </div><!-- /.contact__item -->
                </div><!-- /.contact__content -->
                <div class="contact__content">
                  <div class="contact__head">
                    <p class="contact__title">電話番号</p><!-- /.contact__title -->
                  </div><!-- /.contact__head -->
                  <div class="contact__item contact-text">
                    <input class="contact-text__text" type="tel" placeholder="例）0312345678">
                  </div><!-- /.contact__item -->
                </div><!-- /.contact__content -->
                <div class="contact__content">
                  <div class="contact__head">
                    <p class="contact__title">メールアドレス</p><!-- /.contact__title -->
                    <span class="contact__required">必須</span>
                  </div><!-- /.contact__head -->
                  <div class="contact__item contact-text">
                    <input class="contact-text__text" type="email" placeholder="例）info@example.com">
                  </div><!-- /.contact__item -->
                </div><!-- /.contact__content -->
                <div class="contact__content contact__content--checkbox contact-checkbox">
                  <label>
                    <input class="contact-checkbox__item" type="checkbox" name=""><span> <a href="" class="contact-checkbox__link">個人情報保護方針</a> に同意します。</span>
                  </label>
                </div><!-- /.contact__content -->
                <div class="contact__content contact__content--button contact-button">
                  <input class="contact-button__submit" type="submit" value="資料をダウロードする">
                </div><!-- /.contact__content -->
              </div><!-- /.contact__contents -->
            </div>
          </div><!-- /.sub-download__bottom -->
        </div><!-- /.sub-download__flex -->
      </div><!-- /.inner -->
    </section><!-- /.sub-download__body -->

    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>