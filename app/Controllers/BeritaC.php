<?php

namespace App\Controllers;

class BeritaC extends BaseController
{
    public function input_berita()
    {
        return view('Berita/Input_Berita');
    }
     public function data_berita()
    {
        return view('Berita/data_berita');
    }
}
