<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Photo:: all();
        return view('resource_crud.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resource_crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        // ]);
         // Store the photo
         $data = new Photo();

        $data->name = $request->input('name');
        $data->phone = $request->input('phone');
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image -> getClientOriginalExtension();
            $image_name = time().'.'.$ext;
            $image->move('storage/image', $image_name);

            $data->image = $image_name;

        }

        $data->save();
        return redirect('photos')-> withSuccess('Added');


        // without photo
        // Photo :: create($request->all());
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
        Photo :: destroy($id);
        return redirect('photos')-> withSuccess('deleted');
    }
}
