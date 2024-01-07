<?php

namespace App\Controllers;
use App\Models\Barang;
class Index extends BaseController
{
    public function index()
    {
        $session = session();
        $session = \Config\Services::session(); 
        // Mengakses data dari session
        $loggedIn = $session->get('logged_in');
        $username = $session->get('username');

        $barangModel = new Barang();
        $barangData = $barangModel->findAll();

        // Mengirim data ke view
        $data = [
            'loggedIn' => $loggedIn,
            'username' => $username,
            'barangData' => $barangData,
        ];


        return view('index', $data);
    }
}
