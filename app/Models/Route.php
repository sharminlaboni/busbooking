<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;
    //protected $fillable
    protected $guarded=[];
    public function fromLocation()
    {
        return $this ->belongsTo(Location::class,'From_location_name','id');
    }

    public function toLocation()
    {
        return $this ->belongsTo(Location::class,'To_location_name','id');
    }

}
