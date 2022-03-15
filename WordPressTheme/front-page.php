<?php get_header(); ?>

<?php
  $home = esc_url( home_url( "/" ));
  $about = esc_url( home_url( "/about/" ));
  $service = esc_url( home_url( "/service/" ));
  $case = esc_url( home_url( "/case/" ));
  $news = esc_url( home_url( "/news/" ));
  $download = esc_url( home_url( "/download/" ));
  $contact = esc_url( home_url( "/contact/" ));
?>

  <!-- MV -->
  <div class="top-mv">
    <div class="top-mv__img">
      <!-- ここでwidth heightを設定しておくこと -->
      <div class="swiper js-mv-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php $mvImg1 = scf::get('mv_img1'); echo wp_get_attachment_url( $mvImg1 ); ?>" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
              <img src="<?php $mvImg1 = scf::get('mv_img1_sp'); echo wp_get_attachment_url( $mvImg1 ); ?>" alt="MV画像">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php $mvImg2 = scf::get('mv_img2'); echo wp_get_attachment_url( $mvImg2 ); ?>" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
              <img src="<?php $mvImg2 = scf::get('mv_img2_sp'); echo wp_get_attachment_url( $mvImg2 ); ?>" alt="MV画像2">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php $mvImg3 = scf::get('mv_img3'); echo wp_get_attachment_url( $mvImg3 ); ?>" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
              <img src="<?php $mvImg3 = scf::get('mv_img3_sp'); echo wp_get_attachment_url( $mvImg3 ); ?>" alt="MV画像3">
            </picture>
          </div>
        </div>
      </div>
    </div><!-- /.top-mv__img -->
    <div class="top-mv__body ">
      <h2 class="top-mv__title-en u-sp   js-mv-en">
        <span>you can</span><br>
        <span>change</span><br>
        <span>the world</span>
      </h2><!-- /.top-mv__title -->
      <h2 class="top-mv__title-en u-pc  js-mv-en">
        <span>you can change</span><br>
        <span>the world</span>
      </h2><!-- /.top-mv__title -->
      <p class="too-mv__title-jp js-mv-jp">世界で活躍できるグローバルな人材を育てる</p><!-- /.too-mv__title-jp -->
    </div><!-- /.top-mv__body -->
  </div><!-- /.top-mv -->

  <!-- about -->
  <section class="top-about top-about-layout  js-top-about">
    <div class="inner">
      <div class="top-about__flex ">
        <div class="top-about__title js-about-title">
          <div class="section-title ">
            <h2 class="section-title__en">about us</h2><!-- /.section-title__title -->
            <p class="section-title__jp">当社について</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-about__title -->
        <div class="top-about__link js-top-about-link">
          <a href="<?php echo $about ?>" class="view-more">
            <p class="view-more__text">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-about__link -->
        <div class="top-about__body">
          <div class="about-block">
            <div class="about-block__inner">
              <div class="about-block__text-box js-top-about-text">
                <p class="about-block__text text-main">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p><!-- /.about-block__text -->
                <p class="about-block__text text-main">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。 </p><!-- /.about-block__text -->
                <p class="about-block__text text-main">文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p><!-- /.about-block__text -->
              </div><!-- /.about-block_text -->
              <div class="about-block__img js-top-about-img">
                <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-about.jpg" alt="当社について">
              </div><!-- /.about-block__img -->
            </div><!-- /.inner -->
          </div><!-- /.about-block -->
        </div><!-- /.top-about__body -->
      </div><!-- /.top-about__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-about -->

  <!-- service -->
  <section class="top-service top-service-layout js-top-service">
    <div class="inner">
      <div class="top-service__flex ">
        <div class="top-service__title js-service-title">
          <div class="section-title">
            <h2 class="section-title__en">service</h2><!-- /.section-title__title -->
            <p class="section-title__jp">サービス</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-service__title -->
        <div class="top-service__link js-top-service-link">
          <a href="<?php echo $service ?>" class="view-more view-more--black">
            <p class="view-more__text view-more__text--black">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-service__link -->
        <div class="top-service__body">
          <div class="service-block">
            <ul class="service-block_items">
              <li class="service-block__item">
                <div class="service-block__img js-top-service-img">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-service1.jpg" alt="ビジネス英語研修画像">
                  <h3 class="service-block__title">
                    <span>ビジネス英語研修</span>
                  </h3><!-- /.service-block__title -->
                </div><!-- /.service-block__img -->
                <p class="service-block__text text-main js-top-service-text"> ビジネス英会話はこれからの時代、すべてのビジネスパーソンが学ぶべき必須スキルと考えおります。海外にビジネス展開する際にはもちろんのこと、日本国内でも英会話コミュニケーションができることによってチャンスが掴める場面があります。 </p><!-- /.service-block__text -->
              </li><!-- /.service-block__item -->
              <li class="service-block__item">
                <div class="service-block__img js-top-service-img">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-service2.jpg" alt="異文化研修画像">
                  <h3 class="service-block__title">
                    <span>異文化</span><span>コミュニケーション研修</span>
                  </h3><!-- /.service-block__title -->
                </div><!-- /.service-block__img -->
                <p class="service-block__text text-main js-top-service-text"> 急速にグローバル化が進んでおり、ビジネスの場面に限らず様々な文化的背景を持つ者同士の交流はもはや日常的な光景となりました。<br>言語や文化が異なる相手を理解することで世界が広がり、新たなビジネスチャンスに巡り会うことは少なくありません。 </p><!-- /.service-block__text -->
              </li><!-- /.service-block__item -->
              <li class="service-block__item">
                <div class="service-block__img js-top-service-img">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/top-service3.jpg" alt="ビジネス英語研修画像">
                  <h3 class="service-block__title">
                    <span>ビジネス留学</span><span>サポートプログラム</span>
                  </h3><!-- /.service-block__title -->
                </div><!-- /.service-block__img -->
                <p class="service-block__text text-main js-top-service-text"> 将来的に海外で働きたい方に向けた講座をご用意しております。一般的には3ヶ月〜1年の期間で基本的な英会話スキルと、海外でのビジネスマナー習得を目指します。<br> 通常の語学留学では得られないビジネスの場で通用するコミュニケーションスキル習得に重点をおいておりますので、海外でビジネス展開する際に自信を持って活動することができるようになります。 </p><!-- /.service-block__text -->
              </li><!-- /.service-block__item -->
            </ul><!-- /.service-block_items -->
          </div><!-- /.service-block -->
        </div><!-- /.top-service__body -->
      </div><!-- /.top-service__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-service -->

  <!-- case -->
  <section class="top-case js-top-case">
    <div class="inner">
      <div class="top-case__flex ">
        <div class="top-case__title js-case-title">
          <div class="section-title section-title--white">
            <h2 class="section-title__en section-title__en--white">case study</h2><!-- /.section-title__title -->
            <p class="section-title__jp section-title__jp--white">導入事例</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-case__title -->
        <div class="top-case__link js-top-case-link">
          <a href="<?php echo $case ?>" class="view-more">
            <p class="view-more__text">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-case__link -->
        <div class="top-case__body">
          <div class="case-block">
            <div class="case-block__items">

    <?php
    $related_query = new WP_Query(
      array(
         'posts_per_page'=> 6, //表示件数
         'post_type' => 'case', //カスタム投稿タイプ名
         'orderby' => 'rand', //ランダム表示
    
      )
    );
    ?>
    <?php if ( $related_query->have_posts() ) : ?>
      <?php while ( $related_query->have_posts() ) : ?>
        <?php $related_query->the_post(); ?>
              <article class="case-block__item">
                <a href="/case/#<?php $postId = get_the_ID(); echo $postId ?>">
                  <div class="case-block__header">
                    <figure class="case-block__figure js-top-case-img">
                    <?php
                      if (has_post_thumbnail() ) {
                      // アイキャッチ画像が設定されてれば大サイズで表示
                      the_post_thumbnail('large');
                      } 
                      ?>
                    </figure>
                  </div><!-- /.case-block__header -->
                  <div class="case-block__body js-top-case-text">
                    <h3 class="case-block__title "><?php the_title(); //タイトルを表示 ?></h3>
                  </div><!-- /.case-block__body -->
                  <div class="case-block__footer js-top-case-text">
                    <div class="case-block__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?></div><!-- /.case-block__category -->
                    <div class="case-block__arrow">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/arrow.png" alt="矢印">
                    </div><!-- /.case-block__link -->
                  </div><!-- /.case-block__footer -->
                </a>
              </article>
              <?php endwhile; ?> 
        <?php endif; ?>
  <?php wp_reset_postdata(); ?>

          
        
      </div><!-- /.case-block__items -->
    </div><!-- /.case-block -->
    </div><!-- /.top-case__body -->
    </div><!-- /.top-case__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-case -->
  <!-- news -->
  <section class="top-news  js-top-news">
    <div class="inner">
      <div class="top-news__flex ">
        <div class="top-news__title js-news-title">
          <div class="section-title">
            <h2 class="section-title__en">news</h2><!-- /.section-title__title -->
            <p class="section-title__jp">新着情報</p><!-- /.section-title__title -->
          </div><!-- /.section-title -->
        </div><!-- /.top-news__title -->
        <div class="top-news__link js-top-news-link">
          <a href="<?php echo $news ?>" class="view-more view-more--black">
            <p class="view-more__text view-more__text--black">View more</p><!-- /.view-more__text -->
          </a><!-- /.view-more -->
        </div><!-- /.top-news__link -->
        <div class="top-news__body js-top-news-text">
          <div class="news-block">
            <div class="news-block__items">

<?php
$newsTop_query = new WP_Query(
array(
'posts_per_page'=> 3, //表示件数
'post_type' => 'post', //カスタム投稿タイプ名

)
);
?>
<?php if ( $newsTop_query->have_posts() ) : ?>
<?php while ( $newsTop_query->have_posts() ) : ?>
<?php $newsTop_query->the_post(); ?>
              <article class="news-block__item">
              <?php
              // カテゴリー１つ目の名前を表示
              $category = get_the_category();
              if ($category[0] ) {
              echo '<div class="news-block__category">' . $category[0]->cat_name . '</div>';
              }
              ?>
                <time class="news-block__date" datetime=" <?php the_time('Y-m-j'); ?> "> <?php the_time('Y.m.j'); ?> </time>
                <h3 class="news-block__title">
                  <a href="<?php the_permalink(); //記事のリンクを表示 ?>"> <?php the_title(); //タイトルを表示 ?> </a>
                </h3>
              </article>
              <?php endwhile; ?> 
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>
              
            </div><!-- /.new-block__items -->
          </div><!-- /.news-block -->
        </div><!-- /.top-news__body -->
      </div><!-- /.top-news__flex -->
    </div><!-- /.inner -->
  </section><!-- /.top-news -->
 
  <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>