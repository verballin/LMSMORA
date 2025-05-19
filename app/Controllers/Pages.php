<?php namespace App\Controllers;

use App\Models\ProdukModel;

class Pages extends BaseController
{

    public function view($page = 'index')
    {
        // Optional: whitelist or validate the $page parameter to prevent load attacks
        $allowedPages = ['index', 'about', 'contact', 'courses', 'instructor', 'login', 'pembelianproduk', 'kelolauser', 'inputproduk', 'pembayaran', 'historipembelian', 'signup', 'team', 'testimonial', 'dashboard']; // etc.

        if (! in_array($page, $allowedPages)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('MainPage/' . $page);
    }
    
}