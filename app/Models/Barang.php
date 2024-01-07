<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table = 'barang'; // Sesuaikan dengan nama tabel barang di database Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['course', 'price', 'description', 'img']; // Sesuaikan dengan kolom-kolom yang ada pada tabel
}
