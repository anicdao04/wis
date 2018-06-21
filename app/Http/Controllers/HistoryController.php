<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HistorybannerCrudController;
use App\Http\Controllers\ContactCrudController;
use App\Http\Controllers\AboutcontentCrudController;

use App\Models\Contact;
use App\Models\About;
use App\Models\Aboutcontent;
use App\Models\Historybanner;
use Backpack\MenuCRUD\app\Models\MenuItem;
use Backpack\NewsCRUD\app\Models\Article;

class HistoryController extends Controller
{
    public function index()
    {

        // $this->data['fabout'] = Page::select('template','name')->get();
        // $this->data['facad'] = Page::select('template','name')->get();
        // $this->data['fadd'] = Page::select('template','name')->get();
        // $this->data['fabout'] = Page::select('template','name')->get();
        // $this->data['title'] = $page[0]->title;
        //$this->data['page'] = $page->withFakes();

        $this->data['contacts'] = Contact::get();
        $this->data['aboutcontents'] = Aboutcontent::get();
        $this->data['historybanners'] = Historybanner::get();
        $this->data['articles'] = Article::limit(3)->orderBy('updated_at','desc')->get();
        $this->data['menu_items'] = MenuItem::getTree();


        
        // dd()
        return view('pages.history', $this->data);
    }
}
