<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Education extends Model
{
    //
    public static function filter(Request $request)
    {
        $query = self::query(); //lorsque la methode est statique
        if ($request->filled('institution')) { //verifie si le tit
            $query->where('institution', 'like', '%' . $request->input('institution') . '%');
        }
        return $query; //retourne les resultats de la requete
    }

    protected $table = "educations";
    protected  $guarded = [];
}
