var Reservations = {};

(function () {
  Reservations = {
    tab: null,

    init: function () {
      this.tab = new URLSearchParams(window.location.search).get("tab");
      if (Reservations.tab) $("#" + Reservations.tab + "Tab").tab("show");
      
      this.setTab();
      this.initSelect2();
      this.initDatePicker();
      $("#preloader").remove();
    },

    setTab: function () {
      $(".tabPane").addClass("d-none");
      $(".tabPane.active").removeClass("d-none");
    },

    initSelect2: function () {
      var location = {
        data: [
          {
            id: 0,
            text: "Location 1",
          },
          {
            id: 1,
            text: "Location 2",
          },
          {
            id: 2,
            text: "Location 3",
          },
          {
            id: 3,
            text: "Location 4",
          },
        ],
        placeholder: "Select a Restaurant"
      };

      $("#location").select2({
        data: location.data,
        placeholder: location.placeholder,
        allowClear: true
      });

      var persons = {
        data: [
          {
            id: 0,
            text: "1",
          },
          {
            id: 1,
            text: "2",
          },
          {
            id: 2,
            text: "3",
          },
          {
            id: 3,
            text: "4",
          },
        ],
        placeholder: "Select a quantity"
      };

      $("#persons").select2({
        data: persons.data,
        placeholder: persons.placeholder,
        allowClear: true
      });

      var time = {
        data: [
          {
            id: 0,
            text: "12AM",
          },
          {
            id: 1,
            text: "2PM",
          },
          {
            id: 2,
            text: "4PM",
          },
          {
            id: 3,
            text: "6PM",
          },
          {
            id: 4,
            text: "8PM",
          },
          {
            id: 5,
            text: "10PM",
          },        
        ],
        placeholder: "Select a time"
      };

      $("#time").select2({
        data: time.data,
        placeholder: time.placeholder,
        allowClear: true
      });
    },

    initDatePicker: function () {
      flatpickr("#date");
    },
  };
})();

$(document).ready(function () {
  Reservations.init();

  $('button[data-bs-toggle="tab"]').on("shown.bs.tab", function () {
    Reservations.setTab();
  });
});
