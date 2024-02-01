<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelData;

class Data extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new ModelData();
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        return redirect()->to('keluarga');
    }
   public function logout()
{
    session()->destroy();
    return redirect()->to('login');
}



    public function edit($id)
    {
        return json_encode($this->model->find($id));
    }

    public function simpan()
{
    $validation = \Config\Services::validation();
    $rules = [
 'NO_KK' => [
            'label' => 'NO_KK',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi',
               
            ]
        ],

        'NIK_kepala_keluarga' => [
            'label' => 'NIK_kepala_keluarga',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi',
               
            ]
        ],

         'nama_kepala_keluarga' => [
            'label' => 'nama_kepala_keluarga',
            'rules' => 'required',
            'errors' => [
                'required' => '{field} harus diisi',
               
            ]
        ],
    ];

    if ($this->validate($rules)) {
        $id = $this->request->getPost('id');
       $NO_KK = $this->request->getPost('NO_KK');

       $NIK_kepala_keluarga = $this->request->getPost('NIK_kepala_keluarga');
$nama_kepala_keluarga = $this->request->getPost('nama_kepala_keluarga');
$alamat = $this->request->getPost('alamat');

        $data = [
            'NO_KK' => $NO_KK,

            'NIK_kepala_keluarga' => $NIK_kepala_keluarga,
    'nama_kepala_keluarga' => $nama_kepala_keluarga,
    'alamat' => $alamat
        ];

        if (empty($id)) {
            // Simpan data baru
            $this->model->save($data);
            $hasil = ['sukses' => true, 'pesan' => 'Berhasil memasukkan data'];
        } else {
            // Edit data yang ada
            $this->model->update($id, $data);
            $hasil = ['sukses' => true, 'pesan' => 'Berhasil mengupdate data'];
        }
    } else {
        // Perubahan pada bagian ini, tambahkan key 'sukses' => false
        $hasil = ['sukses' => false, 'error' => $validation->listErrors()];
    }

    return json_encode($hasil);
}


  public function index()
{
    $katakunci = $this->request->getGet('katakunci');
    $pencarian = $katakunci ? $this->model->cari($katakunci) : $this->model;

    $data['katakunci'] = $katakunci;
    $data['dataKeluarga'] = $pencarian->orderBy('id', 'desc')->findAll(); // Menggunakan findAll untuk mengambil semua data
    $data['nomor'] = 0;

    return view('keluarga_view', $data);
}

}