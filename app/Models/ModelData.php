<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelData extends Model
{
    protected $table = "data";
    protected $primaryKey = "id";
    protected $allowedFields = ['NO_KK','NIK_kepala_keluarga', 'nama_kepala_keluarga', 'alamat'];

    public function cari($katakunci)
    {
        $builder = $this->table("data");

        // Memisahkan kata kunci
        $arr_katakunci = explode(" ", $katakunci);

        foreach ($arr_katakunci as $kunci) {
            $builder->groupStart()
                ->like('NO_KK', $kunci)
                ->orlike('NIK_kepala_keluarga', $kunci)

                ->orLike('nama_kepala_keluarga', $kunci)
                ->orLike('alamat', $kunci)
                ->groupEnd();
        }

        return $builder;
    }



}