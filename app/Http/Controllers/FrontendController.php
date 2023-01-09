<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class FrontendController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('frontend.index', compact('categories'));
    }
}
