<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'image_url',
        'likes_count',
        'description',
    ];

    public $timestamps = [
        'created_at',
        'updated_at',
    ];

    public function user()
    {
        return $this->belongsTo(Post::class);
    }
}
