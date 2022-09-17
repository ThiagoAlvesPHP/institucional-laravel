<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Config;
use App\Models\Banner;
use App\Models\Aboult;
use App\Models\Projects;
use App\Models\Services;
use App\Models\ServiceComplement;
use App\Models\Products;
use App\Models\ConfigSocial;

use App\Mail\SendMailUser;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $array = array();

        $service = Services::find(1);

        $service_complement = ServiceComplement::all()->where('service_id', $service->id);
        $service['icons'] = $service_complement;

        $array['config'] = Config::find(1);
        $array['banner'] = Banner::find(1);
        $array['aboult'] = Aboult::find(1);
        $array['projects'] = Projects::all();
        $array['service'] = $service;
        $array['products'] = Products::all();
        $array['config_social'] = ConfigSocial::all()->where("status", '1');

        return view('home', $array);
    }
    /**
     * contact form
     */
    public function mail(Request $request)
    {
        $array = array();

        $service = Services::find(1);

        $service_complement = ServiceComplement::all()->where('service_id', $service->id);
        $service['icons'] = $service_complement;

        $array['config'] = Config::find(1);
        $array['banner'] = Banner::find(1);
        $array['aboult'] = Aboult::find(1);
        $array['projects'] = Projects::all();
        $array['service'] = $service;
        $array['products'] = Products::all();
        $array['config_social'] = ConfigSocial::all()->where("status", '1');

        $rules = [
            'name'      => 'required|min:3',
            'email'     => 'required|email',
            'subject'   => 'required|min:8',
            'phone'     => 'required|min:8',
            'message'   => 'required|min:30'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->route('home', ['#contact'])->withErrors($validator)->withInput();
        } else {
            Mail::to('thiagoalves@ltdeveloper.com.br')->send(new SendMailUser());
            return redirect()->route('home', ['#contact'])->withErrors(["message" => "E-mail enviado com sucesso!"]);
        }
    }
}
