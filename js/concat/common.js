/*-------------------------------------------*/
/* 変数
/*-------------------------------------------*/

const body = document.body
const width = window.innerWidth
const header = document.querySelector('header')

/*-------------------------------------------*/
/* Swiper MV
/*-------------------------------------------*/

document.addEventListener('DOMContentLoaded', function () {
  const isSP = window.matchMedia('(max-width: 576px)').matches

  if (isSP) {
    new Swiper('.mv_inner.swiper-container', {
      loop: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      speed: 4000, // アニメーション速度（大きくするほどゆっくり）
      autoplay: {
        delay: 0, // ←止まらず次へ
        disableOnInteraction: false,
      },
      spaceBetween: 20,
    })
  }
})

/*-------------------------------------------*/
/* Swiper スライダー
/*-------------------------------------------*/
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.h-service_slider', {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
})

/*-------------------------------------------*/
/* フェードアニメーション
/*-------------------------------------------*/
let myTarget = document.querySelectorAll('[class*="fade-"]')

fadeFn()

function fadeFn() {
  let observerFadeFn
  let fadeFnOptions = {
    root: null,
    rootMargin: '0px 0px',
    threshold: '0.1',
  }
  observerFadeFn = new IntersectionObserver(fadeIntersect, fadeFnOptions)

  for (let n = 0; n < myTarget.length; n++) {
    observerFadeFn.observe(myTarget[n])
  }
}

function fadeIntersect(entries, observerFadeFn) {
  entries.forEach((entry, n) => {
    const nowElement = entry.target

    if (entry.isIntersecting) {
      nowElement.classList.add('fade-action')
    }
  })
}

/*-------------------------------------------*/
/* スムーススクロール
/*-------------------------------------------*/
const headerHeight = header ? header.offsetHeight + -60 : 0

// ページ内のスムーススクロール
for (const link of document.querySelectorAll('a[href*="#"]')) {
  link.addEventListener('click', (e) => {
    const hash = e.currentTarget.hash
    const target = document.getElementById(hash.slice(1))

    if (!hash || hash === '#top') {
      e.preventDefault()
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      })
    } else if (target) {
      e.preventDefault()
      const position = target.getBoundingClientRect().top + window.scrollY - headerHeight
      window.scrollTo({
        top: position,
        behavior: 'smooth',
      })
      history.replaceState(null, '', window.location.pathname)
    }
  })
}

const urlHash = window.location.hash
if (urlHash) {
  const target = document.getElementById(urlHash.slice(1))
  if (target) {
    history.replaceState(null, '', window.location.pathname)
    window.scrollTo(0, 0)

    window.addEventListener('load', () => {
      const position = target.getBoundingClientRect().top + window.scrollY - headerHeight
      window.scrollTo({
        top: position,
        behavior: 'smooth',
      })
    })
  }
}

/*-------------------------------------------*/
/* 関数実行
/*-------------------------------------------*/
window.addEventListener('load', () => {})

/*-------------------------------------------*/
/* ハンバーガーメニュー
/*-------------------------------------------*/

// document.addEventListener('DOMContentLoaded', () => {
//   const menuBtn = document.querySelector('.l-header_menu-btn')
//   const closeBtn = document.querySelector('.l-global-nav_close')
//   const globalNav = document.querySelector('.l-global-nav')

//   menuBtn.addEventListener('click', () => {
//     globalNav.classList.add('is-active')
//     menuBtn.classList.add('is-active') // ← 追加：白くするクラス付与
//   })

//   closeBtn.addEventListener('click', () => {
//     globalNav.classList.remove('is-active')
//     menuBtn.classList.remove('is-active') // ← 追加：戻す
//   })
// })

/* ----------------------------------------
 ハンバーガーメニュー
---------------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
  const menuBtn = document.querySelector('.l-header_menu-btn')
  const globalNav = document.querySelector('.l-global-nav')

  if (!menuBtn || !globalNav) return

  menuBtn.addEventListener('click', () => {
    const isActive = menuBtn.classList.contains('is-active')

    menuBtn.classList.toggle('is-active')
    globalNav.classList.toggle('is-active')
  })
})

document.addEventListener('DOMContentLoaded', () => {
  const mvImages = document.querySelectorAll('.mv_inner.pc_only .mv_image')

  mvImages.forEach((img, index) => {
    setTimeout(() => {
      img.classList.add('is-visible')
    }, index * 300) // 0.3秒ずつずらす
  })
})
