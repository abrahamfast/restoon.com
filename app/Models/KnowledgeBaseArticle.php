<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseArticle extends Model
{
    use HasFactory;
    protected $table = "knowledge_base_article";
    protected $guarded = [];

    protected $casts = [
    	'id' => 'string'
    ];
}
