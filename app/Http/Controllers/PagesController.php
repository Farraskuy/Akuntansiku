<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('pages.users.dashboard');
    }

    public function bank() {
        return view('pages.users.bank');
    }
}
