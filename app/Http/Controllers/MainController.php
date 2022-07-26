<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Test;
use App\Models\Title;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $page_name = 'main';
        // $page = Page::all()->where('name', $page_name)->first();
        // $colors = Color::all();
        // $page = Page::where('name', $page_name)->first();
        // $sections = Section::all()->join('sections', 'sections.page_id', '=', 'pages.id');
        // var_dump($pages);
        // die();
        // $test = Test::all()->where('title', 'xx')->first();
        // return view('/' . $page->name, ['page' => $page, 'colors' => $colors, 'test' => $test]);
        return view('main')
            // ->with('content', Test::orderBy('created_at', 'desc')->first()->content)
            // ->with('title', Test::orderBy('created_at', 'desc')->first()->title)
            ->with('pages', Page::all())
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $test = Test::create([
        //     'title' => $request->title,
        //     'content' => $request->content
        // ]);

        // dd($test);

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
