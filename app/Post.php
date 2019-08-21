<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // ak by sme chceli zmenit nazov tabulku, ktora je v plurale
    // tak potom:
    // protected $table = 'posts';
    // public $primaryKey = 'post_id';

    // Ak chceme mat/nemat timestampy ( slpce )
    // public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
