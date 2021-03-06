<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'amount', 
        'description', 
        'status', 
    ];

    public function product() {
    	return $this->belongsToMany(Product::class);
    }
}
