<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KnowledgeBaseArticle;

class FaqController extends Controller
{
    public function index()
    {
    	$faq = KnowledgeBaseArticle::all();

    	return view('faq', [
    		'faqs' => $faq,
    		'slug' => __('global.faq')
    	]);
    }
}
