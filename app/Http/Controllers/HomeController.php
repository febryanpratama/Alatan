<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryRecruitment;
use App\Models\Post;
use App\Models\Regulation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['posts'] = Post::orderBy('created_at', 'DESC')->limit(3)->get();
        return view("pages.front.index", $data);
    }
    public function blog()
    {
        $data['not_change'] = true;
        $data['posts'] = Post::orderBy('created_at', 'DESC')->paginate(3);
        $data['categories'] = Category::all();
        $data['total_post'] = 0;

        foreach ($data['categories'] as $key => $category) {
            $data['categories'][$key]->count = Post::where("category_id", $category->id)->count();
            $data['total_post'] += $data['categories'][$key]->count;
        }

        return view("pages.front.blog", $data);
    }
    public function blogsearch(Request $request)
    {
        if ($request->has('keywords') && $request->has('_token') && $request->keywords !== null && $request->_token !== null) {
            $data['posts'] = Post::where("title", "like", "%" . $request->keywords . "%")->orWhere("content", "like", "%" . $request->keywords . "%")->orderBy('created_at', 'DESC')->paginate(999);
            $data['categories'] = Category::all();
            $data['total_post'] = 0;

            foreach ($data['categories'] as $key => $category) {
                $data['categories'][$key]->count = Post::where("category_id", $category->id)->count();
                $data['total_post'] += $data['categories'][$key]->count;
            }

            return view("pages.front.blog", $data);
        } else {
            return abort(404);
        }
    }
    public function blogdetail($slug)
    {
        $post = Post::where("slug", $slug)->orderBy('created_at', 'DESC')->firstOrFail();
        $data['post'] = $post;
        $data['categories'] = Category::all();
        $data['total_post'] = 0;

        $post->visited = $post->visited + 1;
        $post->save();

        foreach ($data['categories'] as $key => $category) {
            $data['categories'][$key]->count = Post::where("category_id", $category->id)->count();
            $data['total_post'] += $data['categories'][$key]->count;
        }

        $split = explode(",", $data['post']->keywords);
        foreach ($split as $key => $keyword) {
            # code...
            $data['keywords'][$key] = $keyword;
        }

        // if(count($data['post']) == 0){
        //     return abort(404);
        // }

        $data['visited'] = $post->visited;

        return view("pages.front.blog_detail", $data);
    }
    public function regulation()
    {
        $data['regulations'] = Regulation::all();
        return view("pages.front.regulation", $data);
    }
    public function blogcategories($slug)
    {
        $data['not_change'] = true;
        $template = "pages.front.blog2";
        if ($slug == "all") {
            $data['posts'] = Post::orderBy('created_at', 'DESC')->paginate(3);
            $data['selected_category'] = "All";
        } else {
            $find = Category::where("slug", $slug)->count();
            if ($find > 0) {
                $category = Category::where("slug", $slug)->first();
                $data['posts'] = Post::where("category_id", $category->id)->orderBy('created_at', 'DESC')->paginate(3);
                $data['selected_category'] = $category->name;

                if ($category->template == '1') {
                    $template = "pages.front.blog";
                }
            } else {
                abort(404);
            }
        }
        $data['categories'] = Category::all();
        $data['total_post'] = 0;

        foreach ($data['categories'] as $key => $category) {
            $data['categories'][$key]->count = Post::where("category_id", $category->id)->count();
            $data['total_post'] += $data['categories'][$key]->count;
        }

        return view($template, $data);
    }

    public function recruitment()
    {
        $data = CategoryRecruitment::get();
        return view('pages.front.recruitment', [
            'data' => $data
        ]);
    }
}
