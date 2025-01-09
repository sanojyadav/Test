<?php
declare(strict_types=1);
namespace Training\InjectableAndNonInjectableExample\Model;

class Supplier
{
	protected $code;

	public function setCode(string $code): void
	{
		$this->code = $code;
	}
	public function getCode(): string
	{
		return $this->code;
	}
}