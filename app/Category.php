<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function getList()
    {
        return static::pluck('title', 'id');
    }
    
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
