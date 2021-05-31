<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Photo extends Model
{
    use HasFactory;
    //Agregamos el nombre correcto a las rutas
    public static function getRoutes(){
        $photo = Photo::select(DB::raw("id, name, CONCAT('img/intro_carousel/', route) AS fullRoute"))->get();
        return $photo;
    }

}
