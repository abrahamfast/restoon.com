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
        return $this->hasMany(EntityTeam::class, 'entity_id', 'id')->where('entity_type', 'quote')->where('deleted', 0);
    }

    public function isSales()
    {
        return $this->team()->where('team_id', '6031eed8965a745e3')->first();
    }

    public function isStock()
    {
        return $this->team()->where('team_id', '6031eed0be8a64f6a')->first();
    }

    public function isTransportation()
    {
        return $this->team()->where('team_id', '6031eeff04c0bce3d')->first();
    }

    public function assginSalesTeam()
    {
        // @TODO check duplicate
        return $this->team()->create([
            'entity_id' => $this->id,
            'team_id' => '6031eed8965a745e3',
            'entity_type' => 'quote',
            'deleted' => 0
        ]);
    }
}
