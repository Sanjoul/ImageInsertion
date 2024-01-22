<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = new Admin;
        $data->title = trim($request->title);
        $data->description = trim($request->description);
        $data->title = trim($request->title);
        if (!empty($request->file('image'))) {
            $file = $request->file('image');
            $randomString = Str::random(5);
            $image_path = $randomString . '.' . $file->getClientOriginalExtension();
            $file->move('img/', $image_path);
            $data->image_path = $image_path;
        }
        $data->save();
        return redirect()->route('admins.index')->with('success', 'Uploaded Successfully');
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
    public function destroy(Admin $admin)
    {
    }
}