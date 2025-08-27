<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * Summary of fillables (title, released, description)
     * @var array
     */
    protected $fillable = [
        'title',
        'released',
        'description',
        'director_id'
    ];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
