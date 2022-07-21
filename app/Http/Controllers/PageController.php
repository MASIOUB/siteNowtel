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
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use phpDocumentor\Reflection\Types\Boolean;
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
        $page->save();
        return back();
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
        $data = [
            'type' => $request->type,
            'section_id' => $request->section_id
        ];



        $color = Color::create([
            'code' => $request->code
        ]);

        if ($request->title_content) {
            $title = Title::create([
                'title_content' => $request->title_content,
                'color_content' => $request->color_content,
                'color_id' => $color->id
            ]);
            // array_push($data, ['title_id' => $title->id]);
            $data = array_merge($data, ['title_id' => $title->id]);
        }

        if ($request->small_title_content) {
            $small_title = Smalltitle::create([
                'small_title_content' => $request->small_title_content
            ]);
            $data = array_merge($data, ['small_title_id' => $small_title->id]);
        }

        if ($request->image_name &&  $request->hasfile('image_name')) {

            // if ($request->hasfile('image_name')) {
            $image = new Image();
            $file = $request->file('image_name');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/', $filename);
            $image->image_name = $filename;
            $image->save();
            // }
            $data = array_merge($data, ['image_id' => $image->id]);
        }


        if ($request->paragraph_content) {
            $paragraph = Paragraph::create([
                'paragraph_content' => $request->paragraph_content
            ]);
            $data = array_merge($data, ['paragraph_id' => $paragraph->id]);
        }

        // if ($request->button_content) {
        //     $button = Button::create([
        //         'button_content' => $request->button_content,
        //         'button_link' => $request->button_link
        //     ]);
        // }

        // if ($request->link_content) {
        //     $link = Lien::create([
        //         'link_content' => $request->link_content,
        //         'link' => $request->link
        //     ]);
        // }
        $button = $this->storeButtonContent($request->button_content, $request->button_link);
        if ($button)
        $data = array_merge($data, ['button_id' => $button->id]);

        $link = $this->storeLink($request->link_content, $request->link);
        if ($link)
        $data = array_merge($data, ['lien_id' => $link->id]);



             $division = Division::create(
                $data
                //[
            //     'type' => $request->type,
            //     'title_id' => $title->id,
            //     'small_title_id' => $small_title->id,
            //     'paragraph_id' => $paragraph->id,
            //     'button_id' => $button->id,
            //     'lien_id' => $link->id,
            //     'image_id' => $image->id,
            //     'section_id' => $request->section_id
            //]
            );


        return back();
    }
    public function storeLink($link_content, $link): Lien | bool
    {
        if ($link_content) {
            $link = Lien::create([
                'link_content' => $link_content,
                'link' => $link
            ]);
            return $link;
        } else return false;
    }
    public function storeButtonContent($button_content, $button_link): Button | bool
    {
        if ($button_content) {
            $button = Button::create([
                'button_content' => $button_content,
                'button_link' => $button_link
            ]);
            return $button;
        } else
            return false;
    }

    public function main()
    {
        return view('pages.main');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function nouveautes()
    {
        return view('pages.nouveautes');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function carrieres()
    {
        return view('pages.carrieres');
    }

    public function faq()
    {
        return view('pages.faq');
    }

}
