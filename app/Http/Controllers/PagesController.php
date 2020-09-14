<?php

namespace App\Http\Controllers;     // package

use Illuminate\Http\Request;        // import

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function show($id) {
        $titles = ['A', 'B', 'C', 'D'];
        return view('pages.show', [
            'id' => $id,
            'title' => $titles[$id]
            ]);
    }
}
