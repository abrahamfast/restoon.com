<?php 

namespace App\Trais;

trait ItemAccessor
{
	public function takeCurrency($price)
    {
        return number_format(round($price / 10));
    }

    public function giveToUnderstand(string $param): string
    {
    	return notowo(
            str_replace(",", "",  $param),
            'fa'
         );
    }

    public function takeCurrencyAttr($attribute)
    {
    	return $this->takeCurrency($this->attributes[$attribute]);
    }

    public function understandAttr($attribute)
    {
    	return $this->giveToUnderstand($this->attributes[$attribute]);
    }
}


