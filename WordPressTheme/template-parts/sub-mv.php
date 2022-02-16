<!-- MV -->
<div class="sub-mv">
    <div class="sub-mv_block">
    
 <?php if ( is_home() || is_category(  )) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-news-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-news-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">news </span><br><span class="sub-mv__title--jp">お知らせ</span>
      </h1><!-- /.sub-mv__title -->
    <?php endif; ?>

    
    
 <?php if ( is_page('about') ) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">about us </span><br><span class="sub-mv__title--jp">当社について </span>
      </h1><!-- /.sub-mv__title -->
   <?php endif; ?>

 <?php if ( is_page('service') ) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-service-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-service-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">service </span><br><span class="sub-mv__title--jp">サービス </span>
      </h1><!-- /.sub-mv__title -->
   <?php endif; ?>

 

 <?php if ( is_page('download') || is_page('thanks2')  ) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-download-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-download-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">download </span><br><span class="sub-mv__title--jp">無料ダウンロード</span>
      </h1><!-- /.sub-mv__title -->
   <?php endif; ?>
 
 
 <?php if ( is_page('contact') ) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-contact-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-contact-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">contact </span><br><span class="sub-mv__title--jp"> お問い合わせ </span>
      </h1><!-- /.sub-mv__title -->
 <?php endif; ?>
 <?php if ( is_page('thanks1')  ) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-contact-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-contact-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">contact </span><br><span class="sub-mv__title--jp"> お問い合わせ </span>
      </h1><!-- /.sub-mv__title -->
 <?php endif; ?>



 <?php if ( is_single('') ) : ?>
  <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-news-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-news-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <div class="sub-mv__title">
        <span class="sub-mv__title--en">news </span><br><span class="sub-mv__title--jp"> お知らせ </span>
      </div><!-- /.sub-mv__title -->
 <?php endif; ?>
      
    </div><!-- /.sub-mv__block -->
  </div><!-- /.sub-mv -->