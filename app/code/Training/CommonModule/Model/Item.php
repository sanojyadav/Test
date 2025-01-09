<?php
declare(strict_types=1);
namespace Training\CommonModule\Model;


class Item
{
	protected string $code;

	public function setCode(string $code): string
	{
		return $this->code = $code;
	}
	public function  getCode(): string
	{
		return $this->code;
	}
}