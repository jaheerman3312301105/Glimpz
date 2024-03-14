<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class list105Controller extends Controller
{
    public function getData()
    {
        $dataProduk = [
            ['id' => 1, 'produk' => 'Kecap Bango'],
            ['id' => 2, 'produk' => 'Bakso'],
        ];

        return $dataProduk;
    }

    public function list105(){
        $data = $this->getData();
        return view('list_product105', compact('data'));
    }
    
}
