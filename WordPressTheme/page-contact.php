<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-contact">
    <div class="inner">
      <div class="sub-contact__breadcrumb sub-breadcrumb">
        <nav class="breadcrumb">
          <ol class="breadcrumb__list">
            <li class="breadcrumb__item">
              <a href=" index.html "> ホーム </a>
            </li>
            <li class="breadcrumb__item">
              <a href="  "> お問い合わせ </a>
            </li>
          </ol>
        </nav><!-- /.breadcrumb -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->
    <section class="sub-contact__body">
      <div class="inner">
        <p class="sub-contact__text text-main">研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br> 2日以内に担当者からメールにてご連絡いたします。</p><!-- /.contact__text -->
        <h2 class="sub-contact__title">お問い合わせ</h2><!-- /.contact__title -->
        <div class="sub-contact__from">
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
              <div class="contact__content">
                <div class="contact__head">
                  <p class="contact__title">ご用件</p><!-- /.contact__title -->
                  <span class="contact__required">必須</span>
                </div><!-- /.contact__head -->
                <div class="contact__item contact-select">
                  <select name="ご用件" class="contact-select_text">
                    <option value="">ご用件を選択</option>
                    <option value="">セレクトA</option>
                    <option value="">セレクトB</option>
                    <option value="">セレクトC</option>
                  </select>
                </div><!-- /.contact__item -->
              </div><!-- /.contact__content -->
              <div class="contact__content">
                <div class="contact__head">
                  <p class="contact__title">ご用件の詳細</p><!-- /.contact__title -->
                  <span class="contact__required">必須</span>
                </div><!-- /.contact__head -->
                <div class="contact__item contact-textarea">
                  <textarea class="contact-textarea__text"></textarea>
                </div><!-- /.contact__item -->
              </div><!-- /.contact__content -->
              <div class="contact__content contact__content--checkbox contact-checkbox">
                <label>
                  <input class="contact-checkbox__item" type="checkbox" name=""><span> <a href="" class="contact-checkbox__link">個人情報保護方針</a> に同意します。</span>
                </label>
              </div><!-- /.contact__content -->
              <div class="contact__content contact__content--button contact-button">
                <input class="contact-button__submit" type="submit" value="送信">
              </div><!-- /.contact__content -->
            </div><!-- /.contact__contents -->
          </div>
        </div><!-- /.sub-contact__from -->
    </section><!-- /.sub-contact__body -->

    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>