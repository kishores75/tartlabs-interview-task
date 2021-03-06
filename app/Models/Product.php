<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'detail' ];

    public function getProductName(){
        return $this->hasOne(Product::class, 'id')->select('name','detail');
    }
}