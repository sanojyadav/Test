<?php

namespace Custom\VirtualTypeExample\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class HelperClassA extends AbstractHelper
{
    protected $a;

    public function __construct(Context $context,
        $a = 25
    )
    {
        $this->a = $a;
        parent::__construct($context);
    }


    public function getResult()
    {
        return $this->a;
    }

}