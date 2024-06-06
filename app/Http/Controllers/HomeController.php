<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        $user = User::find(FacadesAuth::user()->id);
        if($user->isArtisan()){
            $artisan = Artisan::where('user_id', $user->id)->get();
            if(count($artisan) > 0){
                // ArtisanController(Show)
                return view('Kablaoui.Profile');
            }
            // ArtisanController(Create)
            return view('Kablaoui.Create_Profile');
        }
        // Client
        return redirect()->route('artisan.index');
    }
}
