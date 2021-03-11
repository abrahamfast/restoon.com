<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modles\QouteItem;
use App\Models\EntityTeam;

class Quote extends Model
{
    use HasFactory;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at'; 

    protected $table = 'quote';

    protected $guarded = [];

    public $incrementing = false;

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

    public function team()
    {
        return $this->hasMany(EntityTeam::class, 'entity_id', 'id');
    }
}
