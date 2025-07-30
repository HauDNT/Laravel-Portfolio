<?php

namespace App\Http\Controllers;

use App\Models\nav_items;
use App\Services\NavbarService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('app.about_me');
    }
}
