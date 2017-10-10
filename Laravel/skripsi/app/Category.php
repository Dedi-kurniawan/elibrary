<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable = ['kategory','faculty_id'];

     public function books()
    {
    	return $this->hasMany(Book::class);
    }
     public function faculty()
    {
    	return $this->belongsTo('App\Faculty');
    }
}
