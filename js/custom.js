(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/custom"],{

/***/ "./resources/js/custom.js":
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
/***/ (() => {

var navbar = document.querySelector('.header .navbar');

document.querySelector('#menu-btn').onclick = function () {
  navbar.classList.add('active');
};

document.querySelector('#close-navbar').onclick = function () {
  navbar.classList.remove('active');
};

var registerBtn = document.querySelector('.account-form .register-btn');
var loginBtn = document.querySelector('.account-form .login-btn');

registerBtn.onclick = function () {
  registerBtn.classList.add('active');
  loginBtn.classList.remove('active');
  document.querySelector('.account-form .login-form').classList.remove('active');
  document.querySelector('.account-form .register-form').classList.add('active');
};

loginBtn.onclick = function () {
  registerBtn.classList.remove('active');
  loginBtn.classList.add('active');
  document.querySelector('.account-form .login-form').classList.add('active');
  document.querySelector('.account-form .register-form').classList.remove('active');
};

var accountForm = document.querySelector('.account-form');

document.querySelector('#account-btn').onclick = function () {
  accountForm.classList.add('active');
};

document.querySelector('#close-form').onclick = function () {
  accountForm.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  loop: true,
  grabCursor: true
});
var swiper = new Swiper(".home-courses-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    },
    991: {
      slidesPerView: 3
    }
  }
});
var swiper = new Swiper(".teachers-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    },
    991: {
      slidesPerView: 3
    }
  }
});
var swiper = new Swiper(".reviews-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    768: {
      slidesPerView: 2
    },
    991: {
      slidesPerView: 3
    }
  }
});
var swiper = new Swiper(".logo-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  breakpoints: {
    0: {
      slidesPerView: 1
    },
    450: {
      slidesPerView: 2
    },
    768: {
      slidesPerView: 3
    },
    991: {
      slidesPerView: 4
    },
    1200: {
      slidesPerView: 5
    }
  }
});
var accordion = document.querySelectorAll('.faq .accordion-container .accordion');
accordion.forEach(function (acco) {
  acco.onclick = function () {
    accordion.forEach(function (dion) {
      return dion.classList.remove('active');
    });
    acco.classList.toggle('active');
  };
});

document.querySelector('.load-more .btn').onclick = function () {
  document.querySelectorAll('.courses .box-container .hide').forEach(function (show) {
    show.style.display = 'block';
  });
  document.querySelector('.load-more .btn').style.display = 'none';
};

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ var __webpack_exports__ = (__webpack_exec__("./resources/js/custom.js"));
/******/ }
]);