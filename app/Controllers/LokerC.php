<?php

namespace App\Controllers;

class LokerC extends BaseController
{
    public function input_loker()
    {
        return view('Loker/Input_Loker');
    }
     public function data_loker()
    {
        return view('Loker/data_loker');
    }
}
