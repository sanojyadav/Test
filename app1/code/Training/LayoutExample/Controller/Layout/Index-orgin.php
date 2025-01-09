<?php
declare(strict_types=1);
namespace Training\LayoutExample\Controller\Layout;

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
		$result = $this->pageFactory->create();
		$result->getConfig()->getTitle()->set('Sanoj Dev');
		$result->getLayout()->getBlock('page.main.title')->setPageTitle('Sanoj Dev Training');
		return $result;
	}
}