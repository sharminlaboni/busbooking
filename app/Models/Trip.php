<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $guarded=[];

public function  route()
{
    return $this ->belongsTo(Route::class);
}

public function  Bus()
{
    return $this ->belongsTo(Bus::class,'Bus_id','id');
}


}