<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminCategories extends Controller
{
    public function index()
    {
        $data = Categorie::all();
        return view('admin.categorie', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.categorie_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:3|max:20",
            "description" => "required|min:4"
        ]);
        Categorie::create([
            'Name' => $request->name,
            'Description' => $request->description
        ]);
        return redirect()->route('admin.categorie.index')->with('msg', 'The categorie was added successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = categorie::findOrFail($id);
        return view('admin.categorie_show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = categorie::findOrFail($id);
        return view('admin.categorie_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|min:3|max:20",
            "description" => "required|min:4"
        ]);
        DB::table('categories')->where('id', $id)->update([
            'Name' => $request->name,
            'Description' => $request->description,
        ]);
        return redirect()->route('admin.categorie.index')->with('msg', 'The categorie was Updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categorie::destroy($id);
        return redirect()->route('admin.categorie.index')->with('msg', 'The categorie was Deleted successfuly !');
    }
}
