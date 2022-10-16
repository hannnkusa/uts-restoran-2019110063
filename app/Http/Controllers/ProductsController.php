<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __invoke()
    {
        function prefixSpecialImg ($imgTitle)
        {
            return "../img/specials/specials-{$imgTitle}.png";
        }

        function prefixMenuImg ($imgTitle)
        {
            return "../img/menu/menu-item-{$imgTitle}.png";
        }

        $products = [
            "menus" => [
                [
                    "head" => "Menu 1",
                    "description" => "Really Spicy Food, Order It To Feel The Taste!",
                    "image" => prefixMenuImg(1),
                ],
                [
                    "head" => "Menu 2",
                    "description" => "This Food Has A Really Nice Taste",
                    "image" => prefixMenuImg(2),
                ],
                [
                    "head" => "Menu 3",
                    "description" => "It's A Goddamn Nice Food, Would Mind To Check It Out?",
                    "image" => prefixMenuImg(3),
                ],
                [
                    "head" => "Menu 4",
                    "description" => "You Will Get Delicious Food.",
                    "image" => prefixMenuImg(4),
                ],
            ],
            "specials" => [
                [
                    "head" => "Specials 1",
                    "subhead" => "Qui laudantium consequatur laborum sit qui",
                    "description" => "Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni.",
                    "image" => prefixSpecialImg(1),
                ],
                [
                    "head" => "Specials 2",
                    "subhead" => "Sapiente dila parde sonata raqer a videna mareta",
                    "description" => "Optio nesciunt eaque beatae accusamus lerode pakto madirna desera",
                    "image" => prefixSpecialImg(2),
                ],
                [
                    "head" => "Specials 3",
                    "subhead" => "Eos voluptatibus quo. Odio similique illum id",
                    "description" => "Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus",
                    "image" => prefixSpecialImg(3),
                ],
                [
                    "head" => "Specials 4",
                    "subhead" => "Totam aperiam accusamus. Repellat",
                    "description" => "Eaque consequuntur consequuntur libero expedita in voluptas.",
                    "image" => prefixSpecialImg(4),
                ],
                [
                    "head" => "Specials 5",
                    "subhead" => "Omnis blanditiis saepe eos autem qui sunt debitis",
                    "description" => "Exercitationem nostrum omnis. Ut reiciendis repudiandae minus.",
                    "image" => prefixSpecialImg(5),
                ],
            ],
        ];

        return view('products', compact('products'));
    }
}
