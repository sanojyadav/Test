<?php 

namespace Training\CommonModule\Service;
use Training\CommonModule\Model\Supplier;
use Training\CommonModule\Model\Item;
use Training\CommonModule\Model\ItemFactory;

class Supply 
{
	/**
	 * [supplier description]
	 */
	protected $supplier;
	/**
	 * [$itemFactory description]
	 * @var [type]
	 */
	protected $itemFactory;
	//protected $item;
	public function __construct(Supplier $supplier, ItemFactory $itemFactory)
	{
		$this->supplier = $supplier;
		$this->itemFactory = $itemFactory;
		
		
	}
	public function getSupplier(): Supplier
	{
		$this->supplier->setCode('123abc');
		return $this->supplier;

	}
	public function getItem()
	{
		$item = $this->itemFactory->create();
		echo"<br>";
		$item->setCode('item : jjj223 newable obj non injectable');
		return $item;

	}
}