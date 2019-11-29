<?php


class CreditCard {

	private $creditCardHash;
	private $creditCardStore;
	private $creditCardId;
	

    /**
     * @return mixed
     */
    public function getCreditCardHash()
    {
        return $this->creditCardHash;
    }

    /**
     * @param mixed $creditCardHash
     *
     * @return self
     */
    public function setCreditCardHash($creditCardHash)
    {
        $this->creditCardHash = $creditCardHash;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditCardStore()
    {
        return $this->creditCardStore;
    }

    /**
     * @param mixed $creditCardStore
     *
     * @return self
     */
    public function setCreditCardStore($creditCardStore)
    {
        $this->creditCardStore = $creditCardStore;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreditCardId()
    {
        return $this->creditCardId;
    }

    /**
     * @param mixed $creditCardId
     *
     * @return self
     */
    public function setCreditCardId($creditCardId)
    {
        $this->creditCardId = $creditCardId;

        return $this;
    }
}