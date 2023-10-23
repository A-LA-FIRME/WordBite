var Menu = {};
const menu_url = "../assets/img/menu/";

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

    drawDishes: function () {
      var dishesArr = [
        {
          image_url: `${menu_url}media-lasagne.jpg`,
          name: "Lasagna alla Rustica",
          description: "Tender pasta layers with rich beef and pork ragù, creamy béchamel, and cheeses",
          price: "9.00"
        },
        {
          image_url: `${menu_url}media-pizza.jpg`,
          name: "Pizza Margherita",
          description: "Features a crisp crust topped with tomato sauce, fresh mozzarella, basil, and olive oil",
          price: "12.00"
        },
        {
          image_url: `${menu_url}media-spaghetti.jpg`,
          name: "Spaghetti Pomodoro",
          description: "Thin pasta tossed in a savory tomato sauce with garlic, basil, and olive oil, and parmiggiano",
          price: "8.00"
        },
        {
          image_url: `${menu_url}media-raviolli.jpg`,
          name: "Ravioli di Ricotta",
          description: "Tender pasta pockets filled with spincah and ricotta, served in a rich, tomato-based sauce",
          price: "10.00"
        },
        {
          image_url: `${menu_url}media-shawarma.jpg`,
          name: "Chicken Shawarma",
          description: "A savory blend of marinated chicken and sauces wrapped in warm pita bread.",
          price: "7.50",
        },
        {
          image_url: `${menu_url}media-kebab.jpg`,
          name: "Adana Kebab",
          description: "Grilled skewers of spiced minced meat, a Mediterranean delight.",
          price: "8.00",
        },
        {
          image_url: `${menu_url}media-labne.jpg`,
          name: "Labne and Pita",
          description: "Creamy yogurt dip topped with herbs and served with fresh pita bread.",
          price: "5.00",
        },
        {
          image_url: `${menu_url}media-baklava.jpg`,
          name: "Pistachio Baklava",
          description: "Sweet and flaky pastry filled with honey and pistachio goodness.",
          price: "5.50",
        },
        {
          image_url: `${menu_url}media-guac.jpg`,
          name: "Totopos con Guacamole",
          description: "Crispy corn chips served with a generous portion of signature guacamole.",
          price: "6.00",
        },
        {
          image_url: `${menu_url}media-nachos.jpg`,
          name: "Nachos Supremo Fiesta",
          description: "A festive platter of loaded nachos with beef, perfect for sharing.",
          price: "7.50",
        },
        {
          image_url: `${menu_url}media-taquitos.jpg`,
          name: "Taquitos de Pollo y Queso",
          description: "Rolled tortillas filled with chicken and cheese, fried to perfection.",
          price: "8.00",
        },
        {
          image_url: `${menu_url}media-quesadilla.jpg`,
          name: "Quesadilla de Pollo Casera",
          description: "Homemade chicken quesadilla with a melty cheese filling and herbs",
          price: "7.50",
        },
        {
          image_url: `${menu_url}media-friedrice.jpg`,
          name: "Egg Fried Rice",
          description: "Classic fried rice with a tasty mix of vegetables, soy sauce and scrambled eggs",
          price: "7.00",
        },
        {
          image_url: `${menu_url}media-pekingduck.jpg`,
          name: "Peking Duck",
          description: "A traditional Chinese dish featuring tender roasted duck with crispy skin",
          price: "18.00",
        },
        {
          image_url: `${menu_url}media-kungpaochicken.jpg`,
          name: "Kung Pao Chicken",
          description: "A spicy and savory Sichuan chicken dish with peanuts and vegetables",
          price: "12.50",
        },
        {
          image_url: `${menu_url}media-tofu.jpg`,
          name: "Sesame Tofu",
          description: "Tofu cubes coated in a flavorful black sesame sauce, a vegan favorite",
          price: "7.00",
        },
        {
          image_url: `${menu_url}media-ramen.jpg`,
          name: "Shoyu Ramen",
          description: "Japanese noodle soup with soy sauce-based broth and a variety of toppings.",
          price: "11.00",
        },
        {
          image_url: `${menu_url}media-nigiri.jpg`,
          name: "Nigiri Platter",
          description: "Assorted fresh and expertly crafted sushi bites, a perfect introduction to sushi.",
          price: "10.00",
        },
        {
          image_url: `${menu_url}media-gyoza.jpg`,
          name: "Pork Gyoza",
          description: "Pan-fried dumplings filled with seasoned ground pork and aromatic spices.",
          price: "8.00",
        },
        {
          image_url: `${menu_url}media-gyudon.jpg`,
          name: "Gyudon Beef Bowl",
          description: "A Japanese dish featuring thinly sliced beef and onions , served over rice.",
          price: "7.00",
        },
        {
          image_url: `${menu_url}media-smashburger.jpg`,
          name: "Smash Burger",
          description: "A mouthwatering burger with a perfectly seared, smashed patty.",
          price: "7.50",
        },
        {
          image_url: `${menu_url}media-fries.jpg`,
          name: "Loaded Fries",
          description: "Crispy fries piled high with bacon and a variety of other tasty toppings.",
          price: "6.50",
        },
        {
          image_url: `${menu_url}media-chickenburger.jpg`,
          name: "Chicken Sandwich",
          description: "A flavorful chicken sandwich with cheese and a delicious combination of ingredients.",
          price: "6.50",
        },
        {
          image_url: `${menu_url}media-wings.jpg`,
          name: "Buffalo Wings",
          description: "Spicy and tangy chicken wings with a side of celery, perfect for heat lovers.",
          price: "7.00",
        },
        {
          image_url: `${menu_url}media-tiramisu.jpg`,
          name: "Tiramisu",
          description: "A classic dessert with layers of coffee-soaked ladyfingers and mascarpone cheese.",
          price: "5.00",
        },
        {
          image_url: `${menu_url}media-lavacake.jpg`,
          name: "Lava Cake",
          description: "A rich and decadent chocolate cake with a molten, gooey center.",
          price: "6.00",
        },
        {
          image_url: `${menu_url}media-cremebrulee.jpg`,
          name: "Crème Brûlée",
          description: " A creamy and delicately torched dessert with a caramelized sugar crust.",
          price: "5.50",
        },
        {
          image_url: `${menu_url}media-applepie.jpg`,
          name: "Apple Pie",
          description: "A comforting, warm apple pie with a flaky pastry crust, perfect with a scoop of ice cream",
          price: "4.50",
        }
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
