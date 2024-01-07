<?php

namespace App\Controllers;
use App\Models\UserModel;
class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login');
    }

    public function register(): string
    {
        return view('auth/register');
    }

    public function doLogin()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'pass' => 'required'
        ]);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/login')->withInput()->with('validation', $validation);
        }
    
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('pass');
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();
    
        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $userData = [
                'id' => $user['id'],
                'username' => $user['username'],
                'age' => $user['age'],
                'address' => $user['address'],
                'course' => $user['course'],
                'trainer' => $user['trainer'],
                'mobile_number' => $user['mobile_number'],
                'logged_in' => true
            ];
            $session->set($userData);
    
            // Redirect to profile or dashboard page after login
            return redirect()->to('/')->with('success', 'Login Successful');
        } else {
            return redirect()->to('/login')->withInput()->with('error', 'Invalid credentials');
        }
    }

    public function doRegister()
    {
        $validationRules = [
            'email' => 'required|valid_email',
            'username' => 'required|alpha_numeric|min_length[3]|is_unique[users.username]',
            'pass' => 'required|min_length[8]',
            'pass_confirm' => 'matches[pass]'
        ];

        $validationMessages = [
            'username' => [
                'is_unique' => 'The username is already taken.'
            ],
            'pass_confirm' => [
                'matches' => 'The passwords do not match.'
            ]
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }
        $userModel = new UserModel();
        $userModel->save([
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('pass')
        ]);
        return redirect()->to('/login')->with('success', 'Registration successful. You can now login.');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/')->with('success', 'Logout Successful');
    }
}
