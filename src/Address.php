<?php


class Address {

	private $billingAddressStreet;
	private $billingAddressNumber;
	private $billingAddressComplement;
	private $billingAddressNeighborhood;
	private $billingAddressCity;
	private $billingAddressState;
	private $billingAddressPostcode;

	

    /**
     * @return mixed
     */
    public function getBillingAddressStreet()
    {
        return $this->billingAddressStreet;
    }

    /**
     * @param mixed $billingAddressStreet
     *
     * @return self
     */
    public function setBillingAddressStreet($billingAddressStreet)
    {
        $this->billingAddressStreet = $billingAddressStreet;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressNumber()
    {
        return $this->billingAddressNumber;
    }

    /**
     * @param mixed $billingAddressNumber
     *
     * @return self
     */
    public function setBillingAddressNumber($billingAddressNumber)
    {
        $this->billingAddressNumber = $billingAddressNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressComplement()
    {
        return $this->billingAddressComplement;
    }

    /**
     * @param mixed $billingAddressComplement
     *
     * @return self
     */
    public function setBillingAddressComplement($billingAddressComplement)
    {
        $this->billingAddressComplement = $billingAddressComplement;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressNeighborhood()
    {
        return $this->billingAddressNeighborhood;
    }

    /**
     * @param mixed $billingAddressNeighborhood
     *
     * @return self
     */
    public function setBillingAddressNeighborhood($billingAddressNeighborhood)
    {
        $this->billingAddressNeighborhood = $billingAddressNeighborhood;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressCity()
    {
        return $this->billingAddressCity;
    }

    /**
     * @param mixed $billingAddressCity
     *
     * @return self
     */
    public function setBillingAddressCity($billingAddressCity)
    {
        $this->billingAddressCity = $billingAddressCity;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressState()
    {
        return $this->billingAddressState;
    }

    /**
     * @param mixed $billingAddressState
     *
     * @return self
     */
    public function setBillingAddressState($billingAddressState)
    {
        $this->billingAddressState = $billingAddressState;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBillingAddressPostcode()
    {
        return $this->billingAddressPostcode;
    }

    /**
     * @param mixed $billingAddressPostcode
     *
     * @return self
     */
    public function setBillingAddressPostcode($billingAddressPostcode)
    {
        $this->billingAddressPostcode = $billingAddressPostcode;

        return $this;
    }
}