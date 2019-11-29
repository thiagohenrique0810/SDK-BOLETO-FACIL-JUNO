<?php

include_once('Config.php');


class Balance {

	private $responseType;
	

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