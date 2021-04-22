<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [];
        $data[] = [
            'name' => 'Apple',
            'system_name' => 'apple',
            'country_id' => 1,
            'point_id' => 1,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Banana',
            'system_name' => 'banaba',
            'country_id' => 1,
            'point_id' => 1,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Beef',
            'system_name' => 'beef',
            'country_id' => 2,
            'point_id' => 3,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Mapo Tofu',
            'system_name' => 'Mapo_Tofu',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];

        $data[] = [
            'name' => 'Home style sauteed Tofu',
            'system_name' => 'Home_style_sauteed_Tofu',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 620,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];

        $data[] = [
            'name' => 'Fried Tofu',
            'system_name' => 'Fried_Tofu',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 620,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Bean curd',
            'system_name' => 'Bean_curd',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 690,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Stinky tofu',
            'system_name' => 'Stinky_tofu',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 620,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Potato silk',
            'system_name' => 'Potato_silk',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 520,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pan fried potato',
            'system_name' => 'Pan_fried_potato',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 520,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised beans with potato',
            'system_name' => 'Braised_beans_with_potato',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 550,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried Potato Green Pepper & Eggplant',
            'system_name' => 'Fried_Potato_Green_Pepper_&_Eggplant',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 520,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'French fries',
            'system_name' => 'French_fries',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 300,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Yu-Shiang Eggplant',
            'system_name' => 'Yu-Shiang_Eggplant',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Mashed garlic eggplant',
            'system_name' => 'Yu-Shiang_Eggplant',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Eggplant with mince pork',
            'system_name' => 'Eggplant_with_mince_pork',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spicy cabbage',
            'system_name' => 'Spicy_cabbage',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sour cabbage',
            'system_name' => 'Sour_cabbage',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Baby Cabbage',
            'system_name' => 'Steamed_Baby_Cabbage',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 640,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shredded cabbage',
            'system_name' => 'Shredded_cabbage',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 630,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Lettuce in Oyster Sauce',
            'system_name' => 'Sauteed_Lettuce_in_Oyster_Sauce',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 450,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Saute vegetable',
            'system_name' => 'Saute_vegetable',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 680,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Tumis kangkung',
            'system_name' => 'Tumis_kangkung',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 570,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Lettuce with smashed garlic',
            'system_name' => 'Lettuce_with_smashed_garlic',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 650,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed spainch',
            'system_name' => 'Sauteed_spainch',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 620,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'SaSauteed bean sprouts',
            'system_name' => 'SaSauteed_bean_sprouts',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 700,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed broad beans',
            'system_name' => 'Sauteed_broad_beans',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 700,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Soybean',
            'system_name' => 'Soybean',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 720,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Broccoli with Oyster Sauce',
            'system_name' => 'Broccoli_with_Oyster_Sauce',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 520,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Deep Fried lotus root',
            'system_name' => 'Deep_Fried_lotus_root',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 520,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Lotus root',
            'system_name' => 'Lotus_root',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 580,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Tomato salad',
            'system_name' => 'Tomato_salad',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 620,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Gizzard',
            'system_name' => 'Gizzard',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 220,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Black Fungus in Vinegar Sauce',
            'system_name' => 'Black_Fungus_in_Vinegar_Sauce',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 450,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Cucumber in Sauce',
            'system_name' => 'Cucumber_in_Sauce',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 630,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Peanut',
            'system_name' => 'Peanut',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 620,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Seaweed salad',
            'system_name' => 'Seaweed_salad',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 650,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chinese Yam in Hot Toffee',
            'system_name' => 'Chinese_Yam_in_Hot_Toffee',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 300,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried Yam',
            'system_name' => 'Fried_Yam',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 350,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried beans',
            'system_name' => 'Fried_beans',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 450,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Oyster mushroom',
            'system_name' => 'Oyster_mushroom',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 610,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Stuffed bitter melon',
            'system_name' => 'Stuffed_bitter_melon',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Scrambled egg with tomato',
            'system_name' => 'Scrambled_egg_with_tomato',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 150,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Scrambled Egg with Leek',
            'system_name' => 'Scrambled_Egg_with_Leek',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 160,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Scrambled Egg with cucumber',
            'system_name' => 'Scrambled_Egg_with_cucumber',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 170,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed egg custard',
            'system_name' => 'Steamed_egg_custard',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pork liver',
            'system_name' => 'Pork_liver',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pig ears',
            'system_name' => 'Pig_ears',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Roast pork',
            'system_name' => 'Roast_pork',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed pork with rice powder',
            'system_name' => 'Steamed_pork_with_rice_powder',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 2 - 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sweet and sour spareribs',
            'system_name' => 'Sweet_and_sour_spareribs',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised spareribs with kelp',
            'system_name' => 'Braised_spareribs_with_kelp',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Cola Chicken wings',
            'system_name' => 'Cola_Chicken_wings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chicken Feet with Pickled Peppers',
            'system_name' => 'Chicken_Feet_with_Pickled_Peppers',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chicken Feet with black bean sauce',
            'system_name' => 'Chicken_Feet_with_black_bean_sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Chicken with Chili Sauce',
            'system_name' => 'Steamed_Chicken_with_Chili_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Roast goose',
            'system_name' => 'Roast_goose',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Boiled chicken',
            'system_name' => 'Boiled_chicken',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Saute Spicy Chicken',
            'system_name' => 'Saute_Spicy_Chicken',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Chicken with Mushroom',
            'system_name' => 'Steamed_Chicken_with_Mushroom',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chicken braised with brown sauce',
            'system_name' => 'Chicken_braised_with_brown_sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];

        $data[] = [
            'name' => 'Soy sauce chicken',
            'system_name' => 'Soy_sauce_chicken',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spicy Chicken',
            'system_name' => 'Spicy_Chicken',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Kung Pao Chicken',
            'system_name' => 'Kung_Pao_Chicken',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Stewed Chicken with Three Cups Sauce',
            'system_name' => 'Stewed_Chicken_with_Three_Cups_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shredded chicken',
            'system_name' => 'Shredded_chicken',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried chicken drumsticks',
            'system_name' => 'Fried_chicken_drumsticks',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Beer duck',
            'system_name' => 'Beer_duck',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Scalloped pork or lamb kidneys',
            'system_name' => 'Scalloped_pork_or_lamb_kidneys',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised pork',
            'system_name' => 'Braised_pork',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised beef',
            'system_name' => 'Braised_beef',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Beef Seasoned with Soy Sauce ',
            'system_name' => 'Beef_Seasoned_with_Soy_Sauce_',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sirloin tomatoes',
            'system_name' => 'Sirloin_tomatoes',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Stewed sirloin potatoes',
            'system_name' => 'Stewed_sirloin_potatoes',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Beef Fillet with Hot Green Pepper',
            'system_name' => 'Sauteed_Beef_Fillet_with_Hot_Green_Pepper',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pork with salted vegetable',
            'system_name' => 'Pork_with_salted_vegetable',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Double cooked pork slices',
            'system_name' => 'Double_cooked_pork_slices',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised Pork with Vermicelli',
            'system_name' => 'Braised_Pork_with_Vermicelli',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Boiled Shredded pork in chili oil',
            'system_name' => 'Boiled_Shredded_pork_in_chili_oil',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried Sweet and Sour Tenderloin',
            'system_name' => 'Fried_Sweet_and_Sour_Tenderloin',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pot bag meat',
            'system_name' => 'Pot_bag_meat',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shredded Pork with Vegetables',
            'system_name' => 'Shredded_Pork_with_Vegetables',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Tiger lily buds in Baconic',
            'system_name' => 'Tiger_lily_buds_in_Baconic',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Shredded Pork in Sweet Bean SauceSpicy cabbage',
            'system_name' => 'Sauteed_Shredded_Pork_in_Sweet_Bean_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shredded pork with bean',
            'system_name' => 'Shredded_pork_with_bean',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised pig feet with soy sauce',
            'system_name' => 'Braised_pig_feet_with_soy_sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Tripe',
            'system_name' => 'Tripe',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shredded pork and green pepper',
            'system_name' => 'Shredded_pork_and_green_pepper',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Yu-Shiang Shredded Pork ',
            'system_name' => 'Yu-Shiang_Shredded_Pork_',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised Fungus with pork sliceSpicy cabbage',
            'system_name' => 'Braised_Fungus_with_pork_slice',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Sliced Pork Eggs and Black Fungus',
            'system_name' => 'Sauteed_Sliced_Pork_Eggs_and_Black_Fungus',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Lettuce shredded meat',
            'system_name' => 'Lettuce_shredded_meat',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Vermicelli with Spicy Minced Pork',
            'system_name' => 'Sauteed_Vermicelli_with_Spicy_Minced_Pork',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried Lamb with Cumin',
            'system_name' => 'Fried_Lamb_with_Cumin',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Lamb shashlik',
            'system_name' => 'Lamb_shashlik',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Sliced Lamb with Scallion',
            'system_name' => 'Sauteed_Sliced_Lamb_with_Scallion',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Stewed Pork Ball in Brown Sauce',
            'system_name' => 'Stewed_Pork_Ball_in_Brown_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Boiled Fish with Picked Cabbage and Chili',
            'system_name' => 'Boiled_Fish_with_Picked_Cabbage_and_Chili',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Grilled fish',
            'system_name' => 'Grilled_fish',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sweet and sour fish',
            'system_name' => 'Sweet_and_sour_fish',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sweet and Sour Mandarin Fish',
            'system_name' => 'Sweet_and_Sour_Mandarin_Fish',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised Hairtail in Brown Sauce',
            'system_name' => 'Braised_Hairtail_in_Brown_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Fish Head with Diced Hot Red Peppers',
            'system_name' => 'Steamed_Fish_Head_with_Diced_Hot_Red_Peppers',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fish Filets in Hot Chili Oil',
            'system_name' => 'Fish_Filets_in_Hot_Chili_Oil',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Perch',
            'system_name' => 'Steamed_Perch',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Cheese Shrimp Meat',
            'system_name' => 'Cheese_Shrimp_Meat',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shrimp broccoli',
            'system_name' => 'Shrimp_broccoli',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised Shrimp in chili oil',
            'system_name' => 'Braised_Shrimp_in_chili_oil',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spicy shrimp',
            'system_name' => 'Spicy_shrimp_',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spicy crayfish',
            'system_name' => 'Spicy_crayfish',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Shrimp Duplings',
            'system_name' => 'Shrimp_Duplings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed shrimp with garlic and vermicelli',
            'system_name' => 'Steamed_shrimp_with_garlic_and_vermicelli',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed Shrimp meat',
            'system_name' => 'Sauteed_Shrimp_meat',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pipi shrimp',
            'system_name' => 'Pipi_shrimp',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Scallop in Shell',
            'system_name' => 'Scallop_in_Shell',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Oysters',
            'system_name' => 'Oysters',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Squid',
            'system_name' => 'Squid',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Abalone',
            'system_name' => 'Abalone',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Crab',
            'system_name' => 'Crab',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Turtle',
            'system_name' => 'Turtle',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Eel',
            'system_name' => 'Eel',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Yangzhou fried rice',
            'system_name' => 'Yangzhou_fried_rice',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Omelette',
            'system_name' => 'Omelette',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Bun Stuffed',
            'system_name' => 'Steamed_Bun_Stuffed',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed Pork Dumplings',
            'system_name' => 'Steamed_Pork_Dumplings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Egg omelet',
            'system_name' => 'Egg_omelet',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Potato omelet',
            'system_name' => 'Potato_omelet',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Egg pie cake',
            'system_name' => 'Egg_pie_cake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Marinated Egg',
            'system_name' => 'Marinated_Egg',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Poached Egg',
            'system_name' => 'Poached_Egg',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 130,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pine cake with Diced Scallion',
            'system_name' => 'Pine_cake_with_Diced_Scallion',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sesame seed cake',
            'system_name' => 'Sesame_seed_cake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 90,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chinese hamburger',
            'system_name' => 'Chinese_hamburger',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Leek box',
            'system_name' => 'Leek_box',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 190,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed bun with purple potato and pumpkin',
            'system_name' => 'Steamed_bun_with_purple_potato_and_pumpkin',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 190,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed bun',
            'system_name' => 'Steamed_bun',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 210,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed stuffed bun',
            'system_name' => 'Steamed_stuffed_bun',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 210,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pumpkin pie',
            'system_name' => 'Pumpkin_pie',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 110,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pizza',
            'system_name' => 'Pizza',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Deep-Fried Dough Sticks',
            'system_name' => 'Deep-Fried_Dough_Sticks',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sauteed noodles with minced meat',
            'system_name' => 'Sauteed_noodles_with_minced_meat',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chongqing Hot and Sour Rice Noodles',
            'system_name' => 'Chongqing_Hot_and_Sour_Rice_Noodles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Cold noodles',
            'system_name' => 'Cold_noodles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Noodles with egg and tomato',
            'system_name' => 'Noodles_with_egg_and_tomato',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spaghetti with meat sauce',
            'system_name' => 'Spaghetti_with_meat_sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Noodles with tomato sauce',
            'system_name' => 'Noodles_with_tomato_sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Cold Rice Noodles',
            'system_name' => 'Cold_Rice_Noodles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sichuan noodles with peppery sauce',
            'system_name' => 'Sichuan_noodles_with_peppery_sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Qishan noodles',
            'system_name' => 'Qishan_noodles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried noodles',
            'system_name' => 'Fried_noodles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Dumplings',
            'system_name' => 'Dumplings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Corn Cob',
            'system_name' => 'Corn_Cob',
            'country_id' => 1,
            'point_id' => 4,
            'score' => 700,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Braised beef noodle',
            'system_name' => 'Braised_beef_noodle',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'fried rice noodles',
            'system_name' => 'fried_rice_noodles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Steamed vermicelli roll',
            'system_name' => 'Steamed_vermicelli_roll',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 70,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pork wonton',
            'system_name' => 'Pork_wonton',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fried Dumplings',
            'system_name' => 'Fried_Dumplings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Tang yuan',
            'system_name' => 'Tang-yuan',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Millet congee',
            'system_name' => 'Millet_congee',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sweet potato porridge',
            'system_name' => 'Sweet_potato_porridge',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 400,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Jellyfish',
            'system_name' => 'Jellyfish',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Minced Pork Congee with Preserved Egg',
            'system_name' => 'Minced_Pork_Congee_with_Preserved_Egg',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Rice porridge',
            'system_name' => 'Rice_porridge',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 560,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Rice',
            'system_name' => 'Rice',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 580,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Laver ric',
            'system_name' => 'Laver_rice',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 560,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Stone pot of rice',
            'system_name' => 'Stone_pot_of_rice',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 550,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Black bone chicken soup',
            'system_name' => 'Black_bone_chicken_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 70,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Crucian and Bean Curd Soup',
            'system_name' => 'Crucian_and_Bean_Curd_Soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Dough Drop and Assorted Vegetable Soup',
            'system_name' => 'Dough_Drop_and_Assorted_Vegetable_Soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Hot and Sour Soup',
            'system_name' => 'Hot_and_Sour_Soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 170,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pork ribs soup with radish',
            'system_name' => 'Pork_ribs_soup_with_radish',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Tomato and Egg Soup',
            'system_name' => 'Tomato_and_Egg_Soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 250,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'West Lake beef soup',
            'system_name' => 'West_Lake_beef_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Lotus Root and Rib soup',
            'system_name' => 'Lotus_Root_and_Rib_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Seaweed and Egg Soup',
            'system_name' => 'Seaweed_and_Egg_Soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 300,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Seaweed tofu soup',
            'system_name' => 'Seaweed_tofu_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 350,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Corn and sparerib soup',
            'system_name' => 'Corn_and_sparerib_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spinach nd pork liver soup',
            'system_name' => 'Spinach_and_pork_liver_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Borsch',
            'system_name' => 'Borsch',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'White fungus soup',
            'system_name' => 'White_fungus_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Miso soup',
            'system_name' => 'Miso_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 180,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Duck Blood in Chili Sauce',
            'system_name' => 'Duck_Blood_in_Chili_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Pork Lungs in Chili Sauce',
            'system_name' => 'Pork_Lungs_in_Chili_Sauce',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Spicy pot',
            'system_name' => 'Spicy_pot',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Golden meat rolls',
            'system_name' => 'Golden_meat_rolls',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Chiffon Cake',
            'system_name' => 'Chiffon_Cake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Egg Tart',
            'system_name' => 'Egg_Tart',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Bread',
            'system_name' => 'Bread',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 220,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Croissant',
            'system_name' => 'Croissant',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 140,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Toast',
            'system_name' => 'Toast',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 240,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Biscuits',
            'system_name' => 'Biscuits',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 180,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Cookies',
            'system_name' => 'Cookies',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 180,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Soda biscuit',
            'system_name' => 'Soda_biscuit',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 160,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Double skin milk',
            'system_name' => 'Double_skin_milk',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Ice cream',
            'system_name' => 'Ice_cream',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Egg pudding',
            'system_name' => 'Egg_pudding',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Sweet stewed snow pear',
            'system_name' => 'Sweet_stewed_snow_pear',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 300,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'Fruit salad',
            'system_name' => 'Fruit_salad',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'apple pie',
            'system_name' => 'apple_pie',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 130,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'baby back ribs',
            'system_name' => 'baby_back_ribs',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'baklava',
            'system_name' => 'baklava',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'beef carpaccio',
            'system_name' => 'beef_carpaccio',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'beef tartare',
            'system_name' => 'beef_tartare',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'beet salad',
            'system_name' => 'beet_salad',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'beignets',
            'system_name' => 'beignets',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'bibimbap',
            'system_name' => 'bibimbap',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'bread pudding',
            'system_name' => 'bread_pudding',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'breakfast burrito',
            'system_name' => 'breakfast_burrito',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'bruschetta',
            'system_name' => 'bruschetta',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'caesar salad',
            'system_name' => 'caesar_salad',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 580,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'cannoli',
            'system_name' => 'cannoli',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'caprese salad',
            'system_name' => 'caprese_salad',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 600,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'carrot cake',
            'system_name' => 'carrot_cake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'ceviche',
            'system_name' => 'ceviche',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 490,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'cheesecake',
            'system_name' => 'cheesecake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'cheese plate',
            'system_name' => 'cheese_plate',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'chicken curry',
            'system_name' => 'chicken_curry',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'chicken quesadilla',
            'system_name' => 'chicken_quesadilla',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'chicken wings',
            'system_name' => 'chicken_wings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'chocolate cake',
            'system_name' => 'chocolate_cake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'chocolate mousse',
            'system_name' => 'chocolate_mousse',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'churros',
            'system_name' => 'churros',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'clam chowder',
            'system_name' => 'clam_chowder',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'churros',
            'system_name' => 'churros',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'clam chowder',
            'system_name' => 'clam_chowder',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'club sandwich',
            'system_name' => 'club_sandwich',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'crab cakes',
            'system_name' => 'crab_cakes',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'creme brulee',
            'system_name' => 'creme_brulee',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'croque madame',
            'system_name' => 'croque_madame',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'cup cakes',
            'system_name' => 'cup_cakes',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'deviled eggs',
            'system_name' => 'deviled_eggs',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 70,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'donuts',
            'system_name' => 'donuts',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'dumplings',
            'system_name' => 'dumplings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 130,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'edamame',
            'system_name' => 'edamame',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 650,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'eggs benedict',
            'system_name' => 'eggs_benedict',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 650,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'escargots',
            'system_name' => 'escargots',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 650,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'falafel',
            'system_name' => 'falafel',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 210,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'filet mignon',
            'system_name' => 'filet_mignon',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'fish and chips',
            'system_name' => 'fish_and_chips',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'foie gras',
            'system_name' => 'foie_gras',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'french fries',
            'system_name' => 'french_fries',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'french onion soup',
            'system_name' => 'french_onion_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'french toast',
            'system_name' => 'french_toast',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 360,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'fried calamari',
            'system_name' => 'fried_calamari',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'fried rice',
            'system_name' => 'fried_rice',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 180,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'frozen yogurt',
            'system_name' => 'frozen_yogurt',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'garlic bread',
            'system_name' => 'garlic_bread',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 200,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'gnocchi',
            'system_name' => 'gnocchi',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 400,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'greek salad',
            'system_name' => 'greek_salad',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 500,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'grilled cheese sandwich',
            'system_name' => 'grilled_cheese_sandwich',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'grilled salmon',
            'system_name' => 'grilled_salmon',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 70,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'guacamole',
            'system_name' => 'guacamole',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 390,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'gyoza',
            'system_name' => 'gyoza',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 90,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'hamburger',
            'system_name' => 'hamburger',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'hot and sour soup',
            'system_name' => 'hot_and_sour_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 70,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'hot dog',
            'system_name' => 'hot_dog',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 10,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'huevos rancheros',
            'system_name' => 'huevos_rancheros',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'hummus',
            'system_name' => 'hummus',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 110,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'ice cream',
            'system_name' => 'ice_cream',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'lasagna',
            'system_name' => 'lasagna',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 120,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'lobster bisque',
            'system_name' => 'lobster_bisque',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'lobster roll sandwich',
            'system_name' => 'lobster_roll_sandwich',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'macaroni and cheese',
            'system_name' => 'macaroni_and_cheese',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'macarons',
            'system_name' => 'macarons',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 170,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'miso soup',
            'system_name' => 'miso_soup',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 170,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'mussels',
            'system_name' => 'mussels',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'nachos',
            'system_name' => 'nachos',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'omelette',
            'system_name' => 'omelette',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 130,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'onion rings',
            'system_name' => 'onion_rings',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'oysters',
            'system_name' => 'oysters',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'pad thai',
            'system_name' => 'pad_thai',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 240,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'paella',
            'system_name' => 'paella',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'pancakes',
            'system_name' => 'pancakes',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'panna cotta',
            'system_name' => 'panna_cotta',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'peking duck',
            'system_name' => 'peking_duck',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'pho',
            'system_name' => 'pho',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'pizza',
            'system_name' => 'pizza',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'pork chop',
            'system_name' => 'pork_chop',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'poutine',
            'system_name' => 'poutine',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'prime rib',
            'system_name' => 'prime_rib',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'pulled pork sandwich',
            'system_name' => 'pulled_pork_sandwich',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'ramen',
            'system_name' => 'ramen',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'ravioli',
            'system_name' => 'ravioli',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 50,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'red velvet cake',
            'system_name' => 'red_velvet_cake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'risotto',
            'system_name' => 'risotto',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'samosa',
            'system_name' => 'samosa',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 100,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'sashimi',
            'system_name' => 'sashimi',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 260,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'scallops',
            'system_name' => 'scallops',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'seaweed salad',
            'system_name' => 'seaweed_salad',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 420,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'shrimp and grits',
            'system_name' => 'shrimp_and_grits',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 90,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'spaghetti bolognese',
            'system_name' => 'spaghetti_bolognese',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'spaghetti carbonara',
            'system_name' => 'spaghetti_carbonara',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'spring rolls',
            'system_name' => 'spring_rolls',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'spaghetti carbonara',
            'system_name' => 'spaghetti_carbonara',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'steak',
            'system_name' => 'steak',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 0,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'strawberry shortcake',
            'system_name' => 'strawberry_shortcake',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'sushi',
            'system_name' => 'sushi',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 290,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'tacos',
            'system_name' => 'tacos',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 20,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'takoyaki',
            'system_name' => 'takoyaki',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 80,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'tiramisu',
            'system_name' => 'tiramisu',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 30,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'tuna tartare',
            'system_name' => 'tuna_tartare',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 40,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $data[] = [
            'name' => 'waffles',
            'system_name' => 'waffles',
            'country_id' => 1,
            'point_id' => 5,
            'score' => 60,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
        $chunks = array_chunk($data, 302);
        foreach ($chunks as $chunk) {
            Food::insert($chunk);
        }
    }
}
