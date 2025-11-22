<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class OurWorksController extends Controller
{
    public function show($project_name)
    {
        $viewPath = 'our-works.' . $project_name . '.index';
        
        // Check if view exist
        if (View::exists($viewPath)) {
            return view($viewPath);
        } else {
            abort(404, 'Project not found');
        }
    }
}
