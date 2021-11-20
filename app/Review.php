<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'id', 'name', 'email', 'message', 'rating'
    ];
    
    public function review(){
        return $this->belongsTo('App\Review');
  }
}