<?php
declare(strict_types=1);
namespace Training\PoolPattern\Controller\Pool;

use Magento\Framework\App\ActionInterface;

class Index implements ActionInterface
{
	protected $pageFactory;

	public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->pageFactory = $pageFactory;
		
	}
	
	public function execute()
	{
		$page = $this->pageFactory->create();
		$page->getConfig()->getTitle()->set('Pool Design Pattern Example Page');
		return $page;
	}
}