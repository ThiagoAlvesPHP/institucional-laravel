<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Config;
use App\Models\ConfigMetas;
use App\Models\ConfigSocial;

class ConfigController extends Controller
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
     * page config
     */
    public function index()
    {
        $this->array['data']['config'] = Config::find(1);
        $this->array['data']['metas'] = ConfigMetas::all();
        $this->array['data']['social'] = ConfigSocial::all();

        return view('admin.home', $this->array);
    }
    /**
     * action update config
     */
    public function update($id, Request $request)
    {
        if ($request->input('update-address')) {
            $rulesFormOne = [
                'name'              => 'required|min:3',
                'email'             => 'required|email',
                'phone'             => 'required|min:10',
                'address'           => 'required|min:3',
                'address_number'    => '',
                'address_district'  => 'required|min:3',
                'complement'        => '',
                'city'              => 'required|min:3',
                'state'             => 'required|min:2',
                'country'           => 'required|min:3'
            ];
        }
        if ($request->input('update-head')) {
            $rulesFormOne = [
                'title'              => 'required|min:3',
                'text'             => 'required|min:30',
                'keywords'             => 'required|min:3',
            ];
        }

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('config')->withErrors($validator)->withInput();
        }

        Config::find($id)->update($validator->validated());
        return redirect()->route('config')->with('status', 'Successfully updated!');
    }
    /**
     * register metas
     */
    public function configMetasRegister(Request $request)
    {
        $rulesFormOne = [
            'property'              => 'required|min:3',
            'content'             => 'required|min:3'
        ];

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('config')->withErrors($validator)->withInput();
        }

        ConfigMetas::create($validator->validated());
        return redirect()->route('config')->with('status', 'Successfully registered!');
    }
    /**
     * delete meta
     */
    public function configMetaDelete($id)
    {
        ConfigMetas::find($id)->delete();
        return redirect()->route('config')->with('status', 'Successfully deleted!');
    }
    /**
     * social done update
     */
    public function configSocialUpdateStatus($id)
    {
        $social = ConfigSocial::find($id);
        $social->status = ($social->status == 1)?0:1;
        $social->save();
        return redirect()->route('config')->with('status', 'Successfully updated!');
    }
    /**
     * social update
     */
    public function configSocialUpdate($id, Request $request)
    {
        $this->array['path'] = 'social';
        $social = ConfigSocial::find($id);

        return view('admin.home', $this->array);
    }
}
