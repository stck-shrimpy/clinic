<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'image',

    ];

    public function reservation()
    {
        return $this->hasMany('App\Reservation');
    }
}
