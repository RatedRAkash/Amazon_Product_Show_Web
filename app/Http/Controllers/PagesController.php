<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\User;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
