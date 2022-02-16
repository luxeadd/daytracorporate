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

gsap.to('. js-mv-body', {
  x: 100,
});



//==============================