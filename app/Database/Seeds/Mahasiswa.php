<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => '2017051051',
                'nama'    => 'nasywa nathania wirawan',
                'alamat'    => 'yudisthira',
                'created_at'    => Time::now(),
                'update_at'    => ''

            ],

            [
                'npm' => '2017051056',
                'nama'    => 'Wina Fadhillah',
                'alamat'    => 'Gang Mandiri III',
                'created_at'    => Time::now(),
                'update_at'    => ''
            ],

            [
                'npm' => '2017051078',
                'nama'    => 'Arib Yusron',
                'alamat'    => 'Rajabasa',
                'created_at'    => Time::now(),
                'update_at'    => ''
            ],
            [
                'npm' => '2017051009',
                'nama'    => 'Nesa dwi cahyani',
                'alamat'    => 'lampung barat',
                'created_at'    => Time::now(),
                'update_at'    => ''
            ]
            

        ];
        foreach($data_mahasiswa as $data )
            $this->db->table('mahasiswa')->insert($data);
    }
}
