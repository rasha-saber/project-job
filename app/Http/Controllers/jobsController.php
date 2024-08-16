<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    //
    public function indexA()
    {
        return view('about');
    }
    //
    public function indexB()
    {
        return view('category');
    }
    //
    public function indexC()
    {
        return view('job-detail');
    }
    //
    public function indexD()
    {
        return view('job-list');
    }
    //
    public function indexF()
    {
        return view('testimonial');
    }
    //
    public function indexG()
    {
        return view('contact');
    }
    //
    public function indexH()
    {
        return view('404');
    }
    //
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
