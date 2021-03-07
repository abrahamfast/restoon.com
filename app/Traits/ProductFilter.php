<?php 
namespace App\Traits;

trait ProductFilter
{
	public function whereType($type, $query)
	{
		switch ($type) {
			case 'best':
				return $query->orderBy('cost_price', 'desc');
				break;
			case 'cheap':
				return $query->orderBy('cost_price', 'desc');
				break;
			case 'newest':
				return $query->orderBy('cost_price', 'desc');
				break;
			default:
				return $query->orderBy('cost_price', 'desc');
				break;
		}
	}
	public function filter($type, $query)
	{
		switch ($type) {
			case 0:
				return $query->orderBy('cost_price', 'desc');
				break;
			case 1:
				return $query->orderBy('cost_price', 'asc');
				break;
			case 2:
				return $query->orderBy('cost_price', 'asc');
				break;
			case 3:
				return $query->orderBy('name', 'asc');
				break;
			case 4:
				return $query->orderBy('list_price', 'asc');
				break;
			
			default:
				return $query->orderBy('name', 'asc');
				break;
		}
	}
}