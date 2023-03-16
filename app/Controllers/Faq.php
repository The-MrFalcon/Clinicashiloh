<?php

namespace App\Controllers;

class Faq extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/banner/banner_faq')
            . view('template/pages/faq/faq')
            . view('template/pages/faq/end')
            . view('template/banner/banner_consulta')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
}
