<?php
namespace [your-name]\PaypalPayment\Model;

use Magento\Payment\Model\Method\AbstractMethod;
use Magento\Payment\Model\Method\Logger;
use Magento\Payment\Model\InfoInterface;

class PaypalPayment extends AbstractMethod
{
    const PAYMENT_METHOD_PAYPAL = 'paypal_payment';

    protected $_code = self::PAYMENT_METHOD_PAYPAL;

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        Logger $logger,
        \Magento\Payment\Helper\Data $paymentData
    ) {
        parent::__construct($context, $registry, $logger, $paymentData);
    }

    public function authorize(InfoInterface $payment, $amount)
    {
        // Implement authorization logic with PayPal API here
        // You will call PayPal API using the SDK and process the payment
    }
}
