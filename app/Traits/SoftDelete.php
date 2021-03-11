<?php 

namespace App\Traits;

trait SoftDelete
{
	public function trash()
	{
		return $this->update(['deleted' => 1]);
	}
}
