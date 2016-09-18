<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'age',
        'weight', 'height',
        'price', 'special_price'
    ];

    public function image() // image_id
    {
        return $this->hasMany(\App\Image::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getCatListAttribute()
    {
        return $this->categories()->pluck('id')->toArray();
    }
    
    public function getPrice()
    {
        return ($this->special_price) ? $this->special_price : $this->price;
    }
}