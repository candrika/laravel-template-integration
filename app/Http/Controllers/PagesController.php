<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';

        return view('layout.base.content._dashboard', compact('page_title', 'page_description'));
    }

    public function quickSeacrh()
    {
    }
}
