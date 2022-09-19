<?php

namespace App\Http\Controllers;

use App\Models\Aboult;
use App\Models\Banner;
use App\Models\Config;
use App\Models\ConfigMetas;
use App\Models\Posts;
use App\Models\Products;
use App\Models\Projects;
use App\Models\Services;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    private $path;
    private $array = [];

    public function __construct(Request $request)
    {
        $this->path = explode("/", $request->path());
        $this->path = (count($this->path) > 1)?$this->path[1]:$this->path[0];
        $this->array['path'] = $this->path;
        $this->array['data'] = [];
        $this->array['data']['config'] = Config::find(1);
    }

    public function index(Request $request)
    {
        return view('admin.home', $this->array);
    }

    /**
     * action logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
