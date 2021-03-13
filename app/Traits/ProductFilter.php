<?php 
namespace App\Traits;

trait ProductFilter
{
	public function whereType($type, $query)
	{
		switch ($type) {
			case 'best':
				return $query->orderBy('unit_price', 'desc');
				break;
			case 'cheap':
				return $query->orderBy('unit_price', 'desc');
				break;
			case 'newest':
				return $query->orderBy('unit_price', 'desc');
				break;
			default:
				return $query->orderBy('unit_price', 'desc');
				break;
		}
	}
	public function filter($type, $query)
	{
		switch ($type) {
			case 1:
				// Low to High
				return $query->orderBy('unit_price', 'asc');
				break;
			case 2:
				// High to Low
				return $query->orderBy('unit_price', 'desc');
				break;
			case 3:
				// Alphabetical
				return $query->orderBy('name', 'asc');
				break;
			case 6:
				// Off - High to Low
				return $query->orderBy('pricing_factor', 'desc');
				break;
			
			default:
				return $query->orderBy('name', 'asc');
				break;
		}
	}
}
