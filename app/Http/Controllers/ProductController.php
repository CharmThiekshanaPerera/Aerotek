<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.products.index', [
            'productCategories' => ProductCategory::orderBy('id', 'asc')->get(),
        ]);
    }
}
