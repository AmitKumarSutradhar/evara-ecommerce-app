<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class EvaraController extends Controller
{
    public function index(){
        return view('website.home.index',[
            'categories'  => Category::all(),
            'subcategories'  => SubCategory::all(),
        ]);
    }

    public function category(){
        return view('website.category.index');
    }

    public function product(){
        return view('website.product.index');
    }

}
