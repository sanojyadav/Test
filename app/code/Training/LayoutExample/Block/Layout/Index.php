<?php declare(strict_types=1);

namespace Training\LayoutExample\Block\Layout;
use Magento\Framework\View\Element\Template; 

class Index extends Template
{
	protected function _prepareLayout()
	{
		parent::_prepareLayout();

		$pageMainTitle = $this->getLayout()->getBlock('page.main.title');
            if ($pageMainTitle) {
                $pageMainTitle->setPageTitle('Sanoj Dev Title');
            }
            return $this;
	}
	/**
	 * [getSubTitle description]
	 * @return [string] [description]
	 */
	public function getSubTitle(): string
	{

		return 'Learn Magento2 Devlopment';

	}
	public function getNoteHtml(): string
	{
		return $this->getLayout()->createBlock(Note::class)->toHtml();

	}

}