<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-download">
    <div class="inner">
      <div class="sub-download__breadcrumb sub-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
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


 <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
   <?php the_content(  ) ;?>
  <?php endwhile;?>      
 <?php endif; ?>


          </div><!-- /.sub-download__bottom -->
        </div><!-- /.sub-download__flex -->
      </div><!-- /.inner -->
    </section><!-- /.sub-download__body -->
  </div><!-- /.sub-download -->

    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>