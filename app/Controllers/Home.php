<?php

namespace App\Controllers;

use App\Models\Resep;

class Home extends BaseController
{
    private $resep;
    public function __construct()
    {
        $this->resep = new Resep();
    }
    public function index()
    {
        return view('landing_page');
    }
    public function home()
    {
        $data['resep'] = $this->resep
            ->orderBy('id', 'desc')
            ->findAll(9);
        $data['resepPopuler'] = $this->resep
            ->orderBy('jumlah_komentar', 'desc')
            ->findAll(9);
        return view('home', $data);
    }
}
