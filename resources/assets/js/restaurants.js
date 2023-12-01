var Restaurants = {};

(function () {
  Restaurants = {
    init: function () {
      AOS.init();
      $("#preloader").remove();
    },
  };
})();

$(document).ready(function () {
  Restaurants.init();
});
