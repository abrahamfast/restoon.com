<?php 

namespace App\Traits;

use App\Models\{Product, Quote, QuoteItem};

trait QuoteHandler
{
	public function getSessionQuote()
	{
		return $this->quoteId = session()->get('quoteId');
	}

	public function setSessionQuote($quoteId)
	{
		session()->put('quoteId', $quoteId);
	}

	public function setQuote()
	{
		$this->quote = Quote::where('id', $this->quoteId)->first();
	}
	public function newQuote($user = null)
	{
		$rawQuote = Quote::where('id', "603e34c68f0e7bebc")->first()->toArray();
		$rawQuote['id'] = $this->uuid();
		$rawQuote['name'] = __('global.new quote') . date("Y-m-d");
		if($user){
			$rawQuote['account_id'] = $user->account()->first()->id;	
		}
		$this->quote =  Quote::create($rawQuote);
		$this->setSessionQuote($rawQuote['id']);
	}


	public function userQuote($user)
	{
		$this->quote = $user->quote()->where('status', 'Draft')->where('deleted', 0)->first();
		if(!$this->quote){
			$this->newQuote($user);
            return true;
		}
		$this->setSessionQuote($this->quote->id);
	}

	public function product($productId)
	{
		return $this->product = Product::where('id', $productId)->first();
	}

	public function addItem($quantity, $accountId = null)
	{
		QuoteItem::create([
                'id' => $this->uuid(),
                'name' => $this->product->name,
                'quantity' => $quantity,
                'list_price' => $this->product->list_price,
                'unit_price' => $this->product->unit_price,
                'discount' => $this->product->pricing_factor,
                'amount' => $this->product->unit_price * $quantity,
                'unit_weight' => 1,
                'weight' => $quantity,
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

