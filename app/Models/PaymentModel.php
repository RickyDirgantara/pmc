<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payments'; // Sesuaikan dengan nama tabel barang di database Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['course', 'price', 'created_at', 'user_id'];
}
