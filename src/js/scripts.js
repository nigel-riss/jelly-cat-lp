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

})();
