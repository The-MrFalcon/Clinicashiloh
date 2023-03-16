<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/banner/banner_contato')
            // . view('template/pages/index/contact')
            . view('template/pages/contact/contact')
            . view('template/pages/contact/map')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
}
