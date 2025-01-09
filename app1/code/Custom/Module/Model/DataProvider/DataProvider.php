<?php
namespace Custom\Module\Model\DataProvider;
 
use Custom\Module\Model\ResourceModel\Custom\CollectionFactory;
 
class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{

	protected $collection;
    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $resourceCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $resourceCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $resourceCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }
 
    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        $items = $this->collection->getItems();
        $this->loadedData = array();
        /** @var Customer $customer */
        foreach ($items as $itemData) {
            $this->loadedData[$itemData->getId()] = $itemData->getData();
        }
        return $this->loadedData;
    }
}