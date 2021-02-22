<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $table = 'attachment';

    protected $casts = [
    	'id' => 'string',
    	'parent_id' => 'string',
    ];
}
