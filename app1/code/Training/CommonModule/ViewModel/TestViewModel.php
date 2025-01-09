<?php declare(strict_types=1);
namespace Training\CommonModule\ViewModel;
use \Magento\Framework\View\Element\Block\ArgumentInterface;
use Training\CommonModule\Model\Test;

class TestViewModel implements ArgumentInterface
{
	protected $test;
	public function __construct(Test $test )
	{
		$this->test = $test;
	}
	public function getName()
	{
		return $this->test->getName();

	}

}