<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Models\Banner;
use App\Models\Aboult;
use App\Models\Projects;
use App\Models\Service;
use App\Models\ServiceComplement;
use App\Models\Products;

use App\Mail\SendMailUser;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $array = array();

        $config =  Config::find(1);
        $banner = Banner::find(1);
        $aboult = Aboult::find(1);
        $projects = Projects::all();
        $service = Service::find(1);
        $products = Products::all();

        $service_complement = ServiceComplement::all()->where('service_id', $service->id);
        $service['icons'] = $service_complement;

        $array['config'] = $config;
        $array['banner'] = $banner;
        $array['aboult'] = $aboult;
        $array['projects'] = $projects;
        $array['service'] = $service;
        $array['products'] = $products;

        return view('home', $array);
    }
    /**
     * contact form
     */
    public function mail(Request $request)
    {
        Mail::to('thiagoalves@ltdeveloper.com.br')->send(new SendMailUser());

        return redirect()->route('home');
    }
}
