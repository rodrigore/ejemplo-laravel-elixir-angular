<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = [
        'username',
        'score'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function repos()
    {
        return $this->hasMany(Repository::class);
    }

    public function scopeOldest($query)
    {
        return $query->orderBy('created_at');
    }

    public function scopeNewest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
