<?php get_header(); ?>

<!-- MV -->
<?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-news">
    <div class="inner">
      <div class="sub-news__breadcrumb sub-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->

    <div class="sub-news___body">
      <div class="inner sub-news__inner">
        <section class="sub-news__top">
        <?php
            $category = get_the_category();
            $cat_id   = $category[0]->cat_ID;
            $cat_name = $category[0]->cat_name;
            $cat_slug = $category[0]->category_nicename;
          ?>
          <h2 class="sub-news__top-title sub-news-title"><?php echo $cat_name; ?></h2><!-- /.sub-news__top-title sub-title -->
          <div class="sub-news__top-body">
            <div class="cards">
              <div class="cards__items">

  <?php
  //記事があれば以下を表示
    if ( have_posts() ) : ?>
   <?php
    //記事数ぶんループ
    while ( have_posts() ) :
    the_post(); ?>

              <div class="cards__item">
                  <article class="card">
                    <a href=" <?php the_permalink(); //記事のリンクを表示 ?> ">
                      <div class="card__header">
                        <figure class="card__figure">
                        <?php
                              if (has_post_thumbnail() ) {
                              // アイキャッチ画像が設定されてれば大サイズで表示
                              the_post_thumbnail('large');
                              } 
                              ?>
                        </figure>
                      </div><!-- /.card__header -->
                      <div class="card__body">
                        <div class="card__meta">
                        <?php
                            // カテゴリー１つ目の名前を表示
                            $category = get_the_category();
                            if ($category[0] ) {
                            echo '<div class="card__category">' . $category[0]->cat_name . '</div>';
                            }
                            ?>
                          <time class="card__time" datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('Y.m.j'); ?> </time>
                        </div><!-- /.card__meta -->
                        <h3 class="card__title"><?php the_title(); //タイトルを表示 ?></h3>
                      </div><!-- /.card__body -->
                    </a>
                  </article>
                </div><!-- /.cards__item -->

    <?php
       endwhile;
        ?>      
     <?php endif; ?>
              </div><!-- /.cards__items -->
            </div><!-- /.cards -->
          </div><!-- /.sub-news__top-body -->

         <!-- ページネーション -->
          <div class="sub-news__pagination">
           <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
          </div><!-- /.sub-news__pagination -->
        
        </section><!-- /.sub-news__top -->


        <!-- 新着記事一覧  ・　カテゴリ一覧-->
        <?php get_template_part( 'template-parts/news-aside' ); ?>
       

      </div><!-- /.inner -->
    </div><!-- /.sub-news___body -->

    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>