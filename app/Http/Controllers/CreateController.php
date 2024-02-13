<?php

namespace App\Http\Controllers;

class CreateController extends Controller
{
    public function index()
    {
        return view('create.index', [
            'title' => 'Create'
        ]);
    }
}
