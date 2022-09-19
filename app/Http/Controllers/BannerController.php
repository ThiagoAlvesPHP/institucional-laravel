<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Config;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
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

    public function index(Request $request)
    {
        $this->array['data']['banner'] = Banner::find(1);

        return view('admin.home', $this->array);
    }

    /**
     * update banner
     */
    public function update($id, Request $request)
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
}
