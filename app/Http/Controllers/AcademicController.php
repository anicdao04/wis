<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Acad_carouselCrudController;
use App\Http\Controllers\SocialskillCrudController;

use App\Models\Socialskill;
use App\Models\Acad_carousel;
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
        $this->data['title'] = $page[0]->title;  
        // $this->data['page'] = $page->withFakes();
        // $this->data['articles'] = Article::limit(6)->orderBy('updated_at','desc')->get();
        $this->data['socialskills'] = Socialskill::get();
        $this->data['acad_carousels'] = Acad_carousel::get();
        $this->data['menu_items'] = MenuItem::getTree();
        $this->data['pages'] = Page::get();

        
        // dd()
        return view('pages.academics', $this->data);
    }
}
