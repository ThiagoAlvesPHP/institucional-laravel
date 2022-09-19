<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Config;
use App\Models\Projects;

class ProjectsController extends Controller
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
     * page projects
     */
    public function index()
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
    public function update($id, Request $request)
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
}
