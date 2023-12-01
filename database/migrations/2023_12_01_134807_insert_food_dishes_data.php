<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $foodDishes = [
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-lasagne.jpg',
                'name' => 'Lasagna alla Rustica',
                'description' => 'Tender pasta layers with rich beef and pork ragù, creamy béchamel, and cheeses',
                'price' => '9.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-pizza.jpg',
                'name' => 'Pizza Margherita',
                'description' => 'Features a crisp crust topped with tomato sauce, fresh mozzarella, basil, and olive oil',
                'price' => '12.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-spaghetti.jpg',
                'name' => 'Spaghetti Pomodoro',
                'description' => 'Thin pasta tossed in a savory tomato sauce with garlic, basil, and olive oil, and parmiggiano',
                'price' => '8.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-raviolli.jpg',
                'name' => 'Ravioli di Ricotta',
                'description' => 'Tender pasta pockets filled with spinach and ricotta, served in a rich, tomato-based sauce',
                'price' => '10.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-shawarma.jpg',
                'name' => 'Chicken Shawarma',
                'description' => 'A savory blend of marinated chicken and sauces wrapped in warm pita bread.',
                'price' => '7.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-kebab.jpg',
                'name' => 'Adana Kebab',
                'description' => 'Grilled skewers of spiced minced meat, a Mediterranean delight.',
                'price' => '8.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-labne.jpg',
                'name' => 'Labne and Pita',
                'description' => 'Creamy yogurt dip topped with herbs and served with fresh pita bread.',
                'price' => '5.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-baklava.jpg',
                'name' => 'Pistachio Baklava',
                'description' => 'Sweet and flaky pastry filled with honey and pistachio goodness.',
                'price' => '5.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-guac.jpg',
                'name' => 'Totopos con Guacamole',
                'description' => 'Crispy corn chips served with a generous portion of signature guacamole.',
                'price' => '6.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-nachos.jpg',
                'name' => 'Nachos Supremo Fiesta',
                'description' => 'A festive platter of loaded nachos with beef, perfect for sharing.',
                'price' => '7.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-taquitos.jpg',
                'name' => 'Taquitos de Pollo y Queso',
                'description' => 'Rolled tortillas filled with chicken and cheese, fried to perfection.',
                'price' => '8.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-quesadilla.jpg',
                'name' => 'Quesadilla de Pollo Casera',
                'description' => 'Homemade chicken quesadilla with a melty cheese filling and herbs',
                'price' => '7.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-friedrice.jpg',
                'name' => 'Egg Fried Rice',
                'description' => 'Classic fried rice with a tasty mix of vegetables, soy sauce and scrambled eggs',
                'price' => '7.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-pekingduck.jpg',
                'name' => 'Peking Duck',
                'description' => 'A traditional Chinese dish featuring tender roasted duck with crispy skin',
                'price' => '18.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-kungpaochicken.jpg',
                'name' => 'Kung Pao Chicken',
                'description' => 'A spicy and savory Sichuan chicken dish with peanuts and vegetables',
                'price' => '12.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-tofu.jpg',
                'name' => 'Sesame Tofu',
                'description' => 'Tofu cubes coated in a flavorful black sesame sauce, a vegan favorite',
                'price' => '7.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-ramen.jpg',
                'name' => 'Shoyu Ramen',
                'description' => 'Japanese noodle soup with soy sauce-based broth and a variety of toppings.',
                'price' => '11.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-nigiri.jpg',
                'name' => 'Nigiri Platter',
                'description' => 'Assorted fresh and expertly crafted sushi bites, a perfect introduction to sushi.',
                'price' => '10.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-gyoza.jpg',
                'name' => 'Pork Gyoza',
                'description' => 'Pan-fried dumplings filled with seasoned ground pork and aromatic spices.',
                'price' => '8.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-gyudon.jpg',
                'name' => 'Gyudon Beef Bowl',
                'description' => 'A Japanese dish featuring thinly sliced beef and onions, served over rice.',
                'price' => '7.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-smashburger.jpg',
                'name' => 'Smash Burger',
                'description' => 'A mouthwatering burger with a perfectly seared, smashed patty.',
                'price' => '7.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-fries.jpg',
                'name' => 'Loaded Fries',
                'description' => 'Crispy fries piled high with bacon and a variety of other tasty toppings.',
                'price' => '6.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-chickenburger.jpg',
                'name' => 'Chicken Sandwich',
                'description' => 'A flavorful chicken sandwich with cheese and a delicious combination of ingredients.',
                'price' => '6.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-wings.jpg',
                'name' => 'Buffalo Wings',
                'description' => 'Spicy and tangy chicken wings with a side of celery, perfect for heat lovers.',
                'price' => '7.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-tiramisu.jpg',
                'name' => 'Tiramisu',
                'description' => 'A classic dessert with layers of coffee-soaked ladyfingers and mascarpone cheese.',
                'price' => '5.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-lavacake.jpg',
                'name' => 'Lava Cake',
                'description' => 'A rich and decadent chocolate cake with a molten, gooey center.',
                'price' => '6.00',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-cremebrulee.jpg',
                'name' => 'Crème Brûlée',
                'description' => 'A creamy and delicately torched dessert with a caramelized sugar crust.',
                'price' => '5.50',
            ],
            [
                'image_url' => 'https://wordbite.up.railway.app/img/menu/media-applepie.jpg',
                'name' => 'Apple Pie',
                'description' => 'A comforting, warm apple pie with a flaky pastry crust, perfect with a scoop of ice cream',
                'price' => '4.50',
            ],
        ];

        foreach ($foodDishes as $dish) {
            DB::table('food_dish')->insert($dish);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
