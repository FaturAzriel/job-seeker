<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Datakrama\Eloquid\Traits\Uuids;

class Institute extends Model
{
    use HasFactory, Uuids;

    // Relation with city
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    // Relation with vacancy
    public function vacancy()
    {
        return $this->hasMany('App\Models\Vacancy');
    }
}
