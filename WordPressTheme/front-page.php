<?php get_header(); ?>


  <!-- MV -->
  <div class="top-mv">
    <div class="top-mv__img">
      <!-- ここでwidth heightを設定しておくこと -->
      <div class="swiper js-mv-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-mv.jpg" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-mv-sp1.jpg" alt="MV画像">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-mv2.jpg" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-mv-sp2.jpg" alt="MV画像">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-mv3.jpg" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
              <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-mv-sp3.jpg" alt="MV画像">
            </picture>
          </div>
        </div>
      </div>
    </div><!-- /.top-mv__img -->
    <div class="top-mv__body">
      <h2 class="top-mv__title-en u-sp">
        <span>you can</span><br>
        <span>change</span><br>
        <span>the world</span>
      </h2><!-- /.top-mv__title -->
      <h2 class="top-mv__title-en u-pc">
        <span>you can change</span><br>
        <span>the world</span>
      </h2><!-- /.top-mv__title -->
      <p class="too-mv__title-jp">世界で活躍できるグローバルな人材を育てる</p><!-- /.too-mv__title-jp -->
    </div><!-- /.top-mv__body -->
  </div><!-- /.top-mv -->
  <!-- about -->
  <section class="top-about top-about-layout">
    <div class="inner">
      <div class="top-about__flex ">
        <div class="top-about__title">
          <div class="section-title">
            <h2 class="section-title__en">about us</h2><!-- /.section-title__title -->
            <p class="section-title__jp">当社について</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-about__title -->
        <div class="top-about__link">
          <a href="#" class="view-more">
            <p class="view-more__text">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-about__link -->
        <div class="top-about__body">
          <div class="about-block">
            <div class="about-block__inner">
              <div class="about-block__text-box">
                <p class="about-block__text text-main">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p><!-- /.about-block__text -->
                <p class="about-block__text text-main">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。 </p><!-- /.about-block__text -->
                <p class="about-block__text text-main">文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p><!-- /.about-block__text -->
              </div><!-- /.about-block_text -->
              <div class="about-block__img">
                <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-about.jpg" alt="当社について">
              </div><!-- /.about-block__img -->
            </div><!-- /.inner -->
          </div><!-- /.about-block -->
        </div><!-- /.top-about__body -->
      </div><!-- /.top-about__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-about -->
  <!-- service -->
  <section class="top-service top-service-layout">
    <div class="inner">
      <div class="top-service__flex ">
        <div class="top-service__title">
          <div class="section-title">
            <h2 class="section-title__en">service</h2><!-- /.section-title__title -->
            <p class="section-title__jp">サービス</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-service__title -->
        <div class="top-service__link">
          <a href="#" class="view-more view-more--black">
            <p class="view-more__text view-more__text--black">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-service__link -->
        <div class="top-service__body">
          <div class="service-block">
            <ul class="service-block_items">
              <li class="service-block__item">
                <div class="service-block__img">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-service1.jpg" alt="ビジネス英語研修画像">
                  <h3 class="service-block__title">
                    <span>ビジネス英語研修</span>
                  </h3><!-- /.service-block__title -->
                </div><!-- /.service-block__img -->
                <p class="service-block__text text-main"> ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。 </p><!-- /.service-block__text -->
              </li><!-- /.service-block__item -->
              <li class="service-block__item">
                <div class="service-block__img">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-service2.jpg" alt=" ">
                  <h3 class="service-block__title">
                    <span>異文化</span><span>コミュニケーション研修</span>
                  </h3><!-- /.service-block__title -->
                </div><!-- /.service-block__img -->
                <p class="service-block__text text-main"> 急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。 </p><!-- /.service-block__text -->
              </li><!-- /.service-block__item -->
              <li class="service-block__item">
                <div class="service-block__img">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-service3.jpg" alt="ビジネス英語研修画像">
                  <h3 class="service-block__title">
                    <span>ビジネス留学</span><span>サポートプログラム</span>
                  </h3><!-- /.service-block__title -->
                </div><!-- /.service-block__img -->
                <p class="service-block__text text-main"> 将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br> 通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。 </p><!-- /.service-block__text -->
              </li><!-- /.service-block__item -->
            </ul><!-- /.service-block_items -->
          </div><!-- /.service-block -->
        </div><!-- /.top-service__body -->
      </div><!-- /.top-service__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-service -->
  <!-- case -->
  <section class="top-case">
    <div class="inner">
      <div class="top-case__flex ">
        <div class="top-case__title">
          <div class="section-title section-title--white">
            <h2 class="section-title__en section-title__en--white">case study</h2><!-- /.section-title__title -->
            <p class="section-title__jp section-title__jp--white">導入事例</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-case__title -->
        <div class="top-case__link">
          <a href="#" class="view-more">
            <p class="view-more__text">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-case__link -->
        <div class="top-case__body">
          <div class="case-block">
            <div class="case-block__items">
              <article class="case-block__item">
                <a href="">
                  <div class="case-block__header">
                    <figure class="case-block__figure">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/case1.jpg" alt="AAA株式会社様ロゴ">
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body">
                    <h3 class="case-block__title">AAA株式会社 様</h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer">
                    <div class="case-block__category">ビジネス英語研修</div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
              <article class="case-block__item">
                <a href="">
                  <div class="case-block__header">
                    <figure class="case-block__figure">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/case2.jpg" alt="合同会社BBB 様ロゴ">
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body">
                    <h3 class="case-block__title">合同会社BBB 様</h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer">
                    <div class="case-block__category">異文化コミュニケーション</div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
              <article class="case-block__item">
                <a href="">
                  <div class="case-block__header">
                    <figure class="case-block__figure">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/case3.jpg" alt="株式会社CCC 様ロゴ">
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body">
                    <h3 class="case-block__title">株式会社CCC 様</h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer">
                    <div class="case-block__category">ビジネス留学プログラム</div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
              <article class="case-block__item">
                <a href="">
                  <div class="case-block__header">
                    <figure class="case-block__figure">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/case4.jpg" alt="DDD株式会社 様ロゴ">
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body">
                    <h3 class="case-block__title">DDD株式会社 様</h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer">
                    <div class="case-block__category">異文化コミュニケーション</div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
              <article class="case-block__item">
                <a href="">
                  <div class="case-block__header">
                    <figure class="case-block__figure">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/case5.jpg" alt="EEE株式会社 様ロゴ">
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body">
                    <h3 class="case-block__title">EEE株式会社 様</h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer">
                    <div class="case-block__category">ビジネス留学プログラム</div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
              <article class="case-block__item">
                <a href="">
                  <div class="case-block__header">
                    <figure class="case-block__figure">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/case6.jpg" alt="FFF株式会社 様ロゴ">
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body">
                    <h3 class="case-block__title">FFF株式会社 様</h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer">
                    <div class="case-block__category">ビジネス英語研修</div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
            </div>
          </div>
        </div>
      </div><!-- /.case-block__items -->
    </div><!-- /.case-block -->
    </div><!-- /.top-case__body -->
    </div><!-- /.top-case__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-case -->
  <!-- news -->
  <section class="top-news">
    <div class="inner">
      <div class="top-news__flex ">
        <div class="top-news__title">
          <div class="section-title">
            <h2 class="section-title__en">news</h2><!-- /.section-title__title -->
            <p class="section-title__jp">新着情報</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-news__title -->
        <div class="top-news__link">
          <a href="#" class="view-more view-more--black">
            <p class="view-more__text view-more__text--black">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-news__link -->
        <div class="top-news__body">
          <div class="news-block">
            <div class="news-block__items">
              <article class="news-block__item">
                <div class="news-block__category"> 営業時間 </div><!-- /.news-block__category -->
                <time class="news-block__date" datetime=" 2021-07-20 "> 2021.07.20 </time>
                <h3 class="news-block__title">
                  <a href=""> お盆期間中の営業について </a>
                </h3>
              </article>
              <article class="news-block__item">
                <div class="news-block__category"> その他 </div><!-- /.news-block__category -->
                <time class="news-block__date" datetime=" 2021.06.01 "> 2021.06.01 </time>
                <h3 class="news-block__title">
                  <a href=""> 新型コロナウイルス対策ご協力のお願い </a>
                </h3>
              </article>
              <article class="news-block__item">
                <div class="news-block__category"> その他 </div><!-- /.news-block__category -->
                <time class="news-block__date" datetime=" 2021.05.01 "> 2021.05.01 </time>
                <h3 class="news-block__title">
                  <a href=""> オンライン英会話スクール「グッドイングリッシュオンライン株式会社」との業務提携について </a>
                </h3>
              </article>
            </div><!-- /.new-block__items -->
          </div><!-- /.news-block -->
        </div><!-- /.top-news__body -->
      </div><!-- /.top-news__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-news -->
  <!-- ダウンロード・コンタクト -->
  <section class="download-contact">
    <div class="footer-top">
      <div class="footer-top__body">
        <div class="footer-top__title">
          <div class="section-title section-title--small">
            <h2 class="section-title__en section-title__en--small">download</h2><!-- /.section-title__title -->
            <p class="section-title__jp section-title__jp--small">資料ダウンロード</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.footer-top__title -->
        <div class="footer-top__btn">
          <a href="download.html" class="btn btn--yellow">View more</a><!-- /.btn -->
        </div><!-- /.footer-top__btn -->
      </div><!-- /.footer-top__body -->
      <div class="footer-top__body">
        <div class="footer-top__title">
          <div class="section-title section-title--small">
            <h2 class="section-title__en section-title__en--small">contact</h2><!-- /.section-title__title -->
            <p class="section-title__jp section-title__jp--small">お問い合わせ</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.footer-top__title -->
        <div class="footer-top__btn">
          <a href=" contact.html " class="btn btn--yellow">View more</a><!-- /.btn -->
        </div><!-- /.footer-top__btn -->
      </div><!-- /.footer-top__body -->
    </div><!-- /.download-contact -->
  </section><!-- /.download-contact -->


<?php get_footer(); ?>