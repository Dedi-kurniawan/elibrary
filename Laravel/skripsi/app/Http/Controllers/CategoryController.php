<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Faculty;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Category::all();
        $faculty = Faculty::all();
        return view('module.category.index', compact('kategori', 'faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
    {
        $faculty = Faculty::all();
        $kategori = Category::all();//->where('faculty_id', '$id');
       return view('module.category.create', compact('kategori', 'faculty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = new Category();
        $this->validate($request,
            [
            'kategory'        =>'required ',
            'faculty_id'      =>'required '        
            ]
            );

      $data= $request->all();
      Category::create($data);
      return redirect( route('category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
      $faculty = Faculty::all();
      $kategori = Category::find($id);
      return view('module.category.edit', compact('kategori', 'faculty'));
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
        $kategori = Category::find($id);
        $this->validate($request,
            [
            'kategory'        =>'required ',
            'faculty_id'      =>'required '        
            ]
            );

      $data = $request->all();
      $kategori->update($data);
      return redirect( route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $kategori = Category::find($id);
      $kategori->delete();       
      return redirect( route('category.index'));
    }
}
