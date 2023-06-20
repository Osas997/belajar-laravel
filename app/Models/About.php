<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class About
{
    private static $bioData = [
        "title" => "About",
        "nama" => "Diki Brong",
        "alamat" => "Cungking Giri",
        "gender" => "Lanang"
    ];

    public static function getBioData()
    {
        return self::$bioData;
    }
}
