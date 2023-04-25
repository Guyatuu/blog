<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogcategories;

class blogcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogcategories=blogcategories::all();
        return $blogcategories;
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
        $newcategories =blogcategories::create(['name' => $request->name]);
        return response()->json($newcategories);

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
    public function update(Request $request,$id)
    {
        $blogcategories=blogcategories::find($id);
        $blogcategories->name=$request->name;
        $blogcategories=$request->all();
        return response()->json($blogcategories);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogcategories=blogcategories::findorFail($id);
        $blogcategories->delete();
        // return response()->json($blogcategories);
        return \Response::json(['message'=>'name deleted successfully']);
    }
}
