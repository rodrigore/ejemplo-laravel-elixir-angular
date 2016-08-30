<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected $fillable = [
        'url',
        'stars',
        'score_id',
        'lang'
    ];
}
