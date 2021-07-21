<?php
namespace App\Controllers;

use App\Models\KasModels;

class Kas extends BaseController
{
    public function index()
    {
        $title = 'Laporan Transaksi';
        $model = new KasModels();
        $iuran = $model->getLaporan();
        return view('kas/daftarkas', compact('iuran', 'title'));
    }

    public function kas_admin()
    {
        $title = 'Laporan Transaksi';
        $model = new KasModels();
        $iuran = $model->getLaporan();
        return view('kas/daftarkas_admin', compact('iuran', 'title'));
    }
}
