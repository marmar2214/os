<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
       // dd($categories);
        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd ($request);

        //Validation
        $request->validate([
            'name'=>'required',
            'photo'=>'required',
        ]);

        //if include file, upload
        //file upload
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/categoryimg/'),$imageName);
        $myfile = 'backend/categoryimg/'.$imageName;

        //Data insert
        $category = new Category;
        $category->name = $request->name;
        $category->photo = $myfile;
        $category->save();

        //Redirect
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('backend.categories.edit',compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        // Validation
        $request->validate([
            'name'=> 'required',
            'photo'=>'sometimes',
        ]);
        // if include file, upload
        if ($request->hasfile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/categoryimg'),$imageName);
            $myfile = 'backend/categoryimg/'.$imageName;
            File::delete($imageName);
        }else{
            $myfile=$request->oldphoto;
        }

        //Data Update
        $brand= Category::find($id);
        $brand->name = $request->name;
        $brand->photo = $myfile;
        $brand->save();

        // Redirect
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
}
