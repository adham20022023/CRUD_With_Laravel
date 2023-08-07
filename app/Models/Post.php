<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    use HasFactory;
    protected $fillable = ['title', 'description','user_id'];
    public function myuser_relation(){
        return $this->belongsTo(User::class,'user_id');
    }
}
