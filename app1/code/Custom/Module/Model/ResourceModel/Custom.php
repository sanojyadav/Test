<?php

namespace Custom\Module\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Custom extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('sales_order', 'entity_id');
    }
}