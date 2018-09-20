<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $table = 'players';
    protected $fillable = [
        'player'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public static $rules = [
    'category' => 'required|unique:players',
    ];


    public function scores(){
        return $this->hasMany('App\Score');
    }
}
