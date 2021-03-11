<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\SoftDelete;

class EntityTeam extends Model
{
    use HasFactory, SoftDelete;

    protected $table = 'entity_team';
    protected $guarded = [];
    protected $timestamps = fales;

    public $incrementing = false;

    protected $casts = [
    	'id' => 'string',
    	'entity_id' => 'string',
    	'team_id' => 'string'
    ];
}
