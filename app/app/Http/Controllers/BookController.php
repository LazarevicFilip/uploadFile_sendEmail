<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $categories = Category::query()->whereNull("category_id")
            ->with(["subcategories.subcategories"=> function($query){
                $query->withCount("products");
            }])->get();
        return view("home",["categories"=>$categories]);
    }
}
