<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler
{
    private static $ekstrakurikuler = [
        ["id" => 1, "Nama ekstra" => "Pmr", "Nama pembina" => "Bu Tatik", "Deskripsi" => "Di mana kegiatan ekstra ini memfokuskan pada materi-materi Kesehatan, Pertolongan Pertama (PP), Penanggulangan Pada Gawat Darurat (PPGD) dan bidang sosial."],
        ["id" => 2, "Nama ekstra" => "Teater", "Nama pembina" => "Bu Fara", "Deskripsi" => "Teater merupakan salah satu salah satu seni bermain peran (drama) yang menyajikan cerita kehidupan nyata di atas pentas"],
        ["id" => 3, "Nama ekstra" => "Padus", "Nama pembina" => "Bu Putri", "Deskripsi" => "Paduan suara adalah kelompok atau ansambel vokal yang terdiri dari beberapa penyanyi yang menyanyikan suara atau nada bersama-sama."],
        ["id" => 4, "Nama ekstra" => "Osis", "Nama pembina" => "Bu Widi", "Deskripsi" => "Organisasi yang menaungi organisasi ekstra lainya di dalam tingkat satua."],
        ["id" => 5, "Nama ekstra" => "Voli", "Nama pembina" => "Pak Imam", "Deskripsi" => "Voli adalah olahraga tim yang dimainkan oleh dua tim yang berusaha mengirim bola melintasi net dan jatuh di lapangan lawan. Setiap tim terdiri dari enam pemain yang berada di lapangan pada saat yang sama."],
    ];
    public static function all()
    {
        return self::$ekstrakurikuler;
}
}