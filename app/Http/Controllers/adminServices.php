<?php

namespace App\Http\Controllers;

use App\Models\Artisan;
use App\Models\Categorie;
use App\Models\Location;
use App\Models\Service;
use Illuminate\Http\Request;

class adminServices extends Controller
{
    public function index()
    {
        $data = Service::all();
        return view('admin.service', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categorie::all();
        $artisans = Artisan::all();
        $locations = Location::all();
        return view('admin.service_create',['categories' => $categories,'artisans' => $artisans,'locations' => $locations]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            "Title" => "required|min:3|max:20",
            "Description" => "required|min:4",
            "Price" => "required|numeric",
            "location_id" => "required|integer",
            "artisan_id" => "required|integer",
            "categorie_id" => "required|integer",
        ]);
        Service::create($result);
        return redirect()->route('admin.service.index')->with('msg', 'The service was added successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Service::findOrFail($id);
        return view('admin.service_show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = service::findOrFail($id);
        return view('admin.service_edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $result = $request->validate([
            "Name" => "required|min:3|max:20",
            "Adress" => "required|min:4",
            "CodePostal" => "required|min:4"
        ]);
        DB::table('services')->where('id', $id)->update($result);
        return redirect()->route('admin.service.index')->with('msg', 'The service was Updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::destroy($id);
        return redirect()->route('admin.service.index')->with('msg', 'The service was Deleted successfuly !');
    }
}
