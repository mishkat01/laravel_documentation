<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class Employees extends Controller
{
    function view(){
        $data = Employee:: all();
        return view("view",compact('data'));
    }
    function insert(){
        return view('insert');
    }
    function store_data(Request $req){
        $data = new Employee();

        $data->name = $req->input('name');
        $data->gender = $req->input('gender');
        $data->country = $req->input('country');

        //checkbox
        
        

        if($req->hasFile('image')){

            // default file saving
            // $path = $req->image->path();
            // $extension = $req->image->extension();
            // $path = $req->image->store('image');

            $image = $req->file('image');
            $ext = $image -> getClientOriginalExtension();
            $image_name = time().'.'.$ext;
            $image->move('storage/image', $image_name);

            $data->image = $image_name;

        }

        $data->save();
        return redirect('/');


    }
    function delete($id){
        Employee :: destroy($id);
        return redirect('/');
    }
    function edit($id){
        $data = Employee::Find($id);

        return view("edit",compact("data"));
   }
   function update(Request $req,$id){
        
   }


//    single action controller
//    for single action controllers, you do not need to specify a controller method in route. 
// php artisan make:controller ProvisionServer --invokable
//    public function __invoke()
//    {
//        // ...
//    }
}
