<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{	
    protected $fillable = [
        'type', 'expired_at'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
