<?php

namespace App\Controllers;

class Ovodoacao extends BaseController
{
    public function index()
    {
        return view('template/header/header')
            . view('template/banner/banner_ovodoacao')
            . view('template/pages/ovodoacao/ovodoacao')
            . view('template/pages/ovodoacao/end')
            . view('template/banner/banner_consulta')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
    public function legislacao()
    {
        return view('template/header/header')
            . view('template/banner/banner_ovodoacao')
            . view('template/pages/ovodoacao/legislacao')
            . view('template/pages/ovodoacao/end')
            . view('template/banner/banner_consulta')
            . view('template/footer/footer')
            . view('template/footer/pdp')
            . view('template/footer/footer-js');
    }
}
