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
                'country'           => 'required|min:3',
                'link_whatsapp'     => 'required|min:10'
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
     * social page edit
     */
    public function configSocialEdit($id)
    {
        $this->array['path'] = 'social';
        $this->array['data']['social'] = ConfigSocial::find($id);

        return view('admin.home', $this->array);
    }
    /**
     * social update
     */
    public function configSocialUpdate($id, Request $request)
    {
        $social = ConfigSocial::find($id);

        // update image
        if ($request->hasFile('icon')) {
            // validade upload success
            if ($request->file('icon')->isValid()) {
                $extension = $request->icon->extension();
                // extension valide
                if ($extension == "png" OR $extension == "svg") {
                    // create name image
                    $image = $request->icon->store('');
                    // delete image directory
                    unlink(public_path('assets/images/icons/').$social->icon);
                    // move image directory
                    $request->icon->move(public_path('assets/images/icons/'), $image);
                    $social->icon = $image;
                    $social->save();

                    return redirect()->route('config.social.edit', [$id])->with('status', 'Successfully updated!');
                } else {
                    return redirect()->route('config.social.edit', [$id])->with('status', 'Extension invalid!');
                }
            } else {
                return redirect()->route('config.social.edit', [$id])->with('status', 'Problems uploading the image!');
            }
        } else {
            $rulesFormOne = [
                'name'      => 'required|min:3',
                'link'     => 'required|min:10'
            ];

            $validator = Validator::make($request->all(), $rulesFormOne);

            if($validator->fails()) {
                return redirect()->route('config.social.edit', [$id])->withErrors($validator)->withInput();
            }

            $social->update($validator->validated());
            return redirect()->route('config.social.edit', [$id])->with('status', 'Successfully updated!');
        }
    }
}
