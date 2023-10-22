var Reservations = {};

(function () {
  Reservations = {
    tab: null,

    init: function () {
      this.tab = new URLSearchParams(window.location.search).get("tab");
      if (Reservations.tab) $("#" + Reservations.tab + "Tab").tab("show");
      
      this.setTab();
      $("#preloader").remove();
    },

    setTab: function () {
      $(".tabPane").addClass("d-none");
      $(".tabPane.active").removeClass("d-none");
    },
  };
})();

$(document).ready(function () {
  Reservations.init();

  $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function () {
    Reservations.setTab();
  });
});
