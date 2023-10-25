<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
      
    protected $fillable = [
        'nom',
       
    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
