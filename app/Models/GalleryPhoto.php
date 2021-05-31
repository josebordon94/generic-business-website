<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class GalleryPhoto extends Model
{
    use HasFactory;
    //Agregamos el nombre correcto a las rutas
    public static function getRoutes(){
        $photo = GalleryPhoto::select(DB::raw("name, CONCAT('img/gallery/', route) AS fullRoute"))->get();
        return $photo;
    }
}
