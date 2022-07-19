<?php

namespace App\Http\Controllers;

use App\Models\Button;
use App\Models\Division;
use App\Models\Page;
use App\Models\Color;
use App\Models\Image;
use App\Models\Lien;
use App\Models\Paragraph;
use App\Models\Section;
use App\Models\Smalltitle;
use App\Models\Title;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use PhpParser\Node\Expr\BinaryOp\Smaller;

class PageController extends Controller
{
    public function getPage($page_id)
    {
        $page = Page::find($page_id);
        $sections = Section::all()->where('page_id', $page_id);

        return view('page', ['page' => $page, 'sections' => $sections]);
    }

    public function storePage(Request $request)
    {
        $page = new Page();
        $page->name = $request['name'];
        $page->url = $request['url'];
    }

    public function getSection($section_id)
    {
        $section = Section::find($section_id);

        return view('section', ['section' => $section]);
    }

    public function storeSection(Request $request)
    {
        Section::create([
            'name' => $request->name,
            'page_id' => $request->page_id
        ]);
        // $section = new Section();
        // $section->name = $request['name'];
        // $section->page_id = $page_id;
        return back();
    }

    public function storeDivision(Request $request)
    {
        // $color = new Color();
        // $color->code = $request['code'];

        // $title = new Title();
        // $title->title_content = $request['title_content'];
        // $title->title_color_content = $request['color_content'];
        // $title->title_position = $request['position'];
        // $title->color_id = $request['color_id'];

        // $small_title = new Smalltitle();
        // $small_title->small_title_content = $request['small_title_content'];

        // $paragraph = new Paragraph();
        // $paragraph->paragraph_content = $request['paragraph_content'];



        // $button = new Button();
        // $button->button_content = $request['button_content'];
        // $button->button_link = $request['button_link'];

        // $link = new Lien();
        // $link->link_content = $request['link_content'];
        // $link->link = $request['link'];

        // $division = new Division();
        // $division->type = $request['type'];
        // $division->title_id = $title['id'];
        // $division->small_title_id = $small_title['id'];
        // $division->image_id = $image['id'];
        // $division->paragraph_id = $paragraph['id'];
        // $division->button_id = $button['id'];
        // $division->lien_id = $link['id'];
        // $division->section_id = $section_id;
        $color = Color::create([
            'code' => $request->code
        ]);

        if($request->title_content){
            $title = Title::create([
                'title_content' => $request->title_content,
                'color_content' => $request->color_content,
                'color_id' => $color->id
            ]);
        }

        if($request->small_title_content){
            $small_title = Smalltitle::create([
                'small_title_content' => $request->small_title_content
            ]);
        }

        if($request->image_name){
            $image = new Image();
        if ($request->hasfile('image_name')) {
            $file = $request->file('image_name');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/', $filename);
            $image->image_name = $filename;
        }
        $image->save();
        }


        if($request->paragraph_content){
            $paragraph = Paragraph::create([
                'paragraph_content' => $request->paragraph_content
            ]);
        }

        if($request->button_content){
            $button = Button::create([
                'button_content' => $request->button_content,
                'button_link' => $request->button_link
            ]);
        }

        if($request->link_content){
            $link = Lien::create([
                'link_content' => $request->link_content,
                'link' => $request->link
            ]);
        }


        $division = Division::create([
            'type' => $request->type,
            'title_id' => $title->id,
            'small_title_id' => $small_title->id,
            'paragraph_id' => $paragraph->id,
            'button_id' => $button->id,
            'lien_id' => $link->id,
            'image_id' => $image->id,
            'section_id' => $request->section_id
        ]);


            return back();
    }
}
