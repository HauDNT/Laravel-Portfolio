<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentPageController extends Controller
{
    public function loadPage($pageLink)
    {
        switch ($pageLink) {
            case 'about-me':
                return view('portfolio.about_me');
            case 'publications':
                return view('portfolio.publications');
            case 'supervision':
                return view('portfolio.supervision');
            case 'projects':
                return view('portfolio.projects');
            case 'industrial':
                return view('portfolio.industrial');
            default:
                abort(404);
        }
    }
}
