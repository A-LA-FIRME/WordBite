var Restaurants = {};

(function () {
  Restaurants = {
    init: function () {
      this.drawRestaurants();
      AOS.init();
      $("#preloader").remove();
    },

    drawRestaurants: function () {
      var restaurantsArr = [
        {
          ubication: "Los Andes Mall",
          phone: "231-3100",
          image_url: "../assets/img/about.jpg",
          maps_ubication: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5920.708673009257!2d1.8411223486681627!3d42.09988148487294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a508312251967d%3A0xc8dac010a7b1e524!2s08600%20Berga%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2spa!4v1697936002404!5m2!1ses-419!2spa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          ubication: "San Miguelito La Gran Estación",
          phone: "231-5000",
          image_url: "../assets/img/about.jpg",
          maps_ubication: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5920.708673009257!2d1.8411223486681627!3d42.09988148487294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a508312251967d%3A0xc8dac010a7b1e524!2s08600%20Berga%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2spa!4v1697936002404!5m2!1ses-419!2spa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        }
        // ... Más restaurantes
        {
          ubication: "Albrook",
          phone: "231-2100",
          image_url: "../assets/img/about.jpg",
          maps_ubication: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5920.708673009257!2d1.8411223486681627!3d42.09988148487294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a508312251967d%3A0xc8dac010a7b1e524!2s08600%20Berga%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2spa!4v1697936002404!5m2!1ses-419!2spa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        }
      ];

      var restaurantsHtml = "";

      restaurantsArr.forEach(function (r) {
        var restaurantHtml = `
          <div class="row p-2">
            <div class="col-lg-4 p-0 dashed-border-right ">
              <div class="box" data-aos="zoom-in">
                <div class="col-12 p-1">
                  <span>WordBite</span>
                </div>
                <div class="col-12 p-1">
                  <h4>${r.ubication}</h4>
                </div>
                <div class="col-12 p-1">
                  <p>${r.phone}</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 p-0 dashed-border-right dashed-border-left">
              <div class="box" data-aos="zoom-in">
                <div class="restaurant-img">
                  <img src="${r.image_url}" alt="">
                </div>
              </div>
            </div>

            <div class="col-lg-4 p-0 dashed-border-left">
              <div class="box" data-aos="zoom-in">
                <div data-aos="fade-up" class="aos-init aos-animate">
                  ${r.maps_ubication}
                </div>
              </div>
            </div>
          </div>
        `;
        restaurantsHtml += restaurantHtml;
      });

      $(".restaurants .container").append(restaurantsHtml);
    }
  };
})();

$(document).ready(function () {
  Restaurants.init();
});
