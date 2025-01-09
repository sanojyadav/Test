<?php

declare(strict_types=1);
namespace Custom\Module\Controller\Adminhtml\Customs;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Addnew extends Action implements HttpGetActionInterface
{
	
	public function execute(): page
	{
		//echo "hello";die('kkk');
		$resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
		$resultPage->getConfig()->getTitle()->prepend((__('Add New ')));

		return $resultPage;
	}


}
