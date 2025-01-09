<?php

namespace Custom\Module\Model;

use Magento\Framework\Model\AbstractModel;
use Custom\Module\Model\ResourceModel\Custom as ResourceModel;

class Custom extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}