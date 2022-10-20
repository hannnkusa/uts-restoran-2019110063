<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    public function index()
    {
        function galleryPrefixImg($imgTitle)
        {
            return "../img/gallery/gallery-{$imgTitle}.jpg";
        }

        function chefPrefixImg($imgTitle)
        {
            return "../img/chefs/chefs-{$imgTitle}.jpg";
        }

        $about = [
            "gallery" => [
                galleryPrefixImg(1), galleryPrefixImg(2), galleryPrefixImg(3), galleryPrefixImg(4), galleryPrefixImg(5), galleryPrefixImg(6), galleryPrefixImg(7), galleryPrefixImg(8)
            ],
            "chefs" => [
                [
                    "img" => chefPrefixImg(1),
                    "name" => "Walter White",
                    "position" => "Master Chef"
                ],
                [
                    "img" => chefPrefixImg(2),
                    "name" => "Sarah Jhonson",
                    "position" => "Patissier"
                ],
                [
                    "img" => chefPrefixImg(3),
                    "name" => "William Anderson",
                    "position" => "Cook"
                ],
            ]
        ];
        return view('about', compact('about'));
    }
}
