<?php get_header(); ?>

<!-- MV -->
<div class="sub-mv">
    <div class="sub-mv_block">
      <div class="sub-mv__img">
        <picture>
          <source srcset=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-mv.jpg " media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
          <img src=" <?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-mv-sp.jpg  " alt="当社について画像 " /><!-- それ以外で表示 -->
        </picture>
      </div><!-- /.sub-mv__img -->
      <h1 class="sub-mv__title">
        <span class="sub-mv__title--en">about us </span><br><span class="sub-mv__title--jp">当社について </span>
      </h1><!-- /.sub-mv__title -->
    </div><!-- /.sub-mv__block -->
  </div><!-- /.sub-mv -->
  <!-- パンくず -->
  <div class="sub-about">
    <div class="inner">
      <div class="sub-about__breadcrumb sub-breadcrumb">
        <nav class="breadcrumb">
          <ol class="breadcrumb__list">
            <li class="breadcrumb__item">
              <a href=" index.html "> ホーム </a>
            </li>
            <li class="breadcrumb__item">
              <a href="  "> 当社について </a>
            </li>
          </ol>
        </nav><!-- /.breadcrumb -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__breadcrumb -->
    <!-- mission.vision -->
    <div class="sub-about__top">
      <div class="inner">
        <section class="sub-about-top">
          <div class="sub-about-top__header">
            <div class="sub-about-top__title">
              <div class="section-title section-title--white">
                <h2 class="section-title__en section-title__en--white">mission</h2><!-- /.section-title__title -->
                <p class="section-title__jp section-title__jp--white">社会的使命</p><!-- /.section-title__title -->
              </div><!-- /.section-title -->
            </div><!-- /.sub-about-top__title -->
            <div class="sub-about-top__img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about1.jpg" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about1-sp.jpg " alt="mission画像" /><!-- それ以外で表示 -->
            </div><!-- /.sub-about-top__img -->
            </picture>
          </div><!-- /.sub-about-top__header -->
          <div class="sub-about-top__text-box">
            <h3 class="suv-about-top__sub-title">人財育成を通じて、<br class="u-sp">豊かな世界を創造する</h3><!-- /.suv-about-top__sub-title -->
            <p class="suv-about-top__sub-text text-main">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</p><!-- /.suv-about-top__sub-title -->
          </div><!-- /.sub-about-top__text-box -->
        </section><!-- /.sub-about-top -->
        <section class="sub-about-top">
          <div class="sub-about-top__header">
            <div class="sub-about-top__title">
              <div class="section-title section-title--white">
                <h2 class="section-title__en section-title__en--white">vision</h2><!-- /.section-title__title -->
                <p class="section-title__jp section-title__jp--white">企業理念</p><!-- /.section-title__title -->
              </div><!-- /.section-title -->
            </div><!-- /.sub-about-top__title -->
            <div class="sub-about-top__img">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about2.jpg" media="(min-width: 768px)" /><!-- 幅768px以上なら表示 -->
                <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about2-sp.jpg " alt="mission画像" /><!-- それ以外で表示 -->
            </div><!-- /.sub-about-top__img -->
            </picture>
          </div><!-- /.sub-about-top__header -->
          <div class="sub-about-top__text-box">
            <h3 class="suv-about-top__sub-title">文化の垣根を越えた<br class="u-pc">人と人との <br class="u-sp">つながりが新しい価値を生む</h3><!-- /.suv-about-top__sub-title -->
            <p class="suv-about-top__sub-text text-main">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</p><!-- /.suv-about-top__sub-title -->
          </div><!-- /.sub-about-top__text-box -->
        </section><!-- /.sub-about-top -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__top -->
    <!-- 会社概要 -->
    <div class="sub-about__explain">
      <dl class="explain">
        <h2 class="explain__title sub-news-title">会社概要</h2><!-- /.explain__title -->
        <div class="explain__blocks">
          <div class="explain__block">
            <dt class="explain__header">代表</dt>
            <dd class="explain__description">波瑠 慶太</dd>
          </div>
          <div class="explain__block">
            <dt class="explain__header">事業内容</dt>
            <dd class="explain__description"> ・ビジネス英会話教育事業<br> ・異文化交流サポート事業<br> ・ビジネス留学事業 </dd>
          </div>
          <div class="explain__block">
            <dt class="explain__header">設立</dt>
            <dd class="explain__description">2012年10月03日</dd>
          </div>
          <div class="explain__block">
            <dt class="explain__header">所在地</dt>
            <dd class="explain__description">〒550-1000<br> 大阪市西区土佐堀9-5-5</dd>
          </div>
          <div class="explain__block">
            <dt class="explain__header">TEL</dt>
            <dd class="explain__description">06-123-4567（代表）</dd>
          </div>
          <div class="explain__block">
            <dt class="explain__header">FAX</dt>
            <dd class="explain__description">06-123-4568（代表）</dd>
          </div>
          <div class="explain__block">
            <dt class="explain__header">E-mail</dt>
            <dd class="explain__description">globalstandard@example.com</dd>
          </div>
        </div><!-- /.explain__blocks -->
      </dl>
    </div><!-- /.sub-about__explain -->
    <!-- 役員紹介 -->
    <div class="sub-about__staff">
      <div class="inner sub-about__staff-inner">
        <div class="staff-intro">
          <h2 class="staff-intro__title">役員紹介</h2><!-- /.staff-intro__title -->
          <div class="staff-intro__items">
            <article class="staff-intro__item">
              <div class="staff-intro__header">
                <figure class="staff-intro__figure">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-staff1.jpg " alt="波瑠 慶太の写真 ">
                </figure>
              </div><!-- /.staff-intro__header -->
              <div class="staff-intro__block">
                <div class="staff-intro__body">
                  <p class="staff-intro__position">代表取締役社長 </h3>
                  <p class="staff-intro__name"> 波瑠 慶太</p>
                  <p class="staff-intro__text text-main">20年間外資系企業に勤務し、世界17カ国でビジネスを展開。<br> 様々な文化に触れ、コミュニケーションスキルを磨き、同時にその必要性を実感する。<br>自身も講師を務め、実体験から得られた知見を皆様に還元し、グローバルなビジネス展開をサポートいたします。 </p><!-- /.staff-intro__text text-main -->
                </div><!-- /.staff-intro__body -->
                <div class="staff-intro__footer">
                  <div class="staff-intro__sns">
                    <a href=" ">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/twitter.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                  <div class="staff-intro__sns">
                    <a href=" ">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/facebook.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                  <div class="staff-intro__sns">
                    <a href=" ジャック・スミス">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/instagram.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                </div><!-- /.staff-intro__footer -->
              </div><!-- /.staff-intro__block -->
            </article>
            <article class="staff-intro__item">
              <div class="staff-intro__header">
                <figure class="staff-intro__figure">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-staff2.jpg " alt="ジャック・スミスの写真 ">
                </figure>
              </div><!-- /.staff-intro__header -->
              <div class="staff-intro__block">
                <div class="staff-intro__body">
                  <p class="staff-intro__position">取締役 </h3>
                  <p class="staff-intro__name"> ジャック・スミス</p>
                  <p class="staff-intro__text text-main">オーストラリア出身。<br>英会話の講師として13年のキャリアがあります。<br>翻訳業務も担当しており、外国映画の日本版DVDの字幕やテレビ番組の英語をヒヤリングなども行なっております。<br>皆様に「より気持ちの伝わる英会話」を習得していただくサポートをいたします。 </p><!-- /.staff-intro__text text-main -->
                </div><!-- /.staff-intro__body -->
                <div class="staff-intro__footer">
                  <div class="staff-intro__sns">
                    <a href=" ">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/twitter.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                  <div class="staff-intro__sns">
                    <a href=" ">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/facebook.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                  <div class="staff-intro__sns">
                    <a href=" ジャック・スミス">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/instagram.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                </div><!-- /.staff-intro__footer -->
              </div><!-- /.staff-intro__block -->
            </article>
            <article class="staff-intro__item">
              <div class="staff-intro__header">
                <figure class="staff-intro__figure">
                  <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/sub-about-staff3.jpg " alt="メアリー・ジャクソンの写真 ">
                </figure>
              </div><!-- /.staff-intro__header -->
              <div class="staff-intro__block">
                <div class="staff-intro__body">
                  <p class="staff-intro__position">取締役 </h3>
                  <p class="staff-intro__name"> メアリー・ジャクソン</p>
                  <p class="staff-intro__text text-main">アメリカ出身。<br>メジャーリーグ球団「ニューヨークヤンキース」の通訳担当として7年間チームに在籍。<br> 数多くの契約交渉の経験を活かし、国際ビジネスにおけるコミュニケーションのマナーから応用までお伝えいたします。 </p><!-- /.staff-intro__text text-main -->
                </div><!-- /.staff-intro__body -->
                <div class="staff-intro__footer">
                  <div class="staff-intro__sns">
                    <a href=" ">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/twitter.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                  <div class="staff-intro__sns">
                    <a href=" ">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/facebook.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                  <div class="staff-intro__sns">
                    <a href=" ジャック・スミス">
                      <img src="<?php echo get_template_directory_uri(  ) ?>/./assets/images/common/instagram.svg" alt="twitter">
                    </a>
                  </div><!-- /.staff-intro__twitter -->
                </div><!-- /.staff-intro__footer -->
              </div><!-- /.staff-intro__block -->
            </article>
          </div><!-- /.staff-intro__items -->
        </div><!-- /.staff-intro -->
      </div><!-- /.inner -->
    </div><!-- /.sub-about__staff -->
  </div><!-- /.sub-about -->


  <?php get_footer(); ?>