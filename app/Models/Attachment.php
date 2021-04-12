<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'modified_at';

    protected $table = 'attachment';

    protected $guarded = [];

    protected $casts = [
    	'id' => 'string',
    	'parent_id' => 'string',
    ];

    public $timestamps = false;

    public $incrementing = false;

}
