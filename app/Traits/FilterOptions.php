<?php 
namespace App\Traits;

trait FilterOptions
{
	public function makeOptionQuery($option)
	{
		if($option){
			$options = explode(',', $option);
		 	$this->options['field'] = $options[0];
		 	$this->options['value'] = $options[1];
		 	$this->option['oprator'] = $options[2] ?? null;
		}
	}

	public function optionQuery($query)
	{
		if($this->options){
			return $query->where($this->options['field'], $this->options['value']);
		}
		return $query;
	}
}
