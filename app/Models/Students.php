<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $student=[
        [
            "id" => 1,
            "nis" => "12345",
            "nama" => "Alysa Oktavia Ramadhani",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kudus"
        ],
        [
            "id" => 2,
            "nis" => "67890",
            "nama" => "Adinda Prameswari Puspitasari",
            "kelas" => "11 PPLG 2",
            "alamat" => "Semarang"
        ],
        [
            "id" => 3,
            
            "nis" => "54321",
            "nama" => "Tabitha Putri Ayuningtyas Suryadarma",
            "kelas" => "10 PPLG 1",
            "alamat" => "Jogja"
        ],
        [
            "id" => 4,
            "nis" => "98765",
            "nama" => "Rara Dewi Safitri",
            "kelas" => "10 PPLG 2",
            "alamat" => "Jepara"
        ],
        [
            "id" => 5,
            "nis" => "24680",
            "nama" => "Anisa Sari Fitriani",
            "kelas" => "12 PPLG 1",
            "alamat" => "Demak"
        ],
       
    ];

public static function all(){
    return self::$Students;
}

}
