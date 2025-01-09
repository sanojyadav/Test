<?php 
namespace Training\CommonModule\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\CommonModule\Service\Demand;
use Training\CommonModule\Service\Supply;

class SupplierViewModel implements ArgumentInterface
{
	/**
	 * [$supply description]
	 * @var [supply]
	 */
	protected $supply;

	/**
	 * [__construct description]
	 * @param Demand $demand [description]
	 */
	protected $demand;
	public function __construct(Supply $supply, Demand $demand)
	{
		$this->supply =$supply;
		$this->demand = $demand;
		
	}
	public function getSupply(): Supply
	{
		return $this->supply;

	}
	public function getDemand(): Demand
	{
		return  $this->demand;
	}

}