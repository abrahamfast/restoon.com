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
}
