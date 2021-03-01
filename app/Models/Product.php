<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;
use App\Models\ProductCategories;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $guarded = [];

    protected $casts = [
    	'id' => 'string'
    ];

    public function category()
    {
        return ProductCategories::find($this->category_id);
    }

    public function attachment()
    {
    	return $this->hasMany(Attachment::class, 'parent_id');
    }

    public function getCover()
    {
    	$covers = $this->attachment()->get();
    	if($covers) return $covers[0]->id;

    	return 'default.png';
    }

    public function getAmount(int $quantity = 1): float
    {
        // @TODO need type Num
        if($product->price_type == 'Discount fromList'){
            // ext: (2000*0.10)*12=2400
            // (price * discount) * quantity
          return ($product->list_price - $this->getDiscount()) * $quantity;
        }
        return $product->list_price * $quantity;
    }

    public function getDiscount()
    {
        return ($product->list_price * "0.$product->pricing_factor");
    }
}
