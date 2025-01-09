<?php 

namespace Training\CommonModule\Model;

class Supplier
{
	protected $code;

	public function __construct()
	{
		
	}
	public function setCode(string $code): string
	{
		return $this->code = $code;

	}
	public function getCode(): string
	{
		return $this->code;

	}

}