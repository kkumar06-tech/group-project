<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recipes;
class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recipes::create( [ 
            'name'=>"Fennel and Orange Salad",
        'description'=>"Bagged, mixed salad greens are one of our test-kitchen staff's favorite shortcut ingredients. Prepare the dressing right in the jar, seal it, and pop it into the fridge — it will keep for up to 3 days. Toss with the salad right before serving.",
        'ingredients'=>"...2 Tbsp. extra-virgin olive oil
...2 Tbsp. orange juice
...2 Tbsp. sherry vinegar
...3/4 tsp. salt
...1/4 tsp. Black pepper
...1 bag mixed salad greens
...3 small oranges
...2 medium fennel bulbs
...3/4 c. pitted green olives
...1/2 c. fresh basil leaves",
        'instructions'=>"1.Add all ingredients to crockpot.
2.Cook on low all day.
3.Serve over w/w pasta or brown rice.",
        'calories'=>"19",
        'protein'=>"2",
        'carbs'=>"7",
        'fats'=>"14",

            ] );




Recipes::create( [ 
            'name'=>"Greek Salad",
        'description'=>"High fiber ,low Carb, Vegetarian,Gluten-Free ",
        'ingredients'=>"3 tablespoons olive oil
3 tablespoons red-wine vinegar
1 teaspoon minced garlic
½ teaspoon dried oregano
Coarse salt and freshly ground pepper
1 head romaine lettuce, torn into bite-size pieces
1 pint cherry or grape tomatoes, halved
1 ½ cups crumbled feta cheese, (8 ounces)
½ red onion, halved and thinly sliced
1 large cucumber, peeled, halved and thinly sliced
½ cup Kalamata olives, pitted",
        'instructions'=>"In a large bowl, combine the lettuce, tomatoes, feta cheese, onion, cucumber, and olives.

In a jar, combine the olive oil, vinegar, garlic, and oregano; season with salt and pepper. Shake well to combine. Drizzle dressing over salad, and toss to coat. Serve immediately.",
        'calories'=>"174",
        'protein'=>"4",
        'carbs'=>"9",
        'fats'=>"14",

            ] );

            Recipes::create( [ 
                'name'=>"Grilled-Chciken,Red Onion and Mint Kebabs",
            'description'=>"  High-Protein, Low-Carb, Low-Sodium, Paleo, Dairy-Free, Gluten-Free, Egg-Free, Peanut-Free, Tree-Nut-Free, Soy-Free, Fish-Free, Shellfish-Free ",
            'ingredients'=>"2 lbs. skinless boneless chicken breast cut into 1-2 inch pcs.
3 T olive oil
4-6 garlic cloves, crushed
1 T fresh mint, thinly sliced
1 T fresh dill, finely sliced
1/4 tsp salt
Freshly ground black pepper
Juice of 2 lemons or limes
1 - 2 red onions, cut into 2 inch pieces
",
            'instructions'=>"Whisk oil, juice of 1 1/2 lemons, garlic, mint, dill, salt and pepper in a small bowl. Place chicken cubes and mixture into a ziploc bag, mixing well to coat chicken. Let marinate in fridge at least 30 minutes.

Alternate chicken and onion on skewers. Prepare grill (med-high) and grill until chicken is just cooked through, turning occasionally, about 9 minutes. Be careful not to overcook as it will be dry.

Remove kebabs to foil pouch and sprinkle with remaining lemon juice and serve.",
            'calories'=>"171",
            'protein'=>"21",
            'carbs'=>"5",
            'fats'=>"5",
    
                ] );

                Recipes::create( [ 
                    'name'=>"Slow-Cooker Creamy Chicken",
                'description'=>"  High-Protein, Low-Carb, Egg-Free, Peanut-Free, Tree-Nut-Free, Soy-Free, Fish-Free, Shellfish-Free",
                'ingredients'=>"1 1⁄2 lbs boneless skinless chicken breasts
10 1⁄2 ounces Healthy Request cream of chicken soup
8 ounces low-fat cream cheese or 8 ounces fat free cream cheese
1 (2/3 ounce) package Good Seasonings Italian salad dressing mix
6 ounces mushrooms (optional)
    ",
                'instructions'=>"Whisk oil, juice of 1 1/2 lemons, garlic, mint, dill, salt and pepper in a small bowl. Place chicken cubes and mixture into a ziploc bag, mixing well to coat chicken. Let marinate in fridge at least 30 minutes.
    
    Alternate chicken and onion on skewers. Prepare grill (med-high) and grill until chicken is just cooked through, turning occasionally, about 9 minutes. Be careful not to overcook as it will be dry.
    
    Remove kebabs to foil pouch and sprinkle with remaining lemon juice and serve.",
                'calories'=>"354",
                'protein'=>"50",
                'carbs'=>"12",
                'fats'=>"11",
        
                    ] );


                    Recipes::create( [ 
                        'name'=>"Vegan Creamed Spinach",
                    'description'=>"High-Protein, High-Fiber, Low-Fat, Vegan, Vegetarian, Dairy-Free, Gluten-Free, Egg-Free, Peanut-Free, Tree-Nut-Free, Soy-Free, Fish-Free, Shellfish-Free",
                    'ingredients'=>"* 1 bag frozen spinach {about 4 cup} 16 oz
* 1 1/2 cup water
* 1/2 tsp garlic powder
* 1/4 tsp salt
* 1/4 tsp onion powder or onion flake
* 1/8 tsp cayenne pepper
* 1/8 tsp nutmeg optional
* 1 cup nutritional yeast",
                    'instructions'=>"1.Add all ingredients to crockpot.
            2.Cook on low all day.
            3.Serve over w/w pasta or brown rice.",
                    'calories'=>"199",
                    'protein'=>"43",
                    'carbs'=>"23",
                    'fats'=>"2",
            
                        ] );

    }
}
