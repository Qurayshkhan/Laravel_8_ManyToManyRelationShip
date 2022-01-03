<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singers extends Model
{
    use HasFactory;
    public function songs(){
        return $this->belongsToMany(songs::class,'singers_songs');
    }
}
