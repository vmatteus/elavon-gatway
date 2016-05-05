<?php

namespace Omnipay\Elavon;

use Omnipay\Common\AbstractGateway;

/**
 * Elavon's Gateway
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Elavon';
    }

    public function getDefaultParameters()
    {
        return array(
            'TerminalID' => '',
            'RegKey'   => ''
        );
    }

    public function getTerminalId()
    {
        return $this->getParameter('TerminalID');
    }

    public function setTerminalId($terminalId)
    {
        return $this->setParameter('TerminalID', $terminalId);
    }

    public function getRegKey()
    {
        return $this->getParameter('RegKey');
    }

    public function setRegKey($regKey)
    {
        return $this->setParameter('RegKey', $regKey);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Elavon\Message\AuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('Omnipay\Elavon\Message\AuthorizeRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\Elavon\Message\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('Omnipay\Elavon\Message\PurchaseRequest', $parameters);
    }
}