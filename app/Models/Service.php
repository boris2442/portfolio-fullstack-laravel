<?php

namespace App\Models;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use App\
class Service extends Model
{
    //
    protected  $guarded = [];
    public static function filter(Request $request)
    {
        $query = self::query(); //lorsque la methode est statique
        if ($request->filled('title')) { //verifie si le tit
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
        return $query; //retourne les resultats de la requete
    }
    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }
    
}
