<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ckeditor(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move('images', $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully '.$url; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $data['posts'] = Post::orderBy('created_at', 'DESC')->get();
        return view("pages.back.posts.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['categories'] = Category::all();
        return view('pages.back.posts.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "keywords" => "required",
            "category_id" => "required|integer",
            "thumbnail" => "required",
            "file" => "required|mimes:jpg,png,jpeg|max:10000"
        ]);

        if($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('file')->move('images/thumbnail', $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/thumbnail/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
        }

        $post = new Post;
        $post->title = $request->title;
        $post->user_id = Auth::user()->id;
        $post->slug = Str::slug($request->title);
        $post->keywords = $request->keywords;
        $post->content = $request->content;
        $post->thumbnail = $fileName;
        $post->category_id = $request->category_id;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['categories'] = Category::all();
        $data['post'] = $post;
        return view('pages.back.posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $rules = [
            "title" => "required",
            "keywords" => "required",
            "category_id" => "required|integer",
            "thumbnail" => "required",
        ];

        if($request->hasFile('file')) {
            $rules['file'] = "required|mimes:jpg,png,jpeg|max:10000";
        }

        $validator = Validator::make($request->all(), $rules);

        

        $update = Post::find($post->id);

        if($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('file')->move('images/thumbnail', $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/thumbnail/'.$fileName); 
            $msg = 'Image uploaded successfully'; 

            $update->thumbnail = $fileName;
        }
        
        $update->title = $request->title;
        $update->slug = Str::slug($request->title);
        $update->keywords = $request->keywords;
        $update->content = $request->content;
        $update->category_id = $request->category_id;
        $update->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $delete = Post::findOrFail($post->id)->delete();
        return redirect()->route('posts.index');
    }
}
