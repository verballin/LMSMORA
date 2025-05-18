<?php

namespace App\Models;
use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';
    protected $allowedFields = [
        'user_id', 'id_produk', 'full_name', 'email', 'harga', 'metode_pembayaran', 'status', 'created_at'
    ];
}

