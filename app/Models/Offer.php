<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $table = 'offer';

    protected $guarded = [];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    protected $casts = [
    	'id' => 'string',
    	'cover_id' => 'string',
    	'created_by_id' => 'string',
    	'modified_by_id' => 'string',
    	'assigned_user_id' => 'string',
    ];
}
