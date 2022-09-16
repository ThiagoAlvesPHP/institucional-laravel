<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

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
    }

    public function index(Request $request)
    {

        return view('admin.home', $this->array);
    }

    public function banner(Request $request)
    {
        $this->array['data']['banner'] = Banner::find(1);

        return view('admin.home', $this->array);
    }
}
