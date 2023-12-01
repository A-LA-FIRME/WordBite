var Menu = {};

(function () {
  Menu = {
    init: function () {
      this.initCategories();
      AOS.init();
      $("#preloader").remove();
    },

    initCategories: function () {
      var categories = {
        data: [
          {
            id: 0,
            text: "Salads",
          },
          {
            id: 1,
            text: "Soups",
          },
          {
            id: 2,
            text: "Pasta",
          },
          {
            id: 3,
            text: "Seafood",
          },
          {
            id: 4,
            text: "Vegan-friendly",
          },
          {
            id: 5,
            text: "Burgers",
          },
          {
            id: 6,
            text: "Pizza",
          },
          {
            id: 7,
            text: "Desserts",
          },
          {
            id: 8,
            text: "Mexican",
          },
          {
            id: 9,
            text: "Sushi",
          },
          {
            id: 10,
            text: "Asian",
          },
          {
            id: 11,
            text: "Italian",
          },
          {
            id: 12,
            text: "Mediterranean",
          },
          {
            id: 13,
            text: "BBQ",
          },
          {
            id: 14,
            text: "Vegetarian",
          },
          {
            id: 15,
            text: "Gluten-free",
          },
          {
            id: 16,
            text: "Steakhouse",
          },
          {
            id: 17,
            text: "Indian",
          },
          {
            id: 18,
            text: "Chinese",
          }
        ],
        placeholder: "Select one or more categories"
      };

      $("#menuCategories").select2({
        data: categories.data,
        placeholder: categories.placeholder,
        allowClear: true
      });
    },

  };
})();

$(document).ready(function () {
  Menu.init();
});
