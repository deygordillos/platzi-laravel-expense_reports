<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        $title = $request->query('title','Hola');
        return view('dashboard', ['titulo' => $title]);
    }
}
