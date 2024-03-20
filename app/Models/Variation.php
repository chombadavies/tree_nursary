<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function valueChains()
    {
        
        return $this->belongsToMany(ValueChain::class, 'variation_value_chain');
    }
}
