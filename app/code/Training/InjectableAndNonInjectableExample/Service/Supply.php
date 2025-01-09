<?php
declare(strict_types=1);

namespace Training\InjectableAndNonInjectableExample\Service;
use Training\InjectableAndNonInjectableExample\Model\Supplier;

class Supply
{
	/**
	 * [$supplier description]
	 * @var Supplier
	 */
	protected $supplier;

	public function __construct(Supplier $supplier)
	{
		$this->supplier = $supplier;
		
	}
	public function getSupplier(): supplier
	{
		  $this->supplier->setCode('SanojAb2c');
		  return $this->supplier;
		
	}
}