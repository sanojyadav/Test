<?php
namespace Custom\Module\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Custom implements ArgumentInterface
{
    public function __construct() {

    }

    public function getSomething()
    {
        return "Example Of viewModel ";
    }
}