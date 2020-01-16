<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class organisation extends Model
{

	 protected $fillable = [
        'name',
        'address',
        'description',
         'user_id',


    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
