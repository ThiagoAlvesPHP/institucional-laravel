<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Aboult;

use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AboultController extends Controller
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

    /**
     * page aboult
     */
    public function index(Request $request)
    {
        $this->array['data']['aboult'] = Aboult::find(1);

        return view('admin.home', $this->array);
    }
    /**
     * update aboult
     */
    public function update(Request $request)
    {
        $rulesFormOne = [
            'name'      => 'required|min:3',
            'text'     => 'required|min:30'
        ];

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('aboult')->withErrors($validator)->withInput();
        }

        Aboult::find(1)->update($validator->validated());
        return redirect()->route('aboult')->with('status', 'Successfully updated!');
    }
}
