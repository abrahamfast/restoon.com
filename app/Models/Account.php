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

    protected $fillable = [
        'id'
    ];

    protected $guarded = [];

    public function contact()
    {
    	return $this->hasOne(Contact::class, 'account_id');
    }
}
