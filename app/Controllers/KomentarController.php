<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Komentar;
use App\Models\Reply;
use App\Models\Resep;
use CodeIgniter\I18n\Time;

class KomentarController extends BaseController
{
    private $komen;
    private $resep;
    private $reply;

    public function __construct()
    {
        $this->komen = new Komentar();
        $this->resep = new Resep();
        $this->reply = new Reply();
    }
    public function create()
    {
        // get ipAddress
        $ip = $this->request->getIPAddress();
        $checkIp = $this->komen->where('ip_address', $ip)->first();
        if ($checkIp) {
            $name = $checkIp['nama_user'];
        } else {
            $name = $this->request->getVar('namaUser');
        }

        $query = $this->komen->insert([
            'nama_user' => $name,
            'isi_komentar' => $this->request->getVar('isiKomentar'),
            'date' => Time::now(),
            'id_resep' => $this->request->getVar('idResep'),
            'ip_address' => $ip,
        ]);

        $infoResep = $this->resep->where('id', $this->request->getVar('idResep'))->first();
        $updateJumlahKomentar = $this->resep->update($this->request->getVar('idResep'), [
            'jumlah_komentar' => $infoResep['jumlah_komentar'] + 1,
        ]);
        // Email ke pembuat resep
        $email = \Config\Services::email();
        $email->setFrom('guidein9@gmail.com');
        $email->setTo($infoResep['email']);

        $email->setSubject('Notifikasi Komentar baru');
        $email->setMessage("<h1>Notifikasi Komentar untuk " . $infoResep['nama_resep'] . "</h1><br><h4>silahkan balas komentar</h4>");

        $email->send();
        return redirect()->back();
    }

    public function reply()
    {
        // get ipAddress
        $ip = $this->request->getIPAddress();
        $checkIp = $this->komen->where('ip_address', $ip)->first();
        if ($checkIp) {
            $name = $checkIp['nama_user'];
        } else {
            $name = $this->request->getVar('namaUserReply');
        }

        $query = $this->reply->insert([
            'id_komentar' => $this->request->getVar('idKomen'),
            'nama_user' => $name,
            'isi_komentar' => $this->request->getVar('isiKomentarReply'),
            'date' => Time::now(),
        ]);
        return redirect()->back();
    }
}
