var Restaurants = {};
const rest_url = "../img/gallery/";

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
          location: "PH Las Mercedes, Edificio 23",
          phone: "238-1911",
          image_url: `${rest_url}rest-1.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.480583442032!2d-79.53371942439553!3d9.01984839104114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca838dcf0c1a3%3A0xec8b0e6868afc7be!2sPH%20Las%20Mercedes%2C%20Edificio%2023%2C%20Tumba%20Muerto%2C%20Panam%C3%A1!5e0!3m2!1sen!2spa!4v1698026207565!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          location: "Av Condado del Rey 2, Panamá",
          phone: "205-4989",
          image_url: `${rest_url}rest-2.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.355331061546!2d-79.52881872439545!3d9.031314091030124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca82f84a5ae37%3A0xab8719601004bb41!2sAv%20Condado%20del%20Rey%202%2C%20Panam%C3%A1!5e0!3m2!1sen!2spa!4v1698026342856!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          location: "Vía Centenario, Panamá",
          phone: "210-9793",
          image_url: `${rest_url}rest-3.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.1900246976381!2d-79.53527712884382!3d9.02905249920736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca8233ed7054b%3A0xab4bdccda00d039a!2sAltaPlaza%20Mall!5e0!3m2!1sen!2spa!4v1698026427731!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          location: "Villa Lucre, San Miguelito",
          phone: "272-3105",
          image_url: `${rest_url}rest-4.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.270854497183!2d-79.4819150583488!3d9.039038996826049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fab5602bc1f8b35%3A0x4d376bab1cf47509!2sVilla%20Lucre%2C%20San%20Miguelito!5e0!3m2!1sen!2spa!4v1698026489825!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },        {
          location: "Penonome",
          phone: "268-0043",
          image_url: `${rest_url}rest-5.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.4545306529237!2d-80.35288833041658!3d8.517032699470333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fac4f387bce4cb7%3A0x2f463c56955dbef1!2sPenonome!5e0!3m2!1sen!2spa!4v1698026574462!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          location: "3F8P+29R, Transístmica, Panamá",
          phone: "222-3014",
          image_url: `${rest_url}rest-6.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d984.9954281078154!2d-79.51394977094763!3d9.065429999674672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca84d950adec7%3A0x95598dc32e5a8029!2sSan%20Isidro%20station!5e0!3m2!1sen!2spa!4v1698026800379!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },        {
          location: "Marginal, Avenida Roosevelt, Panamá",
          phone: "227-6589",
          image_url: `${rest_url}rest-7.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.0174648485713!2d-79.55560922439601!3d8.97053719108849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca8a4041bb127%3A0x3c6bff29f22095c1!2sAlbrook%20Mall!5e0!3m2!1sen!2spa!4v1698027625966!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          location: "Calle San Juan Bosco, Panamá",
          phone: "290-7997",
          image_url: `${rest_url}rest-8.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d985.1981685091133!2d-79.50887833039737!3d8.991216299441792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca906eaeb5d27%3A0x3af380c4c8074f3a!2sCalle%20San%20Juan%20Bosco%2C%20Panam%C3%A1!5e0!3m2!1sen!2spa!4v1698027855958!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },        {
          location: "Bella Vista, Panama City",
          phone: "262-4813",
          image_url: `${rest_url}rest-9.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d348.3318333026929!2d-79.52178124210016!3d8.979065293404727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2spa!4v1698027915796!5m2!1sen!2spa" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
        },
        {
          location: "Av. Domingo Díaz, Panamá",
          phone: "271-0580",
          image_url: `${rest_url}rest-10.jpg`,
          maps_location: `<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63048.936583397815!2d-79.54228071273795!3d9.012705208182185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fab55ec6df53ed1%3A0xdeedfb5daabbe844!2sMetromall%20Panam%C3%A1!5e0!3m2!1sen!2spa!4v1698028015129!5m2!1sen!2spa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>`
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
                  <h4>${r.location}</h4>
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
                  ${r.maps_location}
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
