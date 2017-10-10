<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Faculty;
use App\Book;
use App\User;
use File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
        $user       = User::all();
        $faculty    = Faculty::all();
        $kategori   = Category::all();
        $book       = Book::all(); 
        return view('module.book.index', compact('kategori', 'faculty', 'book','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user       = User::all();
        $Faculty    = Faculty::all();
        $kategori   = Category::all();
        return View('module.book.create', compact('kategori', 'faculty', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,
            [
            'user_id'        =>'required ',
            'category_id'    =>'required ',  
            'kode'           =>'required ', 
            'judul'          =>'required ', 
            'deskripsi'      =>'required ',
            'cover'          =>'required|image|mimes:png,jpg,jpeg,gif,bmp',
            'author'         =>'required ',
            'file'           =>'required ',
            'type'           =>'required ',
            'status'         =>'required '
                  
            ]
            );
        $user_id     = Auth::user()->id;
        $category_id = $request->category_id;
        $judul       = $request->judul;
        $kode        = $request->kode;
        $deskripsi   = $request->deskripsi;
        //buat gambar
        $img_name = $request->file('cover')->getClientOriginalName(); 

        $filename = rand(11111111, 99999999). '.' . $img_name;
        // lalu proses gambar
        $img = Image::make($_FILES['cover']['tmp_name']);
        
        // melakukan resize jika width gambar lebih dari 800
        $img->resize(200, 150);
        
        // menentukan direktori tempat gambar akan disimpan
        $path_dir = base_path() . '/public/img/book/'.$filename;
        
        // upload ke direktori yang sudah ditentukan
        $img->save($path_dir);
        

        $author      = $request->author;
        $type        = $request->type;
        //pdf
        $file        = $request->file('file')->getClientOriginalName();
        $name_pdf = rand(11111111, 99999999). '.' . $file;
        $destination = base_path() . '/public/collect';
        $request->file('file')->move($destination, $name_pdf);
        $pdf['file'] = $file;

        $type        = $request->type;
        $status      = $request->status;

       


        Book::create(['user_id'=>Auth::user()->id,
                      'category_id'=>$category_id,
                      'kode'=>$kode,
                      'judul'=>$judul,
                      'deskripsi'=>$deskripsi,
                      'cover'=>$filename,
                      'author'=>$author,
                      'file'=>$name_pdf,
                      'type'=>$type,
                      'status'=>$status
                      
                     ]);
        return redirect( route('book.index'));
   }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faculty = Faculty::all();
        $kategori = Category::all();
        $book = Book::find($id); 
        return view('module.book.show', compact('kategori', 'faculty', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $book = Book::find($id);
      $gambar = base_path() . '/public/img/book/'.$book->cover;
      $pdf = base_path() . '/public/collect/'.$book->file;
      File::delete($gambar);
      File::delete($pdf);
      $book->delete();       
      return redirect( route('book.index'));
    }
}
