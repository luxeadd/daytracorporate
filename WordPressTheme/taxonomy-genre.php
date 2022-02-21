<?php get_header(); ?>

<!-- MV -->
<div class="sub-mv">
    <div class="sub-mv__block">
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-case-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-case-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title js-sub-mv-title">
        <span class="sub-mv__title--en">case study </span><br><span class="sub-mv__title--jp"> 導入事例 </span>
      </h1><!-- /.sub-mv__title -->
      <div class="sub-mv__decoration js-sub-mv-decoration"></div><!-- /.sub-mv__decoration -->
    </div><!-- /.sub-mv__block -->
  </div><!-- /.sub-mv -->

  <!-- パンくず -->
  <div class="sub-case">
    <div class="inner">
      <div class="sub-case__breadcrumb sub-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->

    
    <div class="sub-case__body">
      <div class="inner">
        <div class="sub-case__taxonomies">
          <?php
          // 親カテゴリーのものだけを一覧で取得
          $args = array(
          'parent' => 0,
          'post_type' => 'case', //カスタム投稿タイプ名
          'taxonomy' => 'genre', //タクソノミー名
          'order' => 'ASC'
          
          );
          $categories = get_categories( $args );
          ?>
          <?php foreach( $categories as $category ) : ?>
            <div class="sub-case__taxonomy"><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a></div><!-- /.sub-case__taxonomy -->
          <?php endforeach; ?>
        </div><!-- /.sub-case__taxonomy -->


        <section class="sub-case__block">
          <div class="sub-case__title">
            <h2 class="sub-case__title--jp"><?php single_term_title(); ?></h2><!-- /.sub-case__title--jp -->
        <?php if(is_tax("genre", "english")): ?>
          <p class="sub-case__title--en">Business English Training</p>
        <?php endif; ?>
        <?php if(is_tax("genre", "culture")): ?>
          <p class="sub-case__title--en">Cross-cultural communication</p>
        <?php endif; ?>
        <?php if(is_tax("genre", "abroad")): ?>
          <p class="sub-case__title--en">Business study abroad program</p>
        <?php endif; ?>
          </div><!-- /.sib-case__title -->

          <div class="sub-case__items">
            <div class="case-items">
    <?php
  //記事があれば以下を表示
    if ( have_posts() ) : ?>
   <?php
    //記事数ぶんループ
    while ( have_posts() ) :
    the_post(); ?>
   
               <div class="case-items__item">
               <article class="case-item">
                  <div class="case-item__header">
                    <h3 class="case-item__title">
                      <span><?php echo SCF::get( 'case_category' );?> </span>
                      <span><?php the_title(); //タイトルを表示 ?></span>
                      <span>様</span>
                    </h3><!-- /.case-item__title -->
                    <div class="case-item__img">
                    <?php
                      if (has_post_thumbnail() ) {
                      // アイキャッチ画像が設定されてれば大サイズで表示
                      the_post_thumbnail('large');
                      } 
                      ?>
                    </div><!-- /.case-item__img -->
                  </div><!-- /.case-item__header -->
                  <div class="case-item__body">
                    <div class="case-item__body-head">
                      <div class="case-item__corse"> 研修コース</div><!-- /.case-item__corse -->
                      <div class="case-item__category">  <?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?></div><!-- /.case-item__category -->
                    </div><!-- /.case-item__body-head -->
                    <h3 class="case-item__subtitle">研修の目的 </h3><!-- /.case-item__subtitle -->
                    <p class="case-item__text"> <?php $caseTextSub = scf::get('case_purpose'); echo nl2br( $caseTextSub ); ?></p><!-- /.case-item__text -->
                    <h3 class="case-item__subtitle">選んだ理由 </h3><!-- /.case-item__subtitle -->
                    <p class="case-item__text"><?php $caseTextSub = scf::get('case_reason'); echo nl2br( $caseTextSub ); ?></p><!-- /.case-item__text -->
                    <h3 class="case-item__subtitle"> 導入後の成果・効果</h3><!-- /.case-item__subtitle -->
                    <p class="case-item__text"> <?php $caseTextSub = scf::get('case_result'); echo nl2br( $caseTextSub ); ?></p><!-- /.case-item__text -->
                  </div><!-- /.case-item__body -->
                </article>
              </div><!-- /.case-items__item -->
	
        <?php
        endwhile;
        ?>      
      <?php endif; ?>
	
            </div><!-- /.case-items -->
          </div><!-- /.sub-case__items -->
          <div class="sub-case__btn">
          <?php if(is_tax("genre", "english")): ?>
            <a href="<?php echo esc_url( home_url( '/service/#english' ) ); ?>" class="btn btn--arrow">ビジネス英語研修の詳細</a><!-- /.btn -->
        <?php endif; ?>
        <?php if(is_tax("genre", "culture")): ?>
          <a href="<?php echo esc_url( home_url( '/service/#culture' ) ); ?>" class="btn btn--arrow">異文化コミュニケーションの詳細</a><!-- /.btn -->
        <?php endif; ?>
        <?php if(is_tax("genre", "abroad")): ?>
          <a href="<?php echo esc_url( home_url( '/service/#abroad' ) ); ?>" class="btn btn--arrow">ビジネス留学プログラムの詳細</a><!-- /.btn -->
        <?php endif; ?>
          </div><!-- /.sub-case__btn -->
        </section><!-- /.sub-case__top -->


      
      </div><!-- /.inner -->
    </div><!-- /.sub__case__body -->
    </div><!-- /.sub__case-->




    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>