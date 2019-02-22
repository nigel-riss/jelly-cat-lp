'use strict';

(function () {
  // Policy popup window
  var policyPopup = document.querySelector('.policy-popup');
  var policyPopupClose = document.querySelector('.policy-popup__close');
  var policyLink = document.querySelector('.footer__policy');

  policyLink.addEventListener('click', function (evt) {
    evt.preventDefault();
    policyPopup.classList.remove('policy-popup--hidden');
  });

  policyPopupClose.addEventListener('click', function (evt) {
    evt.preventDefault();
    policyPopup.classList.add('policy-popup--hidden');
  });


  // Contact popup window
  var contactPopup = document.querySelector('.contact-popup');
  var contactPopupClose = document.querySelector('.contact-popup__close');
  var contactPopupCover = document.querySelector('.contact-popup__cover');

  document.addEventListener('click', function (evt) {
    if (evt.target.classList.contains('contact-button')) {
      evt.preventDefault();
      contactPopup.classList.remove('contact-popup--hidden');
    }
  });

  contactPopupClose.addEventListener('click', function (evt) {
    evt.preventDefault();
    contactPopup.classList.add('contact-popup--hidden');
  });

  contactPopupCover.addEventListener('click', function (evt) {
    evt.preventDefault();
    contactPopup.classList.add('contact-popup--hidden');
  });

})();
