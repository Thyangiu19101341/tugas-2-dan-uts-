<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class produkstableseder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        prodek::create(
        [
        'NAMA'=> "KINGSTON 4GB", 'ID KATEGORI' => '3',
        'HARGA_BELI' => '50000', 'HARGA_JUAL' => 'HARGA_JUAL' => '100000'],
        [
        'NAMA' => "Mouse logistich", 'ID_KATEGORI' => '2',
        'HARGA_BELI' => '15000', 'HARGA_JUAL' => '30000']
        );   
    }
}
