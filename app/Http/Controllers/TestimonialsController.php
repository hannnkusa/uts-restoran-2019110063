<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialsController extends Controller
{

    public function __invoke(Request $request)
    {
        function prefixImg ($imgTitle)
        {
            return "../images/testimony/{$imgTitle}.jpg";
        }

        $testimonies = [
            [
                "result" => "Pelayanan disini cepat dan kualitas jangan diragukan. Siap melayani segala keperluan konsumen terutama dalam bidang otomotif. Pengerjannya cepat dan tim juga memberikan saran serta masukkan yang mengoptimalkan motor saya",
                "image" => prefixImg(1),
                "name" => "BOY",
                "nickname" => "boy"
            ],
            [
                "result" => "Mantap bos! Selalu rekomenin bengkel ini buat servis atau sekedar melakukan pengecekkan rutin kendaraan.
                Pelayanan yang baik, harga yang bisa menyesuaikan dan optimal pengerjannya",
                "image" => prefixImg(2),
                "name" => "ASEP",
                "nickname" => "asep"
            ],
            [
                "result" => "Selalu balik lagi kesini kalau ada kendala di motor. Mekaniknya cepat tanggap dan memberikan masukkan kepada saya untuk aware sama kendaraan.
                Mau modif pun dibantu sampai berfungsi dengan baik. Sukses selalu bengel ABC!",
                "image" => prefixImg(3),
                "name" => "ANDI",
                "nickname" => "andi"
            ]
        ];
        return view('testimonials', compact('testimonies'));
    }
}
