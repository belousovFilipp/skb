<?php

namespace App;

use App\Http\Controllers\Client\Api\Posts\PostTransformer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    const STATUS_UNPUBLISHED = 0;
    const STATUS_PUBLISHED = 1;

    protected $fillable = [
        'title',
        'slug',
        'status',
        'user_id',
        'desc_full',
        'desc_short',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED);
    }

    public function date()
    {
        return $this->created_at->isoFormat('MMM Do YY');
    }

}
