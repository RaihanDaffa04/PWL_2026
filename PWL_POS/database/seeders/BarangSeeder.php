<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG01', 'barang_nama' => 'Chitato', 'harga_beli' => 8000, 'harga_jual' => 10000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BRG02', 'barang_nama' => 'Oreo', 'harga_beli' => 6000, 'harga_jual' => 8500],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'BRG03', 'barang_nama' => 'Aqua Botol 600ml', 'harga_beli' => 2500, 'harga_jual' => 4000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'BRG04', 'barang_nama' => 'Pocari Sweat', 'harga_beli' => 6000, 'harga_jual' => 8000],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'BRG05', 'barang_nama' => 'Sabun Lifebuoy', 'harga_beli' => 3000, 'harga_jual' => 4500],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'BRG06', 'barang_nama' => 'Shampoo Pantene', 'harga_beli' => 15000, 'harga_jual' => 18000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'BRG07', 'barang_nama' => 'Pampers M', 'harga_beli' => 45000, 'harga_jual' => 55000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'BRG08', 'barang_nama' => 'Minyak Telon', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'BRG09', 'barang_nama' => 'Kabel Data Type-C', 'harga_beli' => 15000, 'harga_jual' => 25000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG10', 'barang_nama' => 'Baterai AA Alkaline', 'harga_beli' => 10000, 'harga_jual' => 15000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
