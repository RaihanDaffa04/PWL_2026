<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        
        // 10 transaksi x 3 barang = 30 baris data
        for ($i = 1; $i <= 10; $i++) { // Loop untuk 10 ID Penjualan
            for ($j = 1; $j <= 3; $j++) { // Loop 3 barang per transaksi
                $data[] = [
                    'detail_id' => $detail_id,
                    'penjualan_id' => $i,
                    'barang_id' => rand(1, 10), // Memilih barang secara acak dari ID 1 sampai 10
                    'harga' => 15000, 
                    'jumlah' => 2,
                ];
                $detail_id++;
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
