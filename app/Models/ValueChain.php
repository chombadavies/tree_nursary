<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValueChain extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    public function materials(){
        return $this->hasMany('App\Models\Material');
    }

    public function variations()
    {
    
        return $this->belongsToMany(Variation::class, 'variation_value_chain');
        
    }
}
