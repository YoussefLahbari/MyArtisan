<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminLocation extends Controller
{
    public function index()
    {
        $data = Location::all();
        return view('admin.location', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.location_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            "Name" => "required|min:3|max:20",
            "Adress" => "required|min:4",
            "CodePostal" => "required|min:4"
        ]);
        Location::create($result);
        return redirect()->route('admin.location.index')->with('msg', 'The location was added successfuly !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return redirect()->route('admin.location.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = location::findOrFail($id);
        return view('admin.location_edit', ['data' => $data]);
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
        DB::table('locations')->where('id', $id)->update($result);
        return redirect()->route('admin.location.index')->with('msg', 'The location was Updated successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Location::destroy($id);
        return redirect()->route('admin.location.index')->with('msg', 'The location was Deleted successfuly !');
    }
}
