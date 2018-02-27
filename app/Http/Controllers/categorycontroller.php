<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog;

class categorycontroller extends Controller
{
    public function index()
    {
        return view('blogcategory.create');
    }
}