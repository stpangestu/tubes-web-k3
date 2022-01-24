<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Komentar;
use App\Models\Reply;
use App\Models\Resep;

class ResepController extends BaseController
{
    private $resep;
    private $komen;
    private $reply;

    public function __construct()
    {
        $this->resep = new Resep();
        $this->komen = new Komentar();
        $this->reply = new Reply();
    }

    public function categories($kategori)
    {
        if ($kategori == "Makanan-Khas") {
            $data['kategori'] = 'Makanan Khas';
            $data['resep'] = $this->resep->where('kategori', 'Makanan Khas')->findAll();
        } elseif ($kategori == "Makanan-Pembuka") {
            $data['kategori'] = 'Makanan Pembuka';
            $data['resep'] = $this->resep->where('kategori', 'Makanan Pembuka')->findAll();
        } elseif ($kategori == "Makanan-Penutup") {
            $data['kategori'] = 'Makanan Penutup';
            $data['resep'] = $this->resep->where('kategori', 'Makanan Penutup')->findAll();
        } elseif ($kategori == "Makanan-Utama") {
            $data['kategori'] = 'Makanan Utama';
            $data['resep'] = $this->resep->where('kategori', 'Makanan Utama')->findAll();
        } elseif ($kategori == "Kue-Kering") {
            $data['kategori'] = 'Kue Kering';
            $data['resep'] = $this->resep->where('kategori', 'Kue Kering')->findAll();
        } else {
            $data['kategori'] = $kategori;
            $data['resep'] = $this->resep->where('kategori', $kategori)->findAll();
        }
        return view('selected_cat', $data);
    }
    public function resep($id)
    {
        $data['resep'] = $this->resep->where('id', $id)->first();
        $data['komens'] = $this->komen->where('id_resep', $id)->findAll();
        $data['replies'] = $this->reply->findAll();
        $ip = $this->request->getIPAddress();
        $checkIp = $this->komen->where('ip_address', $ip)->first();

        if ($checkIp) {
            $data['isComment'] = true;
        } else {
            $data['isComment'] = false;
        }
        return view('resep', $data);
    }
    public function search()
    {
        $data['resep'] = $this->resep->like('nama_resep', $this->request->getVar('search'))->findAll();
        return view('search', $data);
    }
    public function add_recipe()
    {
        return view('reg_resep');
    }
    public function create()
    {
        $fileImage = $this->request->getFile('imgResep');
        // $imageName = $fileImage->getName();
        $imageName = $fileImage->getRandomName();
        $fileImage->move('assets/imgresep', $imageName);
        $query = $this->resep->insert([
            'nama_resep' => $this->request->getVar('namaResep'),
            'langkah_resep' => $this->request->getVar('langkahLangkah'),
            'img_resep' => $imageName,
            'bahan_resep' => $this->request->getVar('bahanResep'),
            'kategori' => $this->request->getVar('kat_resep'),
            'penulis_resep' => $this->request->getVar('penulisResep'),
            'email' => $this->request->getVar('email'),
        ]);
        return redirect()->to('/home');
    }
}
