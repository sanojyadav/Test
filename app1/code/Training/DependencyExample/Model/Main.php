<?php
declare(strict_types=1);
namespace Training\DependencyExample\Model;
use Training\DependencyExample\Model\Injectable;
use Training\DependencyExample\Model\NonInjectable;

class Main 
{
	/**
	 * @var data
	 */
	protected array $data;
	/**
	 * @var injectable
	 */
	protected  $injectable;
	/**
	 * @var NonInjectableFactory
	 */
	protected  $nonInjectableFactory;

	public function __construct(
		Injectable $injectable,
		nonInjectableFactory $nonInjectableFactory,
		array $data = []
	)
	{
		$this->nonInjectableFactory = $nonInjectableFactory;
		$this->injectable = $injectable;
		$this->data = $data;
	}
	public function getId(): string
	{
		return $this->data['id'];
	}
	public function getInjectable(): injectable
	{
		return $this->injectable;

	}
	public function getNonInjectable(): NonInjectable
	{

		return $this->nonInjectableFactory->create();

	}
	
}