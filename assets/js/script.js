"use strict";

// メニューボタンクリック時の操作
const header = document.querySelector(".header");
const menuBtn = document.querySelector(".header__menu-btn");
const menuLine = document.querySelector(".header__menu-line");
const menuText = document.querySelector(".header__menu-text");
const gnav = document.querySelector(".gnav");
const sns = document.querySelector(".sns__list");
const contactBtn = document.querySelector(".contact-btn");

console.log(menuText);
menuBtn.addEventListener("click", () => {
  header.classList.toggle("active");
  menuLine.classList.toggle("active");
  menuText.classList.toggle("active");
  gnav.classList.toggle("active");
  sns.classList.toggle("active");
  contactBtn.classList.toggle("active");
});

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

// // ボタンを押すとページトップに戻る
// const topagetop = document.querySelector(".to-page-top");
// topagetop.addEventListener("click", () => {
//   window.scroll({ top: 0, behavior: "smooth" });
// });

// window.addEventListener("scroll", () => {
//   if (window.pageYOffset > 400) {
//     topagetop.style.opacity = "1";
//     topagetop.style.visibility = "visible";
//   } else if (window.pageYOffset < 400) {
//     topagetop.style.opacity = "0";
//     topagetop.style.visibility = "hidden";
//   }
// });

// //swipper
// let mySwiper = new Swiper(".swiper", {
//   autoplay: {
//     delay: 2000,
//   },
//   loop: true,
//   pagination: {
//     el: ".swiper-pagination",
//     type: "bullets",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
// });
