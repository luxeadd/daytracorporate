<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-news-detail">
    <div class="inner">
      <div class="sub-news-datail__breadcrumb sub-breadcrumb">
        <nav class="breadcrumb">
          <ol class="breadcrumb__list">
            <li class="breadcrumb__item">
              <a href=" index.html "> ホーム </a>
            </li>
            <li class="breadcrumb__item">
              <a href=" news.html "> ニュース </a>
            </li>
            <li class="breadcrumb__item">
              <a href="  "> ニュース詳細 </a>
            </li>
          </ol>
        </nav><!-- /.breadcrumb -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->
    <div class="sub-news-detail___body">
      <div class="inner sub-news-detail__inner">
        <section class="sub-news-detail__top">
          <div class="news-detail">
            <div class="news-detail__meta">
              <div class="news-detail__category">カテゴリ</div><!-- /.news-detai__category -->
              <time class="news-detail__time" datetime="">2021.01.01</time>
            </div><!-- /.news-detail__meta -->
            <h1 class="news-detail__title">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じることで、自走・自立できる思考力・適応力を醸成する起爆剤研修。</h1><!-- /.news-detail__title -->
            <div class="news-detail__img">
              <img src="./images/common/sub-news-detail.jpg" alt="ニュース記事画像">
            </div><!-- /.news-detail__img -->
            <h2 class="news-detail__title-h2">H2見出しH2見出しH2見出し</h2><!-- /.news-detail__title-h2 -->
            <p class="news-detail__text text-main">ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p><!-- /.news-detail__text text-main -->
            <h3 class="news-detail__title-h3">H3見出しH3見出しH3見出し</h3><!-- /.news-detail__title-h2 -->
            <p class="news-detail__text text-main">ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p><!-- /.news-detail__text text-main -->
            <h4 class="news-detail__title-h4">H4見出しH4見出しH4見出し</h4><!-- /.news-detail__title-h2 -->
            <p class="news-detail__text text-main">ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。</p><!-- /.news-detail__text text-main -->
            <ul class="news-detail__lists">
              <li class="news-detail__list text-main"><a href="">・リスト</a></li><!-- /.news-detail__list -->
              <li class="news-detail__list text-main"><a href="">・リスト</a></li><!-- /.news-detail__list -->
              <li class="news-detail__list text-main"><a href="">・リスト</a></li><!-- /.news-detail__list -->
            </ul><!-- /.news-detail__lists -->
            <div class="news-detail__quote text-main"> 引用した文章が入ります。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。今後の目標はプロジェクトマネジメントに特化したマネージャーになることです。ビジネスパーソンとの交流の中で、より具体的に現地で働く人々の仕事に対する熱意や誇り、それぞれが持つリーダーシップなどを学ぶことができ非常に良い経験となりました。 </div><!-- /.news-detail__quote -->
            <div class="news-detail__pagination">
              <div class='navigation'>
                <!-- 前に記事がなければ非表示 --> <?php if( $previous_post ): ?> <a class="previouspostslink" rel="prev" href="<?php the_permalink( $previous_id ); ?>">＜ 前の記事へ</a> <?php endif; ?>
                <!-- 次にに記事がなければ非表示 --> <?php if( $next_post ): ?> <a class="nextpostslink" rel="next" href="<?php the_permalink( $next_id ); ?>">次の記事へ ＞</a> <?php endif; ?>
              </div>
            </div><!-- /.news-detail__pagination -->
          </div><!-- /.news-detail -->
        </section><!-- /.sub-news__top -->
        <aside class="sub-news-detail__aside">
          <div class="news-aside">
            <div class="news-aside__news">
              <h2 class="news-aside__news-title sub-news-title">新着記事</h2><!-- /.sub-news__news-title sub-title -->
              <div class="news-aside__news-body">
                <div class="cards">
                  <div class="cards__items">
                    <div class="cards__item cards__item--aside">
                      <article class="card">
                        <a href=" news-detail.html ">
                          <div class="card__header card__header--aside">
                            <figure class="card__figure card__figure--aside">
                              <img src="./images/common/sub-news-item.jpg " alt="">
                            </figure>
                          </div><!-- /.card__header -->
                          <div class="card__body card__body--aside">
                            <div class="card__meta">
                              <div class="card__category card__category--aside"> カテゴリ </div><!-- /.card__category -->
                              <time class="card__time" datetime="">2021.01.01 </time>
                            </div><!-- /.card__meta -->
                            <h3 class="card__title card__title--aside">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ… </h3>
                          </div><!-- /.card__body -->
                        </a>
                      </article>
                    </div><!-- /.cards__item -->
                    <div class="cards__item cards__item--aside">
                      <article class="card">
                        <a href=" news-detail.html ">
                          <div class="card__header card__header--aside">
                            <figure class="card__figure card__figure--aside">
                              <img src="./images/common/sub-news-item.jpg " alt="">
                            </figure>
                          </div><!-- /.card__header -->
                          <div class="card__body card__body--aside">
                            <div class="card__meta">
                              <div class="card__category card__category--aside"> カテゴリ </div><!-- /.card__category -->
                              <time class="card__time" datetime="">2021.01.01 </time>
                            </div><!-- /.card__meta -->
                            <h3 class="card__title card__title--aside">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ… </h3>
                          </div><!-- /.card__body -->
                        </a>
                      </article>
                    </div><!-- /.cards__item -->
                    <div class="cards__item cards__item--aside">
                      <article class="card">
                        <a href=" news-detail.html ">
                          <div class="card__header card__header--aside">
                            <figure class="card__figure card__figure--aside">
                              <img src="./images/common/sub-news-item.jpg " alt="">
                            </figure>
                          </div><!-- /.card__header -->
                          <div class="card__body card__body--aside">
                            <div class="card__meta">
                              <div class="card__category card__category--aside"> カテゴリ </div><!-- /.card__category -->
                              <time class="card__time" datetime="">2021.01.01 </time>
                            </div><!-- /.card__meta -->
                            <h3 class="card__title card__title--aside">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ… </h3>
                          </div><!-- /.card__body -->
                        </a>
                      </article>
                    </div><!-- /.cards__item -->
                    <div class="cards__item cards__item--aside">
                      <article class="card">
                        <a href=" news-detail.html ">
                          <div class="card__header card__header--aside">
                            <figure class="card__figure card__figure--aside">
                              <img src="./images/common/sub-news-item.jpg " alt="">
                            </figure>
                          </div><!-- /.card__header -->
                          <div class="card__body card__body--aside">
                            <div class="card__meta">
                              <div class="card__category card__category--aside"> カテゴリ </div><!-- /.card__category -->
                              <time class="card__time" datetime="">2021.01.01 </time>
                            </div><!-- /.card__meta -->
                            <h3 class="card__title card__title--aside">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ… </h3>
                          </div><!-- /.card__body -->
                        </a>
                      </article>
                    </div><!-- /.cards__item -->
                    <div class="cards__item cards__item--aside">
                      <article class="card">
                        <a href=" news-detail.html ">
                          <div class="card__header card__header--aside">
                            <figure class="card__figure card__figure--aside">
                              <img src="./images/common/sub-news-item.jpg " alt="">
                            </figure>
                          </div><!-- /.card__header -->
                          <div class="card__body card__body--aside">
                            <div class="card__meta">
                              <div class="card__category card__category--aside"> カテゴリ </div><!-- /.card__category -->
                              <time class="card__time" datetime="">2021.01.01 </time>
                            </div><!-- /.card__meta -->
                            <h3 class="card__title card__title--aside">常にハイパフォーマンスを目指すグローバルビジネスの現場を肌で感じ… </h3>
                          </div><!-- /.card__body -->
                        </a>
                      </article>
                    </div><!-- /.cards__item -->
                  </div><!-- /.cards__items -->
                </div><!-- /.cards -->
              </div><!-- /.sub-news__news-body -->
            </div><!-- /.sub-news__news -->
            <div class="news-aside__category">
              <h2 class="news-aside__category-title sub-news-title">カテゴリ</h2><!-- /.sub-news__-title sub-title -->
              <div class="news-aside__category-body">
                <ul class="news-category">
                  <li class="news-category__item"><a href="">テキストテキスト</a></li><!-- /.news-category__item -->
                  <li class="news-category__item"><a href="">テキストテキスト</a></li><!-- /.news-category__item -->
                  <li class="news-category__item"><a href="">テキストテキスト</a></li><!-- /.news-category__item -->
                  <li class="news-category__item"><a href="">テキストテキスト</a></li><!-- /.news-category__item -->
                  <li class="news-category__item"><a href="">テキストテキスト</a></li><!-- /.news-category__item -->
                  <li class="news-category__item"><a href="">テキストテキスト</a></li><!-- /.news-category__item -->
                </ul><!-- /.news-category -->
              </div><!-- /.sub-news__category-body -->
            </div><!-- /.sub-news__category -->
          </div><!-- /.news-aside -->
        </aside><!-- /.sub-news__aside -->
      </div><!-- /.inner -->
    </div><!-- /.sub-news___body -->


    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>