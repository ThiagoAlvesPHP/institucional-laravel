<?php

namespace App\Http\Controllers;

use App\Models\Aboult;
use App\Models\Banner;
use App\Models\Config;
use App\Models\ConfigMetas;
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

        // var_dump(Auth::user());
    }

    public function index(Request $request)
    {
        // var_dump(Auth::user()->name);
        return view('admin.home', $this->array);
    }

    public function banner(Request $request)
    {
        $this->array['data']['banner'] = Banner::find(1);

        return view('admin.home', $this->array);
    }
    /**
     * update banner
     */
    public function bannerUpdate($id, Request $request)
    {
        $banner = Banner::find($id);
        // update image
        if ($request->hasFile('image')) {
            // validade upload success
            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                // extension valide
                if ($extension == "png" OR $extension == "jpeg" OR $extension == "jpg") {
                    // create name image
                    $image = $request->image->store('');
                    // delete image directory
                    unlink(public_path('assets/images/').$banner->image);
                    // move image directory
                    $request->image->move(public_path('assets/images/'), $image);
                    $banner->image = $image;
                    $banner->save();

                    return redirect()->route('banner')->with('status', 'Successfully updated!');
                } else {
                    return redirect()->route('banner')->with('status', 'Extension invalid!');
                }
            } else {
                return redirect()->route('banner')->with('status', 'Problems uploading the image!');
            }
        } else {
            $rulesFormOne = [
                'title'      => 'required|min:3',
                'text'     => 'required|min:30',
                'link'   => 'required|min:1',
                'link_text'     => 'required|min:5'
            ];

            $validator = Validator::make($request->all(), $rulesFormOne);

            if($validator->fails()) {
                return redirect()->route('banner')->withErrors($validator)->withInput();
            }

            $banner->update($validator->validated());
            return redirect()->route('banner')->with('status', 'Successfully updated!');
        }
    }

    /**
     * page aboult
     */
    public function aboult(Request $request)
    {
        $this->array['data']['aboult'] = Aboult::find(1);

        return view('admin.home', $this->array);
    }
    /**
     * update aboult
     */
    public function aboultUpdate(Request $request)
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

    /**
     * page projects
     */
    public function projects()
    {
        $this->array['data']['projects'] = Projects::all();

        return view('admin.home', $this->array);
    }
    /**
     * page update project
     */
    public function project($id, Request $request)
    {
        $project = Projects::find($id);
        if (!$project) {
            return redirect()->route('projects');
        }

        $this->array['data']['project'] = $project;
        return view('admin.home', $this->array);
    }
    /**
     * action update project
     */
    public function projectUpdate($id, Request $request)
    {
        $rulesFormOne = [
            'name'      => 'required|min:3'
        ];

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('project', ['id' => $id])->withErrors($validator)->withInput();
        }

        Projects::find($id)->update($validator->validated());
        return redirect()->route('project', ['id' => $id])->with('status', 'Successfully updated!');
    }

    /**
     * page services
     */
    public function services()
    {
        $this->array['data']['services'] = Services::find(1);

        return view('admin.home', $this->array);
    }
    /**
     * action update services
     */
    public function servicesUpdate($id, Request $request)
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


    /**
     * page config
     */
    public function config()
    {
        $this->array['data']['config'] = Config::find(1);
        $this->array['data']['metas'] = ConfigMetas::all();

        return view('admin.home', $this->array);
    }
    /**
     * action update config
     */
    public function configUpdate($id, Request $request)
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
    public function configMetasRegister($id, Request $request)
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
     * action logout
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
