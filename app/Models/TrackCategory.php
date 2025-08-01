<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackCategory extends Model
{
    /** @use HasFactory<\Database\Factories\TrackCategoryFactory> */
    use HasFactory;

    protected $fillable = ['name'];

    public function tracks(){
        return $this->hasMany(Track::class);
    }
}
