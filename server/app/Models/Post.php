<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'comment',
        'category_id',
    ];

    public function findPostByPostId($id)
    {
        return $this->find($id);
    }

    // リレーション
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function testForMe(){
        return dd('Hello World');
    }
}