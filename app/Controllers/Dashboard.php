<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CourseModel;
class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('admin/dashboard', $data);
    }

    public function course($id)
{
    $userModel = new UserModel();
    $user = $userModel->find($id);
    
    return view('admin/course', ['user' => $user]);
}

public function update_course($id)
{
        $userModel = new UserModel();
        $courseModel = new CourseModel();


        $userData = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'age' => $this->request->getPost('age'),
            'trainer' => $this->request->getPost('trainer'),
        ];
        $userModel->update($id, $userData);

        $courseData = [
            'subject' => $this->request->getPost('subject'),
            'week' => $this->request->getPost('week'),
            'date' => $this->request->getPost('date'),
            'start_time' => $this->request->getPost('start_time'),
            'end_time' => $this->request->getPost('end_time'),
            'notes' => $this->request->getPost('notes'),
            'user_id' => $id,
        ];
        $courseModel->insert($courseData);
    return redirect()->to('/admin/course/' . $id)->with('success', 'Course updated successfully');
}



}
