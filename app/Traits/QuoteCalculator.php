<?php 
namespace App\Traits;

trait QuoteCalculator
{
	public function performs()
	{
		$items = $this->quote->items;
		// need this
		$tax_amount = 0;
		$discount_amount = 0;
		$amount = 0;
        $weight = 0;

		foreach ($items as $item) {
			// final price
			$amount = $item->unit_price + $amount;
			// total all items
			$weight = $item->quantity + $weight;
			$discount_amount = ($item->list_price - $item->unit_price) + $discount_amount;
			// @TODO tax_amount
			$total = $item->unit_price * $item->quantity;
		}

		$this->quote->tax_amount = $amount;
		$this->quote->discount_amount = $discount_amount;
		$this->quote->pre_discounted_amount = $discount_amount;
		$this->quote->amount = $total;
		$this->quote->grand_total_amount = $total;
        $this->quote->weight = $weight;
		$this->quote->save();
	}

}

