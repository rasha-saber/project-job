<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Traits\UploadFileTrait;
use App\Models\Category;
class jobsController extends Controller
{
     use UploadFileTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('category')->get();
        return view('jobs',  compact('jobs'));
    }

    // //
    // public function indexA()
    // {
    //     return view('about');
    // }
    // //
    // public function indexB()
    // {
    //     return view('category');
    // }
    // //
    // public function indexC()
    // {
    //     return view('job-detail');
    // }
    // //
    // public function indexD()
    // {
    //     return view('job-list');
    // }
    // //
    // public function indexF()
    // {
    //     return view('testimonial');
    // }
    // //
    // public function indexG()
    // {
    //     return view('contact');
    // }
    // //
    // public function indexH()
    // {
    //     return view('404');
    // }
    //
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::all();
        $categories = Category::select('id', 'category_name')->get();
        return view('Add_job', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_nature' => 'required|string',
            'Vacancy' => 'required|integer|max:255',
            'description' => 'required|string|max:1000',
            'salary' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        $data['published'] = isset($request->published);
        $data['img'] = $this->uploadFile($request->img, 'assets/img/job/');



        Job::create($data); 
        // return redirect()->route('jobs');
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jobs = Job::findOrFail($id);
        return view('job-detail', compact('jobs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jobs = Job::findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view('Edit_job', compact('jobs', 'categories'));
       // $categories = Category::all();
    //    $categories = Category::select('id', 'category_name')->get();
    //    return view('Edit_job', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_nature' => 'required|string',
            'Vacancy' => 'required|integer|max:255',
            'description' => 'required|string|max:1000',
            'salary' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);
        $data['published'] = isset($request->published);
       

///
        if ($request->hasFile('img')) {
            $data['img'] = $this->uploadFile($request->img, 'assets/img/job/');
        }
        Job::where('id', $id)->update($data);

        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(string $id)
    // {
    //     Job::where('id', $id)->delete();
        
    //     return redirect()->route('jobs');
    // }

    
    // public function showDeleted()
    // {
       
    //     $jobs = Job::onlyTrashed()->get();
    //     return view('trashedCars', compact('jobs'));
       
        
    // }



    
    // public function restore(string $id)
    // {
        
    //     Job::where('id', $id)->restore();
       

    //     return redirect()->route('jobs.showDeleted');
    // }

    // public function forceDelete(Request $request, string $id)
    // {
    //     // return "delete page";
    //     Job::where('id', $id)->forceDelete();
    //     return redirect()->route('jobs');
    // }
}
