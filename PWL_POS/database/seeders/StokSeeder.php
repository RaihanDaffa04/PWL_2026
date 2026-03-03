<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        // Memasukkan 10 data stok untuk masing-masing barang menggunakan perulangan (loop) agar ringkas
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'user_id' => 1, // Diinput oleh Admin (user_id 1)
                'stok_tanggal' => now(),
                'stok_jumlah' => 100, // Semua barang distok 100 buah
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}
