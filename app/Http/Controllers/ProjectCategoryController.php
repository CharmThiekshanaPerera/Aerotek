<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;

class ProjectCategoryController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectCategory  $projectCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectCategory $projectCategory)
    {
        return view('app.project-categories.show', [
            'projectCategory' => $projectCategory,
        ]);
    }
}
