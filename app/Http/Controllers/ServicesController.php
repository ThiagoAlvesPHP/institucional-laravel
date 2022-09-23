<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Config;
use App\Models\Services;
use App\Models\ServiceComplement;

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
        $this->array['data']['icons'] = ServiceComplement::all();

        return view('admin.home', $this->array);
    }
    /**
     * action update services
     */
    public function update($id, Request $request)
    {
        $service = Services::find($id);

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
                    unlink(public_path('assets/images/').$service->image);
                    // move image directory
                    $request->image->move(public_path('assets/images/'), $image);
                    $service->image = $image;
                    $service->save();

                    return redirect()->route('services')->with('status', 'Successfully updated!');
                } else {
                    return redirect()->route('services')->with('status', 'Extension invalid!');
                }
            } else {
                return redirect()->route('services')->with('status', 'Problems uploading the image!');
            }
        } else {
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

            $service->find($id)->update($validator->validated());
            return redirect()->route('services')->with('status', 'Successfully updated!');
        }
    }
    /**
     * register icons
     */
    public function registerIcon(Request $request)
    {
        $rulesFormOne = [
            'icon'          => 'required|min:3',
            'text'          => 'required|min:5',
            'service_id'    => 'required|min:1'
        ];

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('services')->withErrors($validator)->withInput();
        }

        ServiceComplement::create($validator->validated());
        return redirect()->route('services')->with('status', 'Successfully updated!');
    }

    /**
     * edit icons service
     */
    public function editIcon($id, Request $request)
    {
        $this->array['data']['icon'] = ServiceComplement::find($id);
        $this->array['path'] = 'service-icon';

        return view('admin.home', $this->array);
    }

    /**
     * update icon
     */
    public function updateIcon($id, Request $request)
    {
        $rulesFormOne = [
            'icon'          => 'required|min:3',
            'text'          => 'required|min:5'
        ];

        $validator = Validator::make($request->all(), $rulesFormOne);

        if($validator->fails()) {
            return redirect()->route('services.icon', [$id])->withErrors($validator)->withInput();
        }

        ServiceComplement::find($id)->update($validator->validated());
        return redirect()->route('services.icon', [$id])->with('status', 'Successfully updated!');
    }
}
