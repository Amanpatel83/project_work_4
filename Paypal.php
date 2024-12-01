<?php
namespace [your-name]\PaypalPayment\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Paypal extends Template
{
    protected $_template = 'PaypalPayment::paypal.phtml';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }
}
