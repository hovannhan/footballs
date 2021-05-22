<?php

namespace App\Models\Footballs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'football_place_id',
        'open_time'
    ];
//    protected $hidden = ['created_at','updated_at','deleted_at'];

    public function footballPlace()
    {
        return $this->belongsTo(FootballPlace::class,'football_place_id','id');
    }
}
