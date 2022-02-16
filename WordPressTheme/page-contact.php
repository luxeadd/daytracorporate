<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-contact">
    <div class="sub-contact__breadcrumb sub-breadcrumb">
        <div class="inner">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
    </div><!-- /.inner -->
      </div><!-- /.sub-contact__breadcrumb -->
    
     
   
    <section class="sub-contact__body">
      <div class="inner">
        <p class="sub-contact__text text-main">研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br> 2日以内に担当者からメールにてご連絡いたします。</p><!-- /.contact__text -->
        <h2 class="sub-contact__title">お問い合わせ</h2><!-- /.contact__title -->
        <div class="sub-contact__from">
          
          
          <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(  ) ;?>
            <?php endwhile;?>      
            <?php endif; ?>
            
            
            
          </div><!-- /.sub-contact__from -->
        </div>
      </section><!-- /.sub-contact__body -->
    </div>

    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>