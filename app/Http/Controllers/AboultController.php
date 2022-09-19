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
    public function update($id, Request $request)
    {
        $aboult = Aboult::find($id);

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
                    unlink(public_path('assets/images/').$aboult->image);
                    // move image directory
                    $request->image->move(public_path('assets/images/'), $image);
                    $aboult->image = $image;
                    $aboult->save();

                    return redirect()->route('aboult')->with('status', 'Successfully updated!');
                } else {
                    return redirect()->route('aboult')->with('status', 'Extension invalid!');
                }
            } else {
                return redirect()->route('aboult')->with('status', 'Problems uploading the image!');
            }
        } else {
            $rulesFormOne = [
                'name'      => 'required|min:3',
                'text'     => 'required|min:30'
            ];

            $validator = Validator::make($request->all(), $rulesFormOne);

            if($validator->fails()) {
                return redirect()->route('aboult')->withErrors($validator)->withInput();
            }

            $aboult->find(1)->update($validator->validated());
            return redirect()->route('aboult')->with('status', 'Successfully updated!');
        }
    }
}
