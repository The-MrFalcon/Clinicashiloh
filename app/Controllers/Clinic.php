<?php

namespace App\Controllers;

class Clinic extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/banner/banner_clinica')
            . view('template/pages/index/about')
            . view('template/pages/clinic/start')
            // Linha 1
            . view('template/pages/clinic/drtosyn')
            . view('template/pages/clinic/lilian')
            . view('template/pages/clinic/jane')
            . view('template/pages/clinic/renata')
            // Linha 2
            . view('template/pages/clinic/juliana')
            . view('template/pages/clinic/sammy')
            . view('template/pages/clinic/giovanna')
            . view('template/pages/clinic/anacarolina')
            // Linha 3
            . view('template/pages/clinic/bianca')
            // . view('template/pages/clinic/kessia')
            // . view('template/pages/clinic/yara')
            . view('template/pages/clinic/gabrielle')
            . view('template/pages/clinic/cristina')
            // . view('template/pages/clinic/danielli')
            // Linha 4
            . view('template/pages/clinic/tatiane')
            . view('template/pages/clinic/paula')
            . view('template/pages/clinic/caroline')
            . view('template/pages/clinic/gabrielly')
            // Linha 5
            . view('template/pages/clinic/oluchi')
            . view('template/pages/clinic/end')
            . view('template/banner/banner_consulta')
            . view('template/pages/index/treatment')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
}
