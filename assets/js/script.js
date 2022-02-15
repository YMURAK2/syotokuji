"use strict";

//ローディング後のアニメーション
{
  window.onload = function () {
    //ローディング画面を削除
    const spinner = document.querySelector(".loading");
    if (spinner) {
      spinner.classList.add("loaded");
    }
    //ヘッダーのアニメーション
    const header = document.querySelector(".header");
    const main = document.querySelector("main");
    main.classList.add("header-fadein");
    header.classList.add("header-fadein");
  };
}

// メニューボタンクリック時の操作
{
  const header = document.querySelector(".header");
  const menuBtn = document.querySelector(".header__menu-btn");
  const menuLine = document.querySelector(".header__menu-line");
  const menuText = document.querySelector(".header__menu-text");
  const gnav = document.querySelector(".gnav");
  const sns = document.querySelector(".sns");
  const contactBtn = document.querySelector(".contact-btn");

  menuBtn.addEventListener("click", () => {
    header.classList.toggle("active");
    menuLine.classList.toggle("active");
    menuText.classList.toggle("active");
    gnav.classList.toggle("active");
    sns.classList.toggle("active");
    contactBtn.classList.toggle("active");
  });
}

// // ヘッダーのスクロール後の変化
// const header = document.querySelector(".header");
// window.addEventListener("scroll", () => {
//   if (window.scrollY > 0) {
//     header.classList.add("active");
//   } else if (window.scrollY === 0) {
//     header.classList.remove("active");
//   }
// });

// // heroの高さを画面100％に固定
// if (document.querySelector(".hero")) {
//   const hero = document.querySelector(".hero");
//   const height = document.documentElement.clientHeight;
//   hero.style.height = height + "px";

//   window.addEventListener("resize", () => {
//     const height = document.documentElement.clientHeight;
//     hero.style.height = height + "px";
//   });
// }

// ボタンを押すとページトップに戻る
const topagetop = document.querySelector(".page-top-btn");
topagetop.addEventListener("click", () => {
  window.scroll({ top: 0, behavior: "smooth" });
});

window.addEventListener("scroll", () => {
  if (window.pageYOffset > 400) {
    topagetop.style.opacity = "1";
    topagetop.style.visibility = "visible";
  } else if (window.pageYOffset < 400) {
    topagetop.style.opacity = "0";
    topagetop.style.visibility = "hidden";
  }
});

//swipper
{
  window.addEventListener("load", () => {
    let hSwiper = new Swiper(".swiper__hero", {
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
      },
      effect: "fade",

      loop: true,
      speed: 2000,
      autoHeight: true,
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: true,
      },
    });
  });

  let gSwiper = new Swiper(".swiper__gallery", {
    slidesPerView: 1,
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 10,
      },
    },
    autoplay: {
      delay: 3000,
    },
    loop: true,
    speed: 2000,
    autoHeight: true,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
  });
}

//フェードイン
{
  class ScrollObserver {
    constructor(targets, func, options) {
      this.targets = document.querySelectorAll(targets);
      const defaultOptions = {
        root: null,
        threshold: 0.2,
        margin: "0px",
        once: true, //オリジナル（アニメーションを繰り返すかどうか）
      };
      this.func = func;
      this.options = Object.assign(defaultOptions, options);
      this.once = this.options.once;
      this.init();
    }

    init() {
      const callback = (entries, obs) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) {
            this.func(entry.target, false);
            return;
          }
          this.func(entry.target, true);
          if (this.once) {
            obs.unobserve(entry.target);
          }
        });
      };
      const observer = new IntersectionObserver(
        callback.bind(this),
        this.options
      );
      this.targets.forEach((target) => {
        observer.observe(target);
      });
    }
  }

  const fadein = (target, isIntersecting) => {
    if (isIntersecting) {
      target.classList.add("appear");
    } else {
      target.classList.remove("appear");
    }
  };

  const drowBorder = (target, isIntersecting) => {
    if (isIntersecting) {
      target.classList.add("appear");
    } else {
      target.classList.remove("appear");
    }
  };

  const fadeInImg = new ScrollObserver(".fadein-normal", fadein);
  const fadeInTextR = new ScrollObserver(".fadein-textR", fadein, {
    threshold: 0,
    margin: "-200px -200px",
  });
  const fadeInTextT = new ScrollObserver(".fadein-textT", fadein, {
    threshold: 0,
    margin: "-200px -200px",
  });
  const border = new ScrollObserver(".border", drowBorder, {
    threshold: 0.8,
    margin: "0",
    once: false,
  });
}

// tableレスポンシブ
{
  const changeTable = () => {
    if (window.matchMedia("(max-width: 768px)").matches) {
      const table = document.querySelector(".history");
      const tableData = document.querySelectorAll(".history__data");
      const tableHead = document.querySelectorAll(".history__head");

      if (document.querySelectorAll(".history__row").length !== 0) {
        return;
      }

      tableHead.forEach((e) => e.remove());

      for (let i = 0; i < tableData.length / 3; i++) {
        const data = document.querySelectorAll(".history__data");
        const row = document.createElement("div");
        row.classList.add("history__row");
        const cells = [];
        const cloneHead = [];

        tableHead.forEach((e) => cloneHead.push(e.cloneNode(true)));

        for (let j = 0; j < tableHead.length; j++) {
          cells.push(cloneHead[j]);
          row.appendChild(cells[j]);
        }

        for (let j = 0; j < tableHead.length * 2; j++) {
          cells.push(data[j]);
          row.appendChild(cells[j]);
        }

        table.appendChild(row);
      }
    } else if (window.matchMedia("(min-width:768px)").matches) {
      const table = document.querySelector(".history");
      const tableData = document.querySelectorAll(".history__data");
      const tableHead = document.querySelectorAll(".history__head");
      const row = document.querySelectorAll(".history__row");

      for (let i = 0; i < 3; i++) {
        table.appendChild(tableHead[i]);
      }

      tableData.forEach((e) => table.appendChild(e));
      row.forEach((e) => e.remove());
    }
  };

  if (document.querySelector(".history")) {
    window.addEventListener("load", changeTable);
    window.addEventListener("resize", changeTable);
  }
}
