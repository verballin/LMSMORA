<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'user';
    protected $primaryKey           = 'user_id';
    protected $useAutoIncrement     = true;
    protected $insertID     = 0;
    protected $returnType     = 'array';
    protected $useSoftDeletes     = false;
    protected $protectFields     = true;
    protected $allowedFields     = ['username', 'email', 'password', 'full_name', 'role', 'boleh_ujian', 'date_birth', 'gender',
        'phone', 'address', 'created_at', 'updated_at', 'reset_password_token', 'reset_password_token_expiry'];
        
}
?>