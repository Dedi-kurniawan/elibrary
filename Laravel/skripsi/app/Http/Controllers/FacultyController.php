<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Category;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculty = Faculty::all();
        $kategori = Category::all();
        return view('module.faculty.index', compact('faculty', 'kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $kategori = Category::all();//->where('faculty_id', '$id');
        $faculty = Faculty::all();
       return view('module.faculty.create', compact('kategori', 'faculty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faculty = new Faculty();
        $this->validate($request,
            [
            'kode_jurusan' =>'required ',
            'jurusan'      =>'required '        
            ]
            );

      $data= $request->all();
      Faculty::create($data);
      return redirect( route('faculty.index'));
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
      $kategori = Category::all();
      $faculty = Faculty::all();
      $jurusan = Faculty::find($id);
      return view('module.faculty.edit', compact('kategori', 'faculty', 'jurusan'));
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
        $faculty = Faculty::find($id);
        $this->validate($request,
            [
            'kode_jurusan' =>'required ',
            'jurusan'      =>'required '        
            ]
            );

      $data= $request->all();
      $faculty->update($data);
      return redirect( route('faculty.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $faculty = Faculty::find($id);
      $faculty->delete();       
      return redirect( route('faculty.index'));
    }
}
