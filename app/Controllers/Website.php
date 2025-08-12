<?php

namespace App\Controllers;

class Website extends BaseController
{
    public function index()
    {
        return view('website/index');
    }
     public function about()
    {
        return view('website/about');
    }
     public function services()
    {
        return view('website/services');
    }
     public function services_security()
    {
        return view('website/services_security');
    }
     public function cleaning_service()
    {
        return view('website/cleaning_service');
    }
     public function gardening()
    {
        return view('website/gardening');
    }
     public function receptionist()
    {
        return view('website/receptionist');
    }
    public function driver()
    {
        return view('website/driver');
    }
    public function labor_supply()
    {
        return view('website/labor_supply');
    }
    public function rubber_seal()
{
    return view('website/LPK/Rubber_Seal');
}

public function wiring_harness()
{
    return view('website/LPK/Wiring_Harness');
}

public function sewing()
{
    return view('website/LPK/Sewing');
}

public function packing()
{
    return view('website/LPK/Packing');
}

public function molding_operator()
{
    return view('website/LPK/Molding_Operator');
}

    public function loker()
    {
        return view('website/loker');
    }
    public function berita()
    {
        return view('website/berita');
    }
    public function contact()
    {
        return view('website/contact');
    }
    public function berita_detail_award()
    {
        return view('website/berita_detail_award');
    }
      public function input()
    {
        // Jika mau kirim data, bisa pakai array: return view('website/inputloker', $data);
        return view('website/inputloker');
    }
}
