<?php 
namespace App\Traits;
use App\Models\{Product, Quote, QuoteItem};

trait QuoteHandler
{
	public function newQuote()
	{
		$rawQuote = Quote::where('id', "603e34c68f0e7bebc")->first()->toArray();
		$rawQuote['id'] = $this->uuid();
		$this->quote =  Quote::create($rawQuote);
	}

	public function existsQuote($user)
	{
		$this->quote = $user->quote()->where('status', 'Draft')->first();
		if($this->quote){
			$this->quote = $this->newQuote();
		}
	}

	public function product($productId)
	{
		return $this->product = Product::where('id', $productId)->first();
	}

	public function addItem($quantity, $accountId = null)
	{
		QuoteItem::create([
                'id' => $this->uuid(),
                'quantity' => $request->get('quantity'),
                'list_price' => $this->product->list_price,
                'unit_price' => $this->product->unit_price,
                'discount' => $this->product->getDiscount(),
                'amount' => $this->product->getAmount(),
                'unit_weight' => '1',
                'weight' => $request->get('quantity'),
                'order' => $this->quote->items()->count() + 1,
                'list_price_currency' => 'IRR',
                'unit_price_currency' => 'IRR',
                'amount_currency' => 'IRR',
                'quote_id' => $this->quote->id,
                'account_id' => $accountId ?? null,
                'product_id' => $this->product->id,
            ]);
	}

	public function uuid()
	{
		return uniqid() . substr(md5(rand()), 0, 4);
	}
}

