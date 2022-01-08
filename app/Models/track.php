<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;

    protected $table = 'track';
    protected $fillable = [
        'title', 'release', 'youtube_link', 'cover_image', 'album_id'
    ];

    public function album(){
        return $this->belongsTo('App\Models\album');
    }
}
