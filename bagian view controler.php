<?php


namespace App\Http\controller
{

    public function index(){

        $tgl=date('Y-m-d H:i:s');
        $barang=DB::table(tb_barang)->insert([
        ]

                'id_barang'        =>'B-03',
         'nama_barang' =>'keyboard',
                'nama_barang'=>'flasdisk',
        ]

    ]
        );


        $barang=DB::table('tb_barang')->get();

        return view('halaman\barang',compact('barang'));
    }
}

            <body bgcolor="abu abu gelap">

            <center><table border="1">
                    <tr>


                    <h2>
                    <th><h1>id</h3></th>
                    <th><h1>kategori</h3></th>
                    <th><h1>nama_barang</h3></th>

                      <tr>
                      <td>B-01</td>

                      <td>flasdisk</td><td>merk flasdisk</td>
                      </td>

                    <tr>
                        <td>B-02</td>

                        <td>keyboard</td><td>tv,pc,computer</td>
                    <tr>
                        <td>B-03</td>
                        <td>mouse</td><td>macam macam merk flasdisk</td>
                        </td>
                    <tr>
                    </table>


