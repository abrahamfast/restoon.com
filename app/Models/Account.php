<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
	const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at';

    protected $table = 'account';
    protected $casts = [
    	'id' => 'string',
    ];

    public $incrementing = false;

    protected $fillable = [
	    'id',
	    'name'
    ];

    protected $guarded = [];

    public function contact()
    {
    	return $this->hasOne(Contact::class, 'account_id');
    }

    public function getFullAddress()
    {
        return $this->shipping_address_country .", ". $this->shipping_address_city .", " . $this->shipping_address_street;
    }

    /**
     * @return bool
     */
    public function isNotHaveAddress(): bool
    {
        return $this->shipping_address_street == '' ? false : true;
    }
}
