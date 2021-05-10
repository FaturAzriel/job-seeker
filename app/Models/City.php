<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Datakrama\Eloquid\Traits\Uuids;

class City extends Model
{
    use HasFactory, Uuids;
    
    // Relation with institutes
    public function institutes()
    {
        return $this->hasMany('App\Institute');
    }
}
