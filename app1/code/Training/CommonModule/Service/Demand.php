<?php
declare(strict_types=1);
namespace Training\CommonModule\Service;
use Training\CommonModule\Model\Supplier;
use Training\CommonModule\Model\Item;
use Training\CommonModule\Model\ItemFactory;

class Demand
{
	/**
	 * [Supplier description]
	 */
	protected $supplier;
	protected  $itemFactory;
	public function __construct(Supplier $supplier, ItemFactory $itemFactory)
	{
		$this->supplier =$supplier;
		$this->itemFactory = $itemFactory;
	}
	public function getSupplier(): Supplier
	{
		return $this->supplier;
	}
	public function getItem()
	{
		$this->itemFactory->create();
	}
}