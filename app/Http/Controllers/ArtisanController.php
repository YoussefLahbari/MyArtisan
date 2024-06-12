<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $artisans = Artisan::with('previousWorks')->get();
        $artisans = Artisan::with('previousWorks')->paginate(4);
        // or
        //$artisans = Artisan::paginate(4);

        $users = User::whereIn('id', $artisans->pluck('user_id'))->get();
        return view('home', compact('artisans', 'users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
