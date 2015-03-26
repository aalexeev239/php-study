// Андрей Алексеев [AA]
// alexeev.andrey.a@gmail.com

$(document).ready(function() {
  // smoothscroll.init();

  document.querySelector('.bg-image') && bgImage.init();

  document.getElementById('slider') && mainSlider.init();

  document.getElementById('city-select') && citySelect.init();

  document.querySelector('.dropdown') && dropdowns.init();

  document.querySelector('.popup') && popup.init();

  document.querySelector('.gallery') && gallery.init();

  document.getElementById('js-map') && showMap.init();

  document.querySelector('.js-action-toggle') && actions.init();

  document.getElementById('js-affix') && affix.init();

  document.querySelector('.js-tabs') && tabs.init();

  document.querySelector('.js-partn') && partn.init();

  document.querySelector('.js-cert') && $('.js-cert').fancybox();

  document.getElementById('js-filter') && serviceFilter.init();

  document.getElementById('js-fixed-nav') && fixedNav.init();

  var phone = $('.fixed-nav__phone'),
      fnav = $('.fixed-nav');

  phone.mouseenter(function(event) {
    fnav.addClass('phone-shown');
  });

  phone.mouseleave(function(event) {
    fnav.removeClass('phone-shown');
  });
});
// END doc.ready