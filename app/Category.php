<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
        return $this->hasManyThrough(
            'App\Post', 'App\PostToCategory',
            'category_id', 'id', 'id', 'post_id'
        );
    }
}
