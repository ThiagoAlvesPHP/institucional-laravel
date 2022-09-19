<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Config;
use App\Models\Services;

class ServicesController extends Controller
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
     * page services
     */
    public function index()
    {
        $this->array['data']['services'] = Services::find(1);

        return view('admin.home', $this->array);
    }
    /**
     * action update services
     */
    public function update($id, Request $request)
    {
        $rulesFormOne = [
            'name'          => 'required|min:3',
            'text'          => 'required|min:30',
            'link'          => 'required|min:1',
            'link_text'     => 'required|min:5',
            'link_icon'     => 'required|min:5'
        ];

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('services')->withErrors($validator)->withInput();
        }

        Services::find($id)->update($validator->validated());
        return redirect()->route('services')->with('status', 'Successfully updated!');
    }
}
