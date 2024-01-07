<?php

namespace App\Controllers;
use App\Models\UserModel;
class Profile extends BaseController
{
    public function index()
    {
        $session = session();

        // Pastikan pengguna sudah login
        if (!$session->get('logged_in')) {
            return redirect()->to('/login'); // Redirect ke halaman login jika pengguna belum login
        }

        // Mengambil data pengguna dari database berdasarkan username
        $userModel = new UserModel();
        $username = $session->get('username');
        $userData = $userModel->where('username', $username)->first();

        // Mengirim data ke view
        $data = [
            'userData' => $userData,
        ];

        return view('profile', $data);
    }

    public function update()
{
    // Ambil data pengguna dari session
    $session = session();
    $userId = $session->get('user_id');

    // Ambil data pengguna dari database
    $userModel = new UserModel();
    $userData = $userModel->find($userId);

    // Pastikan $userData tidak null sebelum digunakan
    if (!$userData) {
        return redirect()->to('/profile')->with('error', 'User not found');
    }

    // Tangkap data input dari form
    $dataToUpdate = [];

    if ($age = $this->request->getPost('age')) {
        if ($age !== $userData['age']) {
            $dataToUpdate['age'] = $age;
        }
    }

    if ($address = $this->request->getPost('address')) {
        if ($address !== $userData['address']) {
            $dataToUpdate['address'] = $address;
        }
    }

    if ($course = $this->request->getPost('course')) {
        $dataToUpdate['course'] = $course;
    }

    if ($trainer = $this->request->getPost('trainer')) {
        $dataToUpdate['trainer'] = $trainer;
    }

    if ($number = $this->request->getPost('number')) {
        if ($number !== $userData['mobile_number']) {
            $dataToUpdate['mobile_number'] = $number;
        }
    }

    if (!empty($dataToUpdate)) {
        $userModel->update($userId, $dataToUpdate);
    }

    // Redirect atau lakukan tindakan lain setelah pembaruan
    return redirect()->to('/profile')->with('success', 'Profile updated successfully');
}

}
