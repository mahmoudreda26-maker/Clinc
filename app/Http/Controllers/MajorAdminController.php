<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MajorAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $majors = Major::paginate(5);
        return view('admin.pages.majors.major', compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.majors.create-major');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(CreateMajorRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['name']);

        Major::create($data);

        return redirect()->route('majors.index')->with('success', 'Created');
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
    public function edit(Major $major)
    {

        return view('admin.pages.majors.edit-major', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMajorRequest $request, Major $major)
    {
        $data = $request->validated();
        $major->update($data);
        return redirect()->route('majors.index')->with("success", " Major Update Successfuly");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        $major->delete($major);
        return redirect()->route('majors.index')->with("success", " Major Update Successfuly");
    }
}
