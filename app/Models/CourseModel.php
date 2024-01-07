<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'course_progress';
    protected $primaryKey = 'id';
    protected $allowedFields = ['subject', 'week', 'date', 'start_time', 'end_time', 'notes', 'user_id'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Jika Anda perlu menghubungkannya dengan user model, Anda dapat menambahkan fungsi berikut
    public function getUserProgress($userId)
    {
        return $this->where('user_id', $userId)->findAll();
    }
}
