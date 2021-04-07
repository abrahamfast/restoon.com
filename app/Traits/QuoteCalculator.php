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
			$amount = $item->amount + $amount;

			$discount_amount = ($item->list_price - $item->unit_price) + $discount_amount;
			$weight = $item->weight + $weight;
		}
        


		$this->quote->discount_amount = $discount_amount;
		$this->quote->pre_discounted_amount = $discount_amount;
		$this->quote->amount = $amount;
		$this->quote->grand_total_amount = $amount;
        $this->quote->weight = $weight;
		$this->quote->save();
	}

}

