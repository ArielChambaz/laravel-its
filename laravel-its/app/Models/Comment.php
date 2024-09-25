<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Get the article that owns the comment.
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}