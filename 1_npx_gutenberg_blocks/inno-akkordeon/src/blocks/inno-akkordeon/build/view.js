/******/ (function() { // webpackBootstrap
/*!*********************!*\
  !*** ./src/view.js ***!
  \*********************/
document.addEventListener('DOMContentLoaded', function () {
  var accordions = document.querySelectorAll('.wp-block-tsc-inno-akkordeon');
  accordions.forEach(function (accordion) {
    var button = accordion.querySelector('button.inno-accordion-button');
    var content = accordion.querySelector('.inno-accordion-content');
    if (!button || !content) return;

    // Initiale Sichtbarkeit sicherstellen (kann im CSS animiert werden)
    content.hidden = true;
    button.setAttribute('aria-expanded', 'false');
    button.addEventListener('click', function () {
      var isExpanded = button.getAttribute('aria-expanded') === 'true';

      // aria-expanded aktualisieren
      button.setAttribute('aria-expanded', String(!isExpanded));

      // Sichtbarkeit ändern
      content.hidden = isExpanded;

      // Klasse am äußeren Block toggeln (für CSS z. B. Animation)
      accordion.classList.toggle('is-open', !isExpanded);
      accordion.classList.toggle('is-closed', isExpanded);
    });
  });
});
/******/ })()
;
//# sourceMappingURL=view.js.map