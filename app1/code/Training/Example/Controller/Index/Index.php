<?php
declare(strict_types=1);
namespace Training\Example\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RawFactory;


class Index implements HttpGetActionInterface
{
	/**
	 @var Magento\Framework\Controller\Result\RawFactory
	 */
	protected $resultFactory;
	/**
	 * Index constructor,
	 *
	 * @param Magento\Framework\Controller\Result $resulrFactory
	 */


	public function __construct(
		RawFactory $resultFactory
	)
	{
	 $this->resultFactory =	$resultFactory;
	}
	public function execute()
	{
		return $this->resultFactory->create()->setContents('saaddada ggg');
	}
}