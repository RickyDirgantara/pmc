<?php

namespace App\Controllers;
use App\Models\Barang;
use App\Models\UserModel;
use App\Models\PaymentModel;
use CodeIgniter\Controller;

class Payment extends BaseController
{
    public function index($id)
    {
        $session = session();
        $loggedIn = $session->get('logged_in');
        $username = $session->get('username');
        $userId = session('id');
        $barangModel = new Barang();
        $barangData = $barangModel->find($id);
        // Mengirim data ke view
        $data = [
            'loggedIn' => $loggedIn,
            'username' => $username,
            'userId' => $userId,
            'barangData' => $barangData,
                ];

        return view('payment', $data);
    }

    public function payment()
    {
        $session = session();
        $userId = $session->get('id');
        $paymentModel = new PaymentModel();
        $userModel = new UserModel();
        $course = $this->request->getPost('course');
        $price = $this->request->getPost('price');
        $paymentData = [
            'course' => $course,
            'price' => $price,
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => $userId,
        ];
        $paymentModel->insert($paymentData);
        $userModel->updateCourse($userId, $course);
        return redirect()->to('/')->with('success', 'Purchase successful');
    }
    
}