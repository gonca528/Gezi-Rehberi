<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{    protected $guarded=[];

    use HasFactory;
    public function posts(){  //category modeli ile post modeli arasındaki ilişkiti temsil eder. hasMany yaptık çunku Post modelinde bir tane categori olabilir.
        return $this->hasMany(Sliders::class);   
//category id->post id
        
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}
