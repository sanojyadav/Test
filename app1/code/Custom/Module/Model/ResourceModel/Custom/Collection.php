<?php
namespace Custom\Module\Model\ResourceModel\Custom;

/* use required classes */
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Custom\Module\Model\Custom as Model;
use Custom\Module\Model\ResourceModel\Custom as ResourceModel;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id'; //primary id of the table

    /**
     * @param EntityFactoryInterface $entityFactory,
     * @param LoggerInterface        $logger,
     * @param FetchStrategyInterface $fetchStrategy,
     * @param ManagerInterface       $eventManager,
     * @param StoreManagerInterface  $storeManager,
     * @param AdapterInterface       $connection,
     * @param AbstractDb             $resource
     */
    public function __construct(
        EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        StoreManagerInterface $storeManager,
        AdapterInterface $connection = null,
        AbstractDb $resource = null
    ) {
        //$this->_init('Thecoachsmb\Grid\Model\Grid', 'Thecoachsmb\Grid\Model\ResourceModel\Grid');
        $this->_init(Model::class, ResourceModel::class);
        
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
        $this->storeManager = $storeManager;
    }
    
    protected function _initSelect()
    {
        $this->addFilterToMap('entity_id', 'main_table.entity_id');
        parent::_initSelect();

        $this->getSelect()->joinLeft(
            ['secondTable' => $this->getTable('sales_order_grid')], //2nd table name by which you want to join mail table
            '`main_table`.entity_id= `secondTable`.entity_id', // common column which available in both table 
            ['main_table.state','secondTable.customer_name','secondTable.customer_email'] // '*' define that you want all column of 2nd table. if you want some particular column then you can define as ['column1','column2']
        );
        return $this;
    }
}