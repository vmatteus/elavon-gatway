<?php 

namespace Omnipay\Elavon\Message;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $testEndpoint = 'https://qaswsgate.elavon.com.br/wsgate/requesthandler';
    protected $liveEndpoint = 'https://wsgate.elavon.com.br/wsgate/requesthandler';

    public function getEndpoint()
    {
        return ($this->getTestMode()) ? $this->testEndpoint : $this->liveEndpoint;
    }

    public function getTerminalID()
    {
        return $this->getParameter('TerminalID');
    }

    public function setTerminalID($value)
    {
        return $this->setParameter('TerminalID', $value);
    }

    public function getRegKey()
    {
        return $this->getParameter('RegKey');
    }

    public function setRegKey($value)
    {
        return $this->setParameter('RegKey', $value);
    }

    protected function getBaseData()
    {
        $data = array(
            'TerminalID' => $this->getTerminalID(),
            'RegKey' => $this->getRegKey(),
        );

        return $data;
    }
}