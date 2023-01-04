<?php

namespace App\Http\Controllers;

use App\Models\CategoryRecruitment;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    //

    public function index()
    {
        // dd("ok");
        $data = CategoryRecruitment::get();

        return view('pages.back.recruitment.index', [
            'data' => $data
        ]);
    }

    public function category()
    {
        $data = CategoryRecruitment::get();
        return view('pages.back.recruitment.category', [
            'data' => $data
        ]);
    }
    public function categoryPage()
    {
        return view('pages.back.recruitment.create');
    }
    public function categoryStore(Request $request)
    {
        // 
        // dd($request->all());
        CategoryRecruitment::create([
            'category' => $request->category,
        ]);

        return redirect('admin/category-recruitment');
    }
}
