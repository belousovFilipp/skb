<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'email',
        'message',
    ];
}
