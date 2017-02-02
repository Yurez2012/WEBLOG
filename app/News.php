<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'title',
        'text',
        'img',
        'category',
    ];


    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function menu()
    {
        return $this->hasOne('App\Menu');
    }

    public function category()
    {
        return $this->hasOne('App\Category');
    }


}
