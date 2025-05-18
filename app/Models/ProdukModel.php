<?php 

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'produk';
    protected $primaryKey           = 'id_produk';
    protected $useAutoIncrement     = true;
    protected $insertID     = 0;
    protected $returnType     = 'array';
    protected $useSoftDeletes     = false;
    protected $protectFields     = true;
    protected $allowedFields     = ['title', 'benefit', 'about', 'harga', 'durasi', 'slug'];
        

        /**
     * Ambil data produk/kursus berdasarkan slug/title
     * 
     * @param string $slug
     * @return object|null
     */
    public function getCourseBySlug(string $slug)
    {
        return $this->where('slug', $slug)->first();
    }

    public function getProdukById(int $id)
    {
        return $this->find($id);
    }

}
?>