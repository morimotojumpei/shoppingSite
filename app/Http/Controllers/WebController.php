<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class WebController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        echo "<pre>";var_export($categories->toArray());echo "</pre>";
        exit;

        $major_category_names = Category::pluck('name')->unique();

        return view('web.index', compact('major_category_names', 'categories'));
    }
}
