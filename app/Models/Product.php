<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attachment;
use App\Models\ProductCategories;
use App\Helper\StrHelper;

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
        if($this->price_type == 'Discount fromList'){
            // ext: (2000*0.10)*12=2400
            // (price * discount) * quantity
          return ($this->list_price - $this->getDiscount()) * $quantity;
        }
        return $this->list_price * $quantity;
    }

    public function getDiscount()
    {
        return ($this->list_price * "0.{$this->pricing_factor}");
    }

    public function getCostPrice()
    {
        return StrHelper::convertFa($this->cost_price);
    }

    public function getListPrice()
    {
        return StrHelper::convertFa($this->list_price);
    }

    public function getUnitPrice()
    {
        return StrHelper::convertFa($this->unit_price);
    }
}
