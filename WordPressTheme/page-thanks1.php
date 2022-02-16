<?php get_header(); ?>

 <!-- MV -->
 <?php get_template_part( 'template-parts/sub-mv' ); ?>

  <!-- パンくず -->
  <div class="sub-contact">
    <div class="inner">
      <div class="sub-contact__breadcrumb sub-breadcrumb">
      <?php if(function_exists('bcn_display'))
    {
      bcn_display();
    }?>
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->

    <section class="sub-contact__body">
      <div class="inner">
      <p class="sub-contact__text text-main">お問い合わせありがとうございました。<br>2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。</p><!-- /.contact__text -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="sub-contact__top-link">トップへ戻る</a><!-- /.sub-contact__top-link -->
       </div>
      </section><!-- /.sub-contact__body -->
    </div>

    <?php get_template_part( 'template-parts/download-contact' ); ?>

<?php get_footer(); ?>