var Menu = {};

(function () {
  Menu = {
    init: function () {
      AOS.init();
      $("#preloader").remove();
    },

  };
})();

$(document).ready(function () {
  Menu.init();
});
