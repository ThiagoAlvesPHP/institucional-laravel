<?php

namespace App\Http\Controllers;

use App\Models\Aboult;
use App\Models\Banner;
use App\Models\Products;
use App\Models\Projects;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    /**
     * update banner
     */
    public function bannerUpdate($id, Request $request)
    {
        if ($request->method() == 'POST') {
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

            Banner::find($id)->update($validator->validated());
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
        if ($request->method() == 'POST') {
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
}
