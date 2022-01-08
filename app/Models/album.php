<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'release', 'cover_image', 'genre'
    ];

    public function track(){
        return $this->hasMany('App\Models\track');
    }
}
