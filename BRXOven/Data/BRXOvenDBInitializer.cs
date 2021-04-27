using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace BRXOven.Data
{
    internal class BRXOvenDBInitializer : DropCreateDatabaseIfModelChanges<BRXOvenContext>
    {
        protected override void Seed(BRXOvenContext context)
        {
            IList<Models.Dish> defaultDishes = new List<Models.Dish>();

            defaultDishes.Add(new Models.Dish() { Name = "Hot Dog", PriceCost = 1.25m, PriceSell = 4.50m, NumSold = 1000  });
            defaultDishes.Add(new Models.Dish() { Name = "Pizza", PriceCost = 2.25m, PriceSell = 5, NumSold = 350 });
            defaultDishes.Add(new Models.Dish() { Name = "Salmon", PriceCost = 3, PriceSell = 12, NumSold = 400 });
            defaultDishes.Add(new Models.Dish() { Name = "Steak", PriceCost = 8, PriceSell = 20, NumSold = 1700 });
            defaultDishes.Add(new Models.Dish() { Name = "Chicken", PriceCost = 2.50m, PriceSell = 7, NumSold = 1250 });
            defaultDishes.Add(new Models.Dish() { Name = "Salad", PriceCost = 5, PriceSell = 7, NumSold = 100 });
            defaultDishes.Add(new Models.Dish() { Name = "Omelette", PriceCost = 0.50m, PriceSell = 5, NumSold = 600 });
            defaultDishes.Add(new Models.Dish() { Name = "Sandwich", PriceCost = 2.30m, PriceSell = 6, NumSold = 1000 });
            defaultDishes.Add(new Models.Dish() { Name = "Coffee", PriceCost = 3, PriceSell = 4, NumSold = 1500 });
            defaultDishes.Add(new Models.Dish() { Name = "Soup", PriceCost = 6, PriceSell = 3, NumSold = 250 });

            context.Dishes.AddRange(defaultDishes);

            base.Seed(context);
        }
    }
}