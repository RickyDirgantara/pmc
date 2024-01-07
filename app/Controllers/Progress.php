<?php

namespace App\Controllers;
use App\Models\CourseModel;

class Progress extends BaseController
{
    public function index($id)
    {
        $session = session();
        $loggedIn = $session->get('logged_in');
        $username = $session->get('username');

        // Mengakses model CourseProgressModel
        $progressModel = new CourseModel();

        // Mengambil data progress berdasarkan user_id
        $progressData = $progressModel->where('user_id', $id)->findAll();

        $data = [
            'loggedIn' => $loggedIn,
            'username' => $username,
            'progressData' => $progressData, // Menambahkan data progress ke variabel $data
        ];

        return view('progress', $data);
    }
}
