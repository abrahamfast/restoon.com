<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class QuoteItem extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at'; 

    protected $table = 'quote_item';
    
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