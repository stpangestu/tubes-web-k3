<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Restoran;

class RestoranController extends BaseController
{
    private $restoran;
    public function __construct()
    {
        $this->restoran = new Restoran();
    }
    public function restaurant()
    {
        $data['resto'] = $this->restoran
            ->orderBy('rating_restoran', 'desc')
            ->findAll();
        return view('resto', $data);
    }
    public function restaurant_info($id)
    {
        $data['resto'] = $this->restoran->where('id', $id)->first();
        return view('restaurant_info', $data);
    }

    public function filter()
    {
        $data['resto'] = $this->restoran->like('daerah_restoran', $this->request->getVar('filterDaerah'))
            ->orderBy('rating_restoran', 'desc')
            ->findAll();
        return view('resto', $data);
    }
    public function search()
    {
        $data['resto'] = $this->restoran->like('nama_restoran', $this->request->getVar('search'))->findAll();
        return view('resto', $data);
    }
}
