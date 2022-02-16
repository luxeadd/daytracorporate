<aside class="sub-news__aside">
          <div class="news-aside">
            <div class="news-aside__news">
              <h2 class="news-aside__news-title sub-news-title">新着記事</h2><!-- /.sub-news__news-title sub-title -->
              <div class="news-aside__news-body">
                <div class="cards">
                  <div class="cards__items">

 <?php
$news_query = new WP_Query(
	array(
		'post_type'=> 'post',//投稿タイプ カスタム投稿の場合はスラッグ名
		'posts_per_page' => 5,  //投稿表示数
   
	)
);
?>
<?php if ( $news_query->have_posts() ) : ?>
  <?php while ( $news_query->have_posts() ) : ?>
  	<?php $news_query->the_post(); ?>
	
                  <div class="cards__item cards__item--aside">
                      <article class="card">
                        <a href="<?php the_permalink(); //記事のリンクを表示 ?> ">
                          <div class="card__header card__header--aside">
                            <figure class="card__figure card__figure--aside">
                            <?php
                              if (has_post_thumbnail() ) {
                              // アイキャッチ画像が設定されてれば大サイズで表示
                              the_post_thumbnail('large');
                              } 
                              ?>
                            </figure>
                          </div><!-- /.card__header -->
                          <div class="card__body card__body--aside">
                            <div class="card__meta">
                            <?php
                                // カテゴリー１つ目の名前を表示
                                $category = get_the_category();
                                if ($category[0] ) {
                                echo '<div class="card__category card__category--aside">' . $category[0]->cat_name . '</div>';
                                }
                                ?>
                              <time class="card__time" datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('Y.m.j'); ?></time>
                            </div><!-- /.card__meta -->
                            <h3 class="card__title card__title--aside">
                            <?php
                              if(mb_strlen($post->post_title)>30) {
                                $title= mb_substr($post->post_title,0,30) ;
                                  echo $title . '...';
                                } else {
                                  echo $post->post_title;
                                }
                              ?>
                            </h3>
                          </div><!-- /.card__body -->
                        </a>
                      </article>
                    </div><!-- /.cards__item -->


	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?> <!-- post_typeなどを強制的に上書きしているため初期化 -->

                  </div><!-- /.cards__items -->
                </div><!-- /.cards -->
              </div><!-- /.sub-news__news-body -->
            </div><!-- /.sub-news__news -->


  <?php
	// 親カテゴリーのものだけを一覧で取得
	$args = array(
		'parent' => 0,
		'orderby' => 'term_order',
		'order' => 'ASC'
	);
	$categories = get_categories( $args );
?>
            <!-- カテゴリ一覧 -->
            <div class="news-aside__category">
              <h2 class="news-aside__category-title sub-news-title">カテゴリで絞る</h2><!-- /.sub-news__-title sub-title -->
              <div class="news-aside__category-body">
                <ul class="news-category">
                <?php foreach( $categories as $category ) : ?>
                  <li class="news-category__item"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></li><!-- /.news-category__item -->
                  <?php endforeach; ?>
                </ul><!-- /.news-category -->
              </div><!-- /.sub-news__category-body -->
            </div><!-- /.sub-news__category -->
            
          </div><!-- /.news-aside -->
        </aside><!-- /.sub-news__aside -->