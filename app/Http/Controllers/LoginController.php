<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\ConfigMetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $array = [];

    public function __construct()
    {
        $this->array['data'] = [];
        $this->array['data']['config'] = Config::find(1);

    }

    public function index(Request $request)
    {
        $this->array['metas'] = ConfigMetas::all();

        return view('pages.login', $this->array);
    }

    /**
     * authenticate
     */
    public function authenticate(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        if (Auth::attempt($creds)) {
            // echo 'OK';
            // var_dump(Auth::user());
            // exit;
            return redirect()->route('admin');
        } else {
            return redirect()->route('login')->with(
                "warning", "Invalid email and/or password!"
            );
        }
    }
}
