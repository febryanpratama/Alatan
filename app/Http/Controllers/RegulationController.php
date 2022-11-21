<?php

namespace App\Http\Controllers;

use App\Models\Regulation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Auth;

class RegulationController extends Controller
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
        //
        $data['regulations'] = Regulation::all();
        return view("pages.back.regulation.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.back.regulation.add');
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
            "year" => "required",
            "type" => "required",
            "entity" => "required",
            "file" => "required|mimes:pdf|max:10000",
        ]);

        $fileName = null;

        if($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('file')->move(public_path('files'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('files/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
        }

        $input = array_merge($request->except('_token'), ['file' => $fileName]);

        $regulations = Regulation::insert($input);
        return redirect()->route('regulations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regulation  $regulation
     * @return \Illuminate\Http\Response
     */
    public function show(Regulation $regulation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regulation  $regulation
     * @return \Illuminate\Http\Response
     */
    public function edit(Regulation $regulation)
    {
        //
        $data['regulation'] = Regulation::findOrFail($regulation->id);
        return view('pages.back.regulation.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regulation  $regulation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regulation $regulation)
    {
        //
        $validator = Validator::make($request->all(), [
            "title" => "required",
            "year" => "required",
            "type" => "required",
            "entity" => "required",
            "file" => "required|mimes:pdf|max:10000",
        ]);

        $input = $request->except(['_token', '_method']);

        if($request->hasFile('file')) {
            $originName = $request->file('file')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('file')->move(public_path('files'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('files/'.$fileName); 
            $msg = 'Image uploaded successfully'; 

            $input = array_merge($input, ['file' => $fileName]);
        }

        $regulations = Regulation::findOrFail($regulation->id)->update($input);
        return redirect()->route('regulations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regulation  $regulation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regulation $regulation)
    {
        //
        $delete = Regulation::findOrFail($regulation->id)->delete();
        return redirect()->route('regulations.index');
    }
}
