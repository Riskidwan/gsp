<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function template(): string
    {
        return view('template');
    }
}
