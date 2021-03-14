<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at'; 

    protected $table = 'wishlist';


    protected $casts = [
    	'id' => 'string',
    	'product_id' => 'string',
    	'user_frontend_id' => 'string'
    ];

    public function product()
    {
    	return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
