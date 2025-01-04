<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('pages.menu.menu', compact('menus'));
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
        // Validate the incoming request data
        $validated = $request->validate([
            'link' => 'required|string|max:255',
            'name' => 'required|string|max:255', // Validate 'menu'
        ]);

        // Save the data to the database
        Menu::create([
            'link' => $validated['link'], // Correct key for 'link'
            'name' => $validated['name'], // Map 'menu' input to 'name'
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Menu added successfully.');
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
     */    public function destroy(string $id)
    {
        $menuID = menu::findOrFail($id);

        $menuID->delete();

        return redirect()->back()->with('delete', 'Menu deleted successfully.');
    }
}
