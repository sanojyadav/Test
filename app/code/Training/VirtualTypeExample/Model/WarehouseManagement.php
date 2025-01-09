<?php
declare(strict_types=1);
namespace Training\VirtualTypeExample\Model;

use Training\VirtualTypeExample\Api\WarehouseManagementInterface;

class WarehouseManagement implements WarehouseManagementInterface
{
	public function getWarehouseInfo(string $code): array
	{
		$warehouses = $this->getAllWarehouse();
		if(array_key_exists($code, $warehouses))
		{
			return $warehouses[$code];

		}
		return[];

	}
	protected function getAllWarehouse(): array
	{
		return [
			'lon1' => [
			'name' => 'Londan',
			'code' => 'lon1',
			'postcode' => 'ABC111'
		],
		'lon2' => [
			'name' => 'Londan',
			'code' => 'lon2',
			'postcode' => 'ABC222'
		],
		'lon3' => [
			'name' => 'Londan',
			'code' => 'lon3',
			'postcode' => 'ABC333'
		]
	];


	}

}