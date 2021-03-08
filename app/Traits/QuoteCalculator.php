<?php 
namespace App\Traits;
use App\Models\{Product, Quote, QuoteItem};

trait QuoteCalculator
{
	public function performs($quote)
	{
		// e an items above detail
		$items = $quote->items;
		foreach ($items as $item) {
			
		}
		// get list price
		// unit price
		// discont
		// amount
	}
}

