<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class QouteItem extends Model
{
    use HasFactory;

    protected $table = 'qoute_item';
    
    protected $guarded = [];

    protected $casts = [
    	'id' => 'string',
    	'account_id' => 'string',
    	'quote_id' => 'string',
    	'product_id' => 'string',
    ];

    public function product()
    {
    	return $this->hasOne(Product::class);
    }
}
