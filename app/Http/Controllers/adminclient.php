<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class adminclient extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('usertype', 'Client')->get();
        return view('admin.client', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.client_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            "name" => "required|min:3|max:20",
            "email" => "required|email|unique:users",
            "password" => "required|min:8|max:20",
        ]);
        User::create($result);
        return redirect()->route('admin.client.index')->with('msg', 'The Client was added successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::findOrFail($id);
        return view('admin.client_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        return view('admin.client_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $a = User::find($id);
        $request->validate([
            "name" => "required|min:3|max:20",
            "email" => ["required", "email", Rule::unique('users')->ignore($id)],
            "password" => "nullable|min:8|max:20"
        ]);
        $pass = $request->password == '' ? $a->password : Hash::make($request->password);
        DB::table('users')->where('id', $id)->update([
            'email' => $request->email,
            'password' => $pass,
            'name' => $request->name,
        ]);
        return redirect()->route('admin.client.index')->with('msg', 'The Client was Updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect()->route('admin.client.index')->with('msg', 'The Client was Deleted successfuly !');
    }
}
