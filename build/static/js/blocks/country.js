"use strict";

$(document).ready(function () {
  // функция для записи куки, передаем название, значение и дни
  function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  } // функция для получения куки


  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];

      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }

      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }

    return "";
  } // Scroll lock and unlock funcitons
  // left: 37, up: 38, right: 39, down: 40,
  // spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36


  var keys = {
    37: 1,
    38: 1,
    39: 1,
    40: 1
  };
  var body = document.querySelector('body');

  function preventDefault(e) {
    e = e || window.event;

    if (e.preventDefault) {
      e.preventDefault();
    } else {
      e.returnValue = false;
    }
  }

  function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
      preventDefault(e);
      return false;
    }
  }

  var disableScroll = function disableScroll() {
    console.log("disable scroll");

    if (window.innerWidth > 1024) {
      if (window.addEventListener) // older FF
        window.addEventListener("DOMMouseScroll", preventDefault, false);
      document.addEventListener("wheel", preventDefault, {
        passive: false
      }); // Disable scrolling in Chrome

      window.onwheel = preventDefault; // modern standard

      window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE

      window.ontouchmove = preventDefault; // mobile

      document.onkeydown = preventDefaultForScrollKeys;
    } else {
      body.classList.add("noscroll"); //   $('.site-wrapper').addClass("noscroll");
    }

    window.scrollDisabled = true;
  };

  window.disableScroll = disableScroll;

  var enableScroll = function enableScroll() {
    console.log("enable scroll");

    if (window.innerWidth > 1024) {
      if (window.removeEventListener) window.removeEventListener("DOMMouseScroll", preventDefault, false);
      document.removeEventListener("wheel", preventDefault, {
        passive: false
      }); // Enable scrolling in Chrome

      window.onmousewheel = document.onmousewheel = null;
      window.onwheel = null;
      window.ontouchmove = null;
      document.onkeydown = null;
    } else {
      body.classList.remove("noscroll"); // $('.site-wrapper').removeClass("noscroll");
    }

    window.scrollDisabled = false;
  };

  window.enableScroll = enableScroll;

  var checkCookie = function checkCookie() {
    console.log('проверяем куки');
    var country = getCookie('country');

    if (!country) {
      $('.country').fadeIn();
      disableScroll();
    } else if (country == 'blocked') {
      console.log('редиректим');
      var url = document.location + 'blocked';
      window.history.pushState(null, null, url);
      window.history.go();
    } else if (country == 'by') {
      $('.menu-nav').hide();
      $('.menu-nav--by').show();
      $('.country').fadeOut();
      enableScroll();
    } else {
      $('.country').fadeOut();
      enableScroll();
    }
  };

  checkCookie();
  $('.country__button').on('click', function (e) {
    setCookie('country', $(this).attr('data-country'), 365);
    console.log('ЗАПИСАЛИ СТРАНУ В КУКИ', $(this).attr('data-country'));
    checkCookie();
  });
});