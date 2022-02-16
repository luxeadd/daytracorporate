<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-news-detail">
    <div class="inner">
      <div class="sub-news-datail__breadcrumb sub-breadcrumb">
      <div class="sub-case">
    <div class="inner">
      <div class="sub-case__breadcrumb sub-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->
    <div class="sub-news-detail___body">
      <div class="inner sub-news-detail__inner">
        <section class="sub-news-detail__top">
          <div class="news-detail">
            <div class="news-detail__meta">
                  <?php
                  // カテゴリー１つ目の名前を表示
                  $category = get_the_category();
                  if ($category[0] ) {
                  echo '<div class="news-detail__category">' . $category[0]->cat_name . '</div>';
                  }
                  ?>
              <time class="news-detail__time" datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('Y.m.j'); ?></time>
            </div><!-- /.news-detail__meta -->
            <h1 class="news-detail__title"><?php the_title(); //タイトルを表示 ?></h1><!-- /.news-detail__title -->
            <div class="news-detail__img">
            <?php
                if (has_post_thumbnail() ) {
                // アイキャッチ画像が設定されてれば大サイズで表示
                the_post_thumbnail('large');
                } 
                ?>
            </div><!-- /.news-detail__img -->
            <h2 class="news-detail__title-h2"><?php echo SCF::get( 'news_title1' );?></h2><!-- /.news-detail__title-h2 -->
            <p class="news-detail__text text-main"><?php $newsTextSub = scf::get('news_text1'); echo nl2br( $newsTextSub ); ?></p><!-- /.news-detail__text text-main -->
            <h3 class="news-detail__title-h3"><?php echo SCF::get( 'news_title2' );?></h3><!-- /.news-detail__title-h2 -->
            <p class="news-detail__text text-main"><?php $newsTextSub = scf::get('news_text2'); echo nl2br( $newsTextSub ); ?></p><!-- /.news-detail__text text-main -->
            <h4 class="news-detail__title-h4"><?php echo SCF::get( 'news_title3' );?></h4><!-- /.news-detail__title-h2 -->
            <p class="news-detail__text text-main"><?php $newsTextSub = scf::get('news_text3'); echo nl2br( $newsTextSub ); ?></p><!-- /.news-detail__text text-main -->
            <ul class="news-detail__lists">
                <?php $test_data = SCF::get('news_lists'); ?>
                <?php foreach ($test_data as $fields ) :?>
                  <li class="news-detail__list text-main"><?php echo $fields['news_list']; ?></li><!-- /.news-detail__list -->   
                <?php endforeach ?>
            </ul><!-- /.news-detail__lists -->
            <div class="news-detail__quote text-main"> <?php $newsTextSub = scf::get('news_quote'); echo nl2br( $newsTextSub ); ?></div><!-- /.news-detail__quote -->


  <?php
 $previous_post = get_previous_post();
 $previous_id = $previous_post->ID;
 $previous_date = mysql2date('Y.m.d', $previous_post->post_date);
 $next_post = get_next_post();
 $next_id = $next_post->ID;
 $next_date = mysql2date('Y.m.d', $next_post->post_date);
?>
            <div class="news-detail__pagination">
              <div class='navigation'>
                <!-- 前に記事がなければ非表示 --> <?php if( $previous_post ): ?> <a class="previouspostslink" rel="prev" href="<?php the_permalink( $previous_id ); ?>">＜ 前の記事へ</a> <?php endif; ?>
                <!-- 次にに記事がなければ非表示 --> <?php if( $next_post ): ?> <a class="nextpostslink" rel="next" href="<?php the_permalink( $next_id ); ?>">次の記事へ ＞</a> <?php endif; ?>
              </div>
            </div><!-- /.news-detail__pagination -->

          </div><!-- /.news-detail -->
        </section><!-- /.sub-news__top -->


         <!-- 新着記事一覧  ・ カテゴリ一覧-->
         <?php get_template_part( 'template-parts/news-aside' ); ?>


      </div><!-- /.inner -->
    </div><!-- /.sub-news___body -->


    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>