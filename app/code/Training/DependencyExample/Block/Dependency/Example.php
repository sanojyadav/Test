<?php declare(strict_types=1);

namespace Training\DependencyExample\Block\Dependency;
use Training\DependencyExample\Model\Main;
use Magento\Framework\View\Element\Template; 
use Magento\Framework\View\Element\Template\Context;


class Example extends Template
{
	/**
	 * @var Main
	 */
	protected $main;
	
	public function __construct
	(
		Context $context,
		Main $main,
		array $data = []
	)
	{
		$this->main = $main;
		parent::__construct($context, $data);
		
	}
	public function getMain(): Main
	{
		return $this->main;
	}

}