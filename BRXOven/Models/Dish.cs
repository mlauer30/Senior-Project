using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace BRXOven.Models
{
    public class Dish
    {
        [Required]
        public int ID { get; set; }
        [MaxLength(50, ErrorMessage = "Limit characters to 50")]
        public string Name { get; set; }
        [Display(Name ="Cost to Produce")]
        public decimal PriceCost { get; set; }
        [Display(Name = "Sell Price")]
        public decimal PriceSell { get; set; }
        [Display(Name = "Number Sold")]
        public int NumSold { get; set; }
    }
}