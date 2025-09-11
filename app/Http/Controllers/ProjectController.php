<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.projects.index', [
            'projectCategories' => ProjectCategory::orderBy('id', 'asc')->get(),
        ]);
    }
}
