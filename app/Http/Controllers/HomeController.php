<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $array = array();

        $config =  Config::find(1);

        $imgs = [
            "logo" => '<img src="assets/'.$config->logo.'" width="150" alt="Logo">',
            "logo-dark" => '<img src="assets/'.$config->logo_dark.'" width="150" alt="Logo">',
            'favicon' => "assets/".$config->favicon
        ];

        // var_dump($this->banner($config, $imgs));
        // exit;

        $array['imgs'] = $imgs;
        $array['config'] = $config;

        return view('home', $array);
    }

    /**
     * banner
     */
    public function banner($config, $imgs)
    {
        $array = array();

        $banner = [
            "image" => "assets/images/banner2.png",
            "text" => "Leve a presença digital da sua empresa para um próximo nível! Do desenvolvimento à gestão e promoção de seu site, app ou e-commerce",
            "title" => $imgs['logo'] ?? 'LT developer',
            "link" => "https://ltdeveloper.com.br/"
        ];

        return $banner;
    }
}
