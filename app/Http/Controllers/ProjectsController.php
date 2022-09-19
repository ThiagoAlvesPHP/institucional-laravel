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
        $project = Projects::find($id);

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
                    unlink(public_path('assets/images/projects/').$project->image);
                    // move image directory
                    $request->image->move(public_path('assets/images/projects/'), $image);
                    $project->image = $image;
                    $project->save();

                    return redirect()->route('project', [$id])->with('status', 'Successfully updated!');
                } else {
                    return redirect()->route('project', [$id])->with('status', 'Extension invalid!');
                }
            } else {
                return redirect()->route('project', [$id])->with('status', 'Problems uploading the image!');
            }
        } else {
            $rulesFormOne = [
                'name'      => 'required|min:3'
            ];

            $validator = Validator::make($request->all(), $rulesFormOne);

            if($validator->fails()) {
                return redirect()->route('project', ['id' => $id])->withErrors($validator)->withInput();
            }

            $project->find($id)->update($validator->validated());
            return redirect()->route('project', ['id' => $id])->with('status', 'Successfully updated!');
        }
    }
}
