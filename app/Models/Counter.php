<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function  route()
{
    return $this ->belongsTo(Location::class,'location_id','id');
}


}
