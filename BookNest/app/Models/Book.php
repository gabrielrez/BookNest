<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'description',
        'author',
        'cover_url',
        'published_at',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
