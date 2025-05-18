<?php namespace App\Controllers;

use App\Models\ProdukModel;

class Courses extends BaseController
{
    protected $produkModel;

    public function __construct()
    {
        $this->produkModel = new ProdukModel();
    }

    public function index()
    {
        $produk = $this->produkModel->findAll(); // ambil semua produk dari DB
        
        $data = [
            'title'  => 'Daftar Kursus',
            'produk' => $this->produkModel->findAll()
        ];
        return view('MainPage/courses', $data);   // pastikan view‑nya ada
    }


    public function detail($slug)
    {
        $produk = $this->produkModel->getCourseBySlug($slug);

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk tidak ditemukan.");
        }

        $data = [
            'title'   => $produk['title'],
            'durasi'  => $produk['durasi'],
            'about'   => $produk['about'],
            'benefit' => $produk['benefit'],
            'harga' => $produk['harga'],
            'produk'  => [$produk], // Supaya bisa di-foreach
        ];

        return view('MainPage/pembelianproduk', $data); // ganti nama view jika pakai file lain
    }
}
