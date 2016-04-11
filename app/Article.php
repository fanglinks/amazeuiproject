<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'title', 'content','seo_keywords','seo_describe','author','post_time'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    //protected $hidden = ['password', 'remember_token'];
}
