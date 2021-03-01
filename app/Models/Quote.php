<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modles\QouteItem;

class Quote extends Model
{
    use HasFactory;

    protected $table = 'quote';

    protected $guarded = [];

    protected $casts = [
    	'id' => 'string',
    	'tax_d' => 'string',
    	'account_id' => 'string',
    	'shipping_contact_id' => 'string',
    ];

    public function items()
    {
    	return $this->hasMany(QuoteItem::class);
    }
}
