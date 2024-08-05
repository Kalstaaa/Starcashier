<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employe extends Controller
{
    public function index () {
        return view('admin.employe');
    }
}
