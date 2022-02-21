"use strict"


//header==============================
//ハンバーガーメニュー---------------
const jsHamburger = document.getElementById('js-hamburger');
const body = document.body;
const spHeaderMenu = document.getElementById('js-drawer-menu')
const drawerBackground = document.getElementById('js-header__overlay')
const drawerMenuItem = document.getElementById('js-drawer-menu__item')

//ハンバーガーメニュークリックアクション
jsHamburger.addEventListener('click', function() {
  body.classList.toggle('is-drawerActive')
  if (this.getAttribute('aria-expanded') == 'false') {
    this.setAttribute('aria-expanded', 'true');
    spHeaderMenu.setAttribute('area-hidden','false')
  } else {
    this.setAttribute('aria-expanded', 'false')
    spHeaderMenu.setAttribute('area-hidden','true')
  };
});
//ドラワーメニュー展開時背景クリックアクション
drawerBackground.addEventListener('click', () => {
  body.classList.remove('is-drawerActive')
  jsHamburger.setAttribute('aria-expanded', 'false')
  spHeaderMenu.setAttribute('area-hidden','true')
});
//ドラワーメニュー展開時リストクリックアクション
drawerMenuItem.addEventListener('click', () => {
  body.classList.remove('is-drawerActive')
  jsHamburger.setAttribute('aria-expanded', 'false')
  spHeaderMenu.setAttribute('area-hidden','true')
});


//swiper===========================
let slider1 = new Swiper ('.js-mv-slider', {
  //自動スライド
      autoplay: {
        delay: 2000,
      },
   //切り替えエフェクトの指定
    //slide  fade  cube coverflow  flip
    effect: "fade",
   
    //切り替わる速さ
    speed: 4000,
    
    //ループの有無
    loop: true,
  
    // If we need pagination
    pagination: {
     el: '.swiper-pagination',
      clickable : true,
     },
    
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
     },
});
//==============================


//GSAP=============================
    const tl = gsap.timeline({
      delay:1.2, 
    });

    //トップMV
    tl.from('.js-mv-en' , {
      x:'-200%',
      y:'-200%',
      opacity:0,
     
    },{
      x:0,
      y:0,
      opacity:1,
      duration: 1, 
      ease: "expo.out",

    }).fromTo(' .js-mv-jp ' , {
      y:'50%',
      opacity:0

    },{
      y:0,
      opacity:1,
      duration: 1, 
      ease: "expo.out",
    

    });

//トップアバウト
const tlTopAbout = gsap.timeline({
  scrollTrigger: {
  trigger: '.js-top-about ',
  start: 'top center',
  // markers: true
  }
});

tlTopAbout.fromTo('.js-about-title' , {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  
  
  },'title').fromTo('.js-top-about-img', {
    clipPath: 'polygon(0 0, 0 0, 0 0, 0 0)'
    
  },{
    clipPath: 'polygon(0 0, 0 100%, 100% 100%, 100% 0)',
    duration:0.5,
    ease: 'power2. out',
  }).fromTo('.js-top-about-text', {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  },'about').fromTo('.js-top-about-link', {
    x:'-100%',
    autoAlpha:0
  },{
    x:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out'
  },'title').from('.js-top-about', {
    background: 'linear-gradient(10deg, #ffffff 0%, #ffffff 100%, #EDF3F8 100%, #EDF3F8 0%, #ffffff 0%)',
    // background:'#ffffff',
    duration:0.5
  },'about'
 )

 //トップサービス
 const tlTopService = gsap.timeline({
  scrollTrigger: {
  trigger: '.js-top-service ',
  start: 'top center',
  // markers: true
  }
});

tlTopService.fromTo('.js-service-title' , {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  
  
  },'title').fromTo('.js-top-service-img', {
    scale:0.7,
    opacity:0
  },{
    scale:1,
    opacity:1,
    duration:0.5,
    ease: 'power2. out',
  }).fromTo('.js-top-service-text', {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  },'service').fromTo('.js-top-service-link', {
    x:'-100%',
    autoAlpha:0
  },{
    x:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out'
  },'title').from('.js-top-service', {
    background: 'linear-gradient(10deg, #ffffff 0%, #ffffff 100%, #EDF3F8 100%, #EDF3F8 0%, #ffffff 0%)',
    // background:'#ffffff',
    duration:0.5
  },'service'
 )


 //トップケーススタディー
 const tlTopCase = gsap.timeline({
  scrollTrigger: {
  trigger: '.js-top-case ',
  start: 'top center',
  // markers: true
  }
});

tlTopCase.fromTo('.js-case-title' , {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  
  
  },'title').fromTo('.js-top-case-img', {
    clipPath: 'polygon(0 0, 0 0, 0 0, 0 0)'
    
  },{
    clipPath: 'polygon(0 0, 0 100%, 100% 100%, 100% 0)',
    duration:0.5,
    ease: 'power2. out',
  }).fromTo('.js-top-case-text', {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  },'case').fromTo('.js-top-case-link', {
    x:'-100%',
    autoAlpha:0
  },{
    x:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out'
  },'title').from('.js-top-case', {
   
    duration:0.5
  },'case'
 )

 //トップニュース
 const tlTopNews = gsap.timeline({
  scrollTrigger: {
  trigger: '.js-top-news ',
  start: 'top center',
  // markers: true
  }
});

tlTopNews.fromTo('.js-news-title' , {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  
  
  },'title').fromTo('.js-top-news-text', {
    y:60,
    autoAlpha:0
  },{
    y:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out',
  },'news').fromTo('.js-top-news-link', {
    x:'-100%',
    autoAlpha:0
  },{
    x:0,
    autoAlpha:1,
    duration: 0.5,
    ease: 'power2. out'
  },'title').from('.js-top-news', {
    background: 'linear-gradient(10deg, #ffffff 0%, #ffffff 100%, #EDF3F8 100%, #EDF3F8 0%, #ffffff 0%)',
    // background:'#ffffff',
    duration:0.5
  },'news'
 )

 //ダウンロード・コンタクト
 const tlTopDownload = gsap.timeline({
  scrollTrigger: {
  trigger: '.js-top-download ',
  start: 'top center',
  // markers: true
  }
});

tlTopDownload.fromTo('.js-top-download' , {
  clipPath: 'polygon(0 0, 0 100%, 0 100%, 0 0)'
  },{
    clipPath: 'polygon(0 0, 0 100%, 100% 100%, 100% 0)'
  }
  )









//==============================