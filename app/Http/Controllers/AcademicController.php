<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;
use Backpack\MenuCRUD\app\Models\MenuItem;

class AcademicController extends Controller
{
	public function index($slug)
    {
		$page = Page::where('slug', '=', 'academic/'. $slug)->get();
        if (!$slug)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }
        // $this->data['fabout'] = Page::select('template','name')->get();
        // $this->data['facad'] = Page::select('template','name')->get();
        // $this->data['fadd'] = Page::select('template','name')->get();
        // $this->data['title'] = $page[0]->title;
        // $this->data['page'] = $page->withFakes();
        // $this->data['articles'] = Article::limit(6)->orderBy('updated_at','desc')->get();
        $this->data['menu_items'] = MenuItem::getTree();
        $this->data['page'] = $page;

        
        // dd()
        return view('pages.academics', $this->data);
    }
}
