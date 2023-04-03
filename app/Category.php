<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','priority','menu'];
    
         public function post()
    {
        return $this->hasMany('App\Post', 'category_id', 'id');
    }

}
