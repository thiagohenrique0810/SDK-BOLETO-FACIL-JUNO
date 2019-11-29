<?php

include_once('Config.php');

class PayeeNotification {

	private $paymentToken;
	private $chargeReference;
	private $chargeCode;
	

    /**
     * @return mixed
     */
    public function getPaymentToken()
    {
        return $this->paymentToken;
    }

    /**
     * @param mixed $paymentToken
     *
     * @return self
     */
    public function setPaymentToken($paymentToken)
    {
        $this->paymentToken = $paymentToken;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChargeReference()
    {
        return $this->chargeReference;
    }

    /**
     * @param mixed $chargeReference
     *
     * @return self
     */
    public function setChargeReference($chargeReference)
    {
        $this->chargeReference = $chargeReference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getChargeCode()
    {
        return $this->chargeCode;
    }

    /**
     * @param mixed $chargeCode
     *
     * @return self
     */
    public function setChargeCode($chargeCode)
    {
        $this->chargeCode = $chargeCode;

        return $this;
    }
}