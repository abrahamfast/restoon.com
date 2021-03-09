<?php 
namespace App\Traits;

trait QuoteCalculator
{
	public function performs($quote = null)
	{
		$quote ?? $this->quote;
		$items = $quote->items;
		// need this
		$tax_amount;
		$discount_amount;
		$amount;

		foreach ($items as $item) {
			$amount = $item->amount + $amount;
			$weight = $this->quantity + $weight;
			$discount_amount = $this->unit_price + $discount_amount;
			// @TODO tax_amount
			$total = $item->unit_price * $quantity;
		}

		$this->quote->tax_amount = $amount;
		$this->quote->discount_amount = $discount_amount;
		$this->quote->amount = $amount;
		$this->quote->save();
	}

}

