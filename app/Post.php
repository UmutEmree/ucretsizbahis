<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use App\Post;
class Post extends Model
{
    protected $fillable = ['name','slug','category_id','type','link','view','text','bonus','image','date','week','meta','title','marka'];


	public function categories()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }



}

