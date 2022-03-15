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

  //下層ページMV
gsap.from('.js-sub-mv-decoration ' , {
  width:'100%',
  duration:0.8
})
gsap.fromTo('.js-sub-mv-title' , {
  y:60,
  autoAlpha:0
}, {
  y:0,
  autoAlpha:1,
  duration: 0.5,
  delay:0.3,
  ease: 'power2. out',
})

//==============================

//ページ遷移時にヘッダー分の高さを調整する
document.addEventListener("DOMContentLoaded", () => {
  if (location.hash) {
    const headerHeight = document.querySelector(".js-header").clientHeight;
    setTimeout(() => {
      window.scrollBy(0, - headerHeight);
    },100)
  }
})