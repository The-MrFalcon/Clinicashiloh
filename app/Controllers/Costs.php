<?php

namespace App\Controllers;

class Costs extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/Banner/banner_custos')
            . view('template/pages/costs/costs')
            // . view('template/pages/index/contact')
            . view('template/pages/costs/end')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
}
