<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'service_id', 'product_id', 'status' ];

    public function getRelations(){
        return $this->hasMany(User::class, 'user_id');
    }
}