var Menu = {};

(function () {
  Menu = {
    init: function () {
      this.initCategories();
      this.drawDishes();
      AOS.init();
      $("#preloader").remove();
    },

    initCategories: function () {
      var categories = {
        data: [
          {
            id: 0,
            text: "Ensaladas",
          },
          {
            id: 1,
            text: "Sopas",
          },
          {
            id: 2,
            text: "Pasta",
          },
          {
            id: 3,
            text: "Pescado y Mariscos",
          },
          {
            id: 4,
            text: "Comida Vegetariana",
          },
          {
            id: 4,
            text: "Carnes a la Parrilla",
          },
        ],
        placeholder: "Select one or more categories"
      };

      $("#menuCategories").select2({
        data: categories.data,
        placeholder: categories.placeholder,
        allowClear: true
      });
    },

    drawDishes: function () {
      var dishesArr = [
        {
          image_url: "../assets/img/gallery/gallery-1.jpg",
          name: "Dish name",
          description: "Dish description",
          price: "price"
        },
        {
          image_url: "../assets/img/gallery/gallery-1.jpg",
          name: "Dish name",
          description: "Dish description",
          price: "price"
        },
        {
          image_url: "../assets/img/gallery/gallery-1.jpg",
          name: "Dish name",
          description: "Dish description",
          price: "price"
        },
        {
          image_url: "../assets/img/gallery/gallery-1.jpg",
          name: "Dish name",
          description: "Dish description",
          price: "price"
        },
        // ... Más restaurantes
      ];

      var dishesHtml = "";

      dishesArr.forEach(function (d) {
        var dishHtml = `
        <div class="col-lg-3 p-1">
            <div class="card box" data-aos="zoom-in">
              <div class="menu-img card-img-top">
                <img src="${d.image_url}" alt="">
              </div>
              <div class="card-body">
                <h5 class="card-title">${d.name}</h5>
                <p class="card-text">${d.description}</p>
              </div>
              <div class="card-body">
                <a href="#" class="card-link">$ ${d.price}</a>
              </div>
            </div>
          </div>
        `;
        dishesHtml += dishHtml;
      });

      $(".menu-items").append(dishesHtml);
    }
  };
})();

$(document).ready(function () {
  Menu.init();
});
