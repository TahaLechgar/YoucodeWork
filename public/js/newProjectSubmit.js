/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/newProjectSubmit.js ***!
  \******************************************/
console.log('taha');
var project = document.getElementById('new-project');
console.log(project);
project.addEventListener('submit', function (event) {
  // event.preventDefault()
  console.log('taha');
  var technologiesElements = project.querySelectorAll('#technologies .tag');
  var allTechnologies = [];
  technologiesElements.forEach(function (element) {
    allTechnologies.push(element.textContent);
  });
  console.log(allTechnologies);
  console.log(document.querySelector('#services').value);
});
/******/ })()
;