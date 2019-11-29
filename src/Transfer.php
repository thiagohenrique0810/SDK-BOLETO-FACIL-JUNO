<?php

include_once('Config.php');

class Transfer {

	private $amount;
	private $responseType;
	

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * @param mixed $responseType
     *
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }
}