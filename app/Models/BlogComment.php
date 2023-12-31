<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $table = 'blogs_comments';
    protected $primaryKey = 'id';
    protected $quarded = [];

    public function blogs()
    {
        return $this->belongsTo(Blog::class, 'blog_id', 'id');
    }
}
