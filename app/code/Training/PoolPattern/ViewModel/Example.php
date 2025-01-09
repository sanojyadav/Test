<?php 
declare(strict_types=1);
namespace Training\InjectableAndNonInjectableExample\ViewModel;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Example implements ArgumentInterface
{
	
	public function getCode(RequestInterface $request): string
	{
		return $request->getParam('code');
	
	}
	
}