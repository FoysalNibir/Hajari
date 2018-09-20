<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';
    protected $fillable = [
        'score', 'player_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $rules = [
    'score' => 'required|unique:scores',
    ];


    public function player(){
        return $this->belongsTo('App\Player');
    }
}
