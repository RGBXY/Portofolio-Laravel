<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function home(){
        return view('welcome', [
            'blogs' => Blog::orderBy('id', 'desc')->get(),
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store( Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $newPost = Blog::create($data);

        return redirect('/');
    }

    public function update(Blog $blog, Request $request){
        $data = $request->validate([
            'judul' => 'required',
            'konten' => 'required',
        ]);

        $blog->update($data);

        return redirect('/');
    }

    public function destroy(Blog $blog, Request $request){
        $blog->delete();
        return redirect('/');
    }
}
