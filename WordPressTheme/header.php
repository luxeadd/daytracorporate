<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,500&family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet">
   <!-- swiper -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
<!-- ヘッダー -->

<?php
  $home = esc_url( home_url( "/" ));
  $about = esc_url( home_url( "/about/" ));
  $service = esc_url( home_url( "/service/" ));
  $case = esc_url( home_url( "/case/" ));
  $news = esc_url( home_url( "/news/" ));
  $download = esc_url( home_url( "/download/" ));
  $contact = esc_url( home_url( "/contact/" ));
?>

<header class="l-header header js-header">
    <div class="header__inner">
      <!-- ヘッダーロゴ -->
     <?php if ( is_front_page() ): ?>
        <h1 class="header__logo">
        <a href="<?php echo $home ?>">
          <img class="logo" src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/logo.svg" alt="Grobal Standard">
        </a>
      </h1><!-- /.header__logo -->
     <?php else : ?>
          <div class="header__logo">
        <a href="<?php echo $home ?>">
          <img class="logo" src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/logo.svg" alt="Grobal Standard">
        </a>
      </div><!-- /.header__logo -->
     <?php endif; ?>
      
      <!-- ドロワーアイコン  -->
      <button type="button" id="js-hamburger" class="header__drawer hamburger" aria-controls="js-drawer-menu" aria-expanded="false" area-label="メニューを開閉する">
        <span class="hamburger__line"></span>
      </button>
      <!-- ドロワーメニュー -->
      <div class=" header__drawer-menu  drawer-menu" id="js-drawer-menu" area-hidden="true">
        <ul class="drawer-menu__items">
          <li id="js-drawer-menu__item" class="drawer-menu__item  "><a href="<?php echo $home ?>">トップ</a></li>
          <li id="js-drawer-menu__item" class="drawer-menu__item"><a href="<?php echo $about ?>">当社について</a></li>
          <li id="js-drawer-menu__item" class="drawer-menu__item"><a href="<?php echo $service ?>">サービス</a></li>
          <li id="js-drawer-menu__item" class="drawer-menu__item"><a href="<?php echo $case ?>">導入事例</a></li>
          <li id="js-drawer-menu__item" class="drawer-menu__item"><a href="<?php echo $news ?>">お知らせ</a></li>
          <li id="js-drawer-menu__item" class="drawer-menu__download"><a href="<?php echo $download ?>">資料ダウンロード</a></li>
          <li id="js-drawer-menu__item" class="drawer-menu__contact"><a href="<?php echo $contact ?>">お問い合わせ</a></li>
        </ul>
      </div><!-- /.sheader-menu -->
      <!-- pcーメニュー -->
      <nav class="header__pc-menu header-menu ">
        <ul class="header-menu__items">
          <li class="header-menu__item"><a href="<?php echo $home ?>">トップ</a></li><!-- /.pc-menu__item -->
          <li class="header-menu__item"><a href="<?php echo $about ?>">当社について</a></li><!-- /.pc-menu__item -->
          <li class="header-menu__item"><a href="<?php echo $service ?>">サービス</a></li><!-- /.pc-menu__item -->
          <li class="header-menu__item"><a href="<?php echo $case ?>">導入事例</a></li><!-- /.pc-menu__item -->
          <li class="header-menu__item"><a href="<?php echo $news ?>">お知らせ</a></li><!-- /.pc-menu__item -->
          <li class="header-menu__download">
            <a href="<?php echo $download ?>" class="btn">無料ダウンロード</a><!-- /.btn -->
          </li><!-- /.header-menu__download -->
          <li class="header-menu__contact">
            <a href="<?php echo $contact ?>" class="btn btn--blue">お問い合わせ</a><!-- /.btn -->
          </li><!-- /.header-menu__download -->
        </ul><!-- /.pc-menu__items -->
      </nav><!-- /.header__menu -->
      <!-- ドロワーメニュー展開時背景 -->
      <div class="header__overlay" id="js-header__overlay"></div>
    </div><!-- /.header__inner -->
  </header>