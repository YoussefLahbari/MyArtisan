<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
class adminArtisan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Artisan::all();
        return view('admin.artisan', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.artisan_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:20",
            "email" => "required|email|unique:users",
            "password" => "required|min:8|max:20",
            "skills" => "required|min:3",
            "experience" => "required|integer",
            "description" => "required|string",
            "rating" => "required|numeric|between:0,10|regex:/^\d{1,2}(\.\d{1,2})?$/"
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype' => 'Artisan'
        ]);
        $id = User::latest()->first();
        Artisan::create([
            'Skills' => $request->skills,
            'Experience' => $request->experience,
            'Description' => $request->description,
            'ProfileImg' => '',
            'Rating' => $request->rating,
            'user_id' => $id->id
        ]);
        return redirect()->route('admin.artisan.index')->with('msg', 'The Artisan was added successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Artisan::findOrFail($id);
        return view('admin.artisan_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Artisan::findOrFail($id);
        return view('admin.artisan_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $a = Artisan::find($id);
        $request->validate([
            "name" => "required|min:3|max:20",
            "email" => ["required", "email", Rule::unique('users')->ignore($a->user->id)],
            "password" => "nullable|min:8|max:20",
            "skills" => "required|min:3",
            "experience" => "required|integer",
            "description" => "required|string",
            "rating" => "required|numeric|between:0,10|regex:/^\d{1,2}(\.\d{1,2})?$/"
        ]);
        $pass = $request->password == '' ? $a->user->password : Hash::make($request->password);
        DB::table('users')->where('id', $a->user->id)->update([
            'email' => $request->email,
            'password' => $pass,
            'name' => $request->name,
        ]);
        DB::table('artisans')->where('id', $id)->update([
            'Skills' => $request->skills,
            'Experience' => $request->experience,
            'Description' => $request->description,
            'Rating' => $request->rating,
        ]);
        return redirect()->route('admin.artisan.index')->with('msg', 'The Artisan was Updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id_user = Artisan::find($id)->user->id;
        Artisan::destroy($id);
        User::destroy($id_user);
        return redirect()->route('admin.artisan.index')->with('msg', 'The Artisan was Deleted successfuly !');
    }
}
