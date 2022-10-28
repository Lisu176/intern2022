<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    // 省略

    // リレーションシップ
    public function posts() {

        return $this->belongsToMany(Post::class);
    }
    public function testForMe(){
        return dd('Hello World');
    }
}