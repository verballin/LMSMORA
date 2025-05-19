<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class KelolaUser extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('login') || $session->get('role') !== 'Admin') {
            return redirect()->to(base_url('/'))->with('message', 'Anda tidak memiliki akses.');
        }

        $userModel = new UserModel();
        $siswa = $userModel->where('role', 'Siswa')->findAll();
        return view('MainPage/kelolauser', ['siswa' => $siswa]);
    }

    public function updateAkses($id)
    {
        $userModel = new UserModel();

        $boleh_ujian = $this->request->getPost('boleh_ujian') ? 1 : 0;

        $data = ['boleh_ujian' => $boleh_ujian];

        $userModel->update($id, $data);

        return redirect()->to(base_url('kelolauser'))->with('message', 'Akses berhasil diubah.');
    }
}
