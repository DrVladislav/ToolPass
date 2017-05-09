<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service', 'login', 'email', 'password', 'others'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
