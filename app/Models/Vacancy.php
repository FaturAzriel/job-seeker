<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Datakrama\Eloquid\Traits\Uuids;

class Vacancy extends Model
{
    use HasFactory, Uuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'institute_id',
        'name',
        'description',
        'type',
        'salary',
        'qualification',
        'year',
    ];

    // Relation with institutes
    public function institute()
    {
        return $this->belongsTo('App\Models\Institute');
    }
}
