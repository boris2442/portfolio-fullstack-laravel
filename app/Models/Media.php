<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    //
    protected $table='medias';
    protected  $guarded=[];

    //lorsque cette erreur s'affiche,,, SQLSTATE[42S02]: Base table or view not found: 1146 Table 'admin_porfolio.media' doesn't exist (Connection: mysql, SQL: select * from `media` order by `created_at` desc),,,,,,,,,,,,,,,,,,,// 
    
}
