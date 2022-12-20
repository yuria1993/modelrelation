<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function book(){
        return $this->hasOne('App\Models\Book');
    }
    
}
