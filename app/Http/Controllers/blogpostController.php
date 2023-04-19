<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogpost;

class blogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     * this is used for fetching data from the database
     */
    public function index() 
    {
        //1. fetching the latest post n specify the no of posts per page
    //    $post= blogpost::latest()->paginate(5);
       //fetching all the posts(all & get)
       $post = blogpost::all();
    //    $post = blogpost::get();
       //fetching the first post or a specific post
    //    $post = blogpost::first();
    return $post;
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
