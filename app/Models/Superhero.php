<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $fillable = ['name', 'real_name', 'gender', 'universe_id'];
    
    public function universe()
    {
        return $this->belongsTo(Universe::class);
    }
}