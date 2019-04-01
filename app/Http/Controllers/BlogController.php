<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; //penggunaan database
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller

{
   public function index()
   {

      //insert biasa
      // $blog = new Blog;
      // $blog->title = 'Halo Dunia';
      // $blog->description = 'Isi dari dunia ini adalah benda';
      // $blog->save();

      //insert mass assignment
      // Blog::create([
      //    'title'=> 'Halo Indonesia 3',
      //    'description' => 'Isi dari Indonesia ini adalah politikus 2',
      //    'created_at' => '2019-02-28 08:50:19',
      //    'updated_at' => '2019-02-28 08:50:19',

      // ]);

      // //update
      // $blog = Blog::where('title','Halo Dunia')->first(); //untuk mengganti semua first diganti all
      // $blog->title = 'Ini Timezone';
      // $blog->save();
      // // dd($blog);

      //update mass assignment
      // Blog::find(4)->update([
      //    'title' => 'Red Zone',
      //    'description' => 'PD95T',
      // ]);

      //delete
      // $blog = Blog::find(4);
      // $blog->delete();

      //delete (destroy)
      // Blog::destroy(2);

      //delete (destroy array)
      // Blog::destroy([3, 5]);

      //soft deletes
      // $blog = Blog::find(1);
      // $blog->delete();

      //return soft deletes
      // Blog::withTrashed()->restore();

      //tampilkan semua bersama sampah / soft deletes
      // $blogs = Blog::withTrashed()->get();

      $blogs = Blog::all();
      // dd($blogs);

    return view ('blog/home', ['blogs' => $blogs]);
   }
 
   public function show($id)
      {

      $blog = Blog::find($id);

      if(!$blog)
         abort(404);

       return view ('blog/single', ['blog' => $blog]);
   }

   //-----CREATE

   public function create()
   {
      return view ('blog/create'); //membuka file view blog/create
   }

   public function store(Request $request)
   {

      //validation
      //error dari validasi akan ditampilkan di view return awal sebelum di acc
      $this->validate($request, [
         'title'       => 'required|min:5|max:20', //harus diisi minimal 5 huruf dan maksimal 10 huruf
         'description' => 'required|min:5',
      ]);

      $blog = new Blog;
      $blog->title = $request->title;
      $blog->description = $request->description;
      $blog->save();

      return redirect('blog'); //kembali ke file view blog
   }

   //-----UPDATE

   public function edit($id)
      {

      $blog = Blog::find($id);

      // if(!$blog)
      //    abort(404);

       return view ('blog/edit', ['blog' => $blog]);
   }

   public function update(Request $request, $id)
   {
      $blog = Blog::find($id); //untuk menemukan sesuai id
      $blog->title         = $request->title; //request adalah apa yang kita inputkan dari root edit
      $blog->description   = $request->description;
      $blog->save();

      return redirect('blog/'. $id ); //kembali ke file view blog
   }

   public function destroy($id)
   {
      $blog = Blog::find($id);
      $blog->delete();

      return redirect('blog');
   }

}
