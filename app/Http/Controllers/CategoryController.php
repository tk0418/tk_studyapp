<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
    
    public function create(Category $category)
    {
        return view('categories.create')->with(['categories' => $category->get()]);
    }
    
    public function store(Request $request, Category $category)
    {
        $input = $request['category'];
        $category->fill($input)->save();
        return redirect('/categories/' . $category->id);
    }

}
