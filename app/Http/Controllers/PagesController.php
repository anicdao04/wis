<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ReviewcarouselCrudController;
use App\Http\Controllers\TestimonialCrudController;
use App\Models\Testimonial;

use App\Models\Reviewcarousel;
use Backpack\MenuCRUD\app\Models\MenuItem;
use Backpack\PageManager\app\Models\Page;
use Backpack\NewsCRUD\app\Models\Article;


class PagesController extends Controller
{
    public function home()
    {
    	$this->data['menu_items'] = MenuItem::getTree();
    	$this->data['pages'] = Page::get();
    	$this->data['reviews'] = Reviewcarousel::get();
    	$this->data['feedbacks'] = Testimonial::get();
    	// $this->data['banner_carousels'] = bannercarousel::get();
    	$this->data['articles'] = Article::get();

    	return view('home', $this->data);
    }
}
