<?php
declare(strict_types=1);
namespace Training\VirtualTypeExample\Controller\Virtual;

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
		$page->getConfig()->getTitle()->set('Virtual Type Module Example Page');
		return $page;
	}
}