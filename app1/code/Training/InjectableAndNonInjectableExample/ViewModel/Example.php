<?php 
declare(strict_types=1);
namespace Training\InjectableAndNonInjectableExample\ViewModel;
use Training\InjectableAndNonInjectableExample\Service\Supply;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements ArgumentInterface
{
	/**
	 * [$supply description]
	 * @var Supply
	 */
	protected $supply;

	public function __construct(Supply $supply)
	{
		$this->supply = $supply;
		
	}
	Public function getSupply(): supply
	{
		return $this->supply;
	}
}