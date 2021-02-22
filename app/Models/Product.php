<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $guarded = [];

    protected $casts = [
    	'id' => 'string'
    ];

    public function attachment()
    {
    	return $this->hasMany(App\Model\Attachment::class);
    }
}
