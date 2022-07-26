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
use App\Models\Test;
use App\Models\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use phpDocumentor\Reflection\Types\Boolean;
use PhpParser\Node\Expr\AssignOp\Div;
use PhpParser\Node\Expr\BinaryOp\Smaller;

class PageController extends Controller
{

    public function index()
    {
        $pages = Page::all();
        return view('/main', ['pages' => $pages]);
    }

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



        // $color = Color::create([
        //     'code' => $request->code
        // ]);

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

        $color = $this->storeColor($request->code);
        if($color)
        $data = array_merge($data, ['code' => $color->id]);

        $small_title = $this->storeSmallTitle($request->small_title_content);
        if ($small_title)
        $data = array_merge($data, ['small_title_id' => $small_title->id]);

        $paragraph = $this->storeParagraph($request->paragraph_content);
        if($paragraph)
        $data = array_merge($data, ['paragraph_id' => $paragraph->id]);

        $title = $this->storeTitle($request->title_content);
        if($title)
        $data = array_merge($data, ['title_id' => $title->id]);

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

    public function storeColor($color_code): Color | bool
    {
        if ($color_code) {
            $color = Color::create([
                'code' => $color_code
            ]);
            return $color;
        } else return false;
    }

    public function storeSmallTitle($small_title_content): Smalltitle | bool
    {
        if ($small_title_content) {
            $small_title = Smalltitle::create([
                'small_title_content' => $small_title_content
            ]);
            return $small_title;
        } else return false;
    }

    public function storeTitle($title_content): Title | bool
    {
        if ($title_content) {
            $title = Title::create([
                'title_content' => $title_content
            ]);
            return $title;
        } else return false;
    }

    public function storeParagraph($paragraph_content): Paragraph | bool
    {
        if ($paragraph_content) {
            $paragraph = Paragraph::create([
                'paragraph_content' => $paragraph_content
            ]);
            return $paragraph;
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

    public function test()
    {
        // $page_name = 'main';
        $page= Page::all()->where('name', 'Accueil')->first();
        $sections = Section::where('page_id', $page->id)->with('divisions')->get();
        // dd($sections);
        // $divisions = Title::with('divisions')->where('titles.id', '2')->get();
        // $divisions = Division::with('titles')->get();
        // dd($divisions);
        // $divisions = Division::join('titles', 'titles.id', '=', 'divisions.title_id')
        // ->join('small_titles', 'small_titles.id', '=', 'divisions.small_title_id')
        // ->join('paragraphs', 'paragraphs.id', '=', 'divisions.paragraph_id')
        // ->join('buttons', 'buttons.id', '=', 'divisions.button_id')
        // ->join('liens', 'liens.id', '=', 'divisions.lien_id')
        // ->join('images', 'images.id', '=', 'divisions.image_id')->get();
        foreach ($sections as $section) {
            // $divisions = Division::where('section_id', $section->id)->with('titles');
            $titles = Title::with('divisions')->get();
            dd($titles);
        };
        // dd($divisions);
        return view('pages.test', ['page' => $page, 'sections' => $sections]);
    }

}
