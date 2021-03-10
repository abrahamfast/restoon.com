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
        return $this->list_price * "0.{$this->pricing_factor}";
    }

    public function translateFa($number)
    {
        return StrHelper::convertFa($number);
    }

    public function getPriceObtained()  
    {
        $value = $this->convertToToman($this->list_price);

        if($this->discount_price){
            $value = $this->convertToToman($this->discount_price);
        }

        return number_format($value);
    }

    public function convertToToman($price)
    {
        return round($price / 10);
    }

    public function getDiscountPrice()
    {
        return notowo(
            $this->convertToToman($this->discount_price / 10),
            'fa'
         );
    }

    public function getListPrice()
    {
        return notowo(
            $this->convertToToman($this->list_price / 10),
            'fa'
         );
    }
}
