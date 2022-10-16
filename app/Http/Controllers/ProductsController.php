<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __invoke()
    {
        function prefixImg ($imgTitle)
        {
            return "../img/specials/specials-{$imgTitle}.png";
        }

        $products = [
            [
                "head" => "Specials 1",
                "subhead" => "Qui laudantium consequatur laborum sit qui",
                "description" => "Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni.",
                "image" => prefixImg(1),
            ],
            [
                "head" => "Specials 2",
                "subhead" => "Sapiente dila parde sonata raqer a videna mareta",
                "description" => "Optio nesciunt eaque beatae accusamus lerode pakto madirna desera",
                "image" => prefixImg(2),
            ],
            [
                "head" => "Specials 3",
                "subhead" => "Eos voluptatibus quo. Odio similique illum id",
                "description" => "Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus",
                "image" => prefixImg(3),
            ],
            [
                "head" => "Specials 4",
                "subhead" => "Totam aperiam accusamus. Repellat",
                "description" => "Eaque consequuntur consequuntur libero expedita in voluptas.",
                "image" => prefixImg(4),
            ],
            [
                "head" => "Specials 5",
                "subhead" => "Omnis blanditiis saepe eos autem qui sunt debitis",
                "description" => "Exercitationem nostrum omnis. Ut reiciendis repudiandae minus.",
                "image" => prefixImg(5),
            ],
        ];
        return view('products', compact('products'));
    }
}
