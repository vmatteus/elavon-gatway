<?php 

namespace Omnipay\Elavon\Message;

class PurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount');
        $data = $this->createCommons('DoPaymentCapture');
        $captureAmount = $data->addChild('CaptureAmount', $this->getAmountInteger());
        $captureAmount->addAttribute('currencyCode', $this->getCurrency());
        return $data;
    }
}