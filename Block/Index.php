<?php

namespace Conceptive\Commerce\Block;

use Magento\Framework\View\Element\Template; 

class Index extends Template
{
    public function __construct(
        Template\Context $context
    )
    {
        parent::__construct($context);
    }

    public function sayHello(){
        // return __('Hello World');
        return "Hello";
    }
}