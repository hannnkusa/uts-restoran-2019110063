<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function index()
    {
        function prefixImg ($imgTitle)
        {
            return "../img/testimonials/testimonials-{$imgTitle}.jpg";
        }

        $testimonials = [
            [
                "testimony" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.",
                "image" => prefixImg(1),
                "name" => "Saul Goodman",
                "who" => "Ceo"
            ],
            [
                "testimony" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.",
                "image" => prefixImg(2),
                "name" => "Sara Wilsson",
                "who" => "Designer"
            ],
            [
                "testimony" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.",
                "image" => prefixImg(3),
                "name" => "Jena Karlis",
                "who" => "Store Owner"
            ],
            [
                "testimony" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.",
                "image" => prefixImg(4),
                "name" => "Matt Bradon",
                "who" => "Freelancer"
            ],
            [
                "testimony" => "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.",
                "image" => prefixImg(5),
                "name" => "John Larson",
                "who" => "Entrepreneur"
            ],
        ];
        return view('testimonials', compact('testimonials'));
    }
}
