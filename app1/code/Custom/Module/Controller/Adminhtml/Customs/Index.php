<?php

declare(strict_types=1);

namespace Custom\Module\Controller\Adminhtml\Customs;

use Magento\Backend\App\Action;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Result\Page;

class Index extends Action implements HttpGetActionInterface
{
    public function execute(): Page
    {
        //echo"jjjjj";die;
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Custom_Module::grid');
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Grid'));

        return $resultPage;
    }
}
