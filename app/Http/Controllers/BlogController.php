<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index', ['blogs' => Blog::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all(), Auth::user(), Auth::id());


        // Create new instance of Blog
        $blog = Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => Auth::id(),
        ]);
       return redirect()->route('blog.index')->with('success', 'blog succesvol aangemaakt.');
    }

   public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id'    => 'required',
            'title' => 'required',
            'body'  => 'required',
        ]);    
        
        //update
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        if($request->input('type') != 'empty'){
            $blog->type = $request->input('type');
        }
        $blog->save();
        
        return redirect('/')->with('success', 'blog Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'blog succesvol verwijderd.');
    }
}
