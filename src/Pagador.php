<?php


class Pagador {

	private $payerName;
	private $payerCpfCnpj;
	private $payerEmail;
	private $payerSecondaryEmail;
	private $payerPhone;
	private $payerBirthDate;


    /**
     * @return mixed
     */
    public function getPayerName()
    {
        return $this->payerName;
    }

    /**
     * @param mixed $payerName
     *
     * @return self
     */
    public function setPayerName($payerName)
    {
        $this->payerName = $payerName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerCpfCnpj()
    {
        return $this->payerCpfCnpj;
    }

    /**
     * @param mixed $payerCpfCnpj
     *
     * @return self
     */
    public function setPayerCpfCnpj($payerCpfCnpj)
    {
        $this->payerCpfCnpj = $payerCpfCnpj;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerEmail()
    {
        return $this->payerEmail;
    }

    /**
     * @param mixed $payerEmail
     *
     * @return self
     */
    public function setPayerEmail($payerEmail)
    {
        $this->payerEmail = $payerEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerSecondaryEmail()
    {
        return $this->payerSecondaryEmail;
    }

    /**
     * @param mixed $payerSecondaryEmail
     *
     * @return self
     */
    public function setPayerSecondaryEmail($payerSecondaryEmail)
    {
        $this->payerSecondaryEmail = $payerSecondaryEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerPhone()
    {
        return $this->payerPhone;
    }

    /**
     * @param mixed $payerPhone
     *
     * @return self
     */
    public function setPayerPhone($payerPhone)
    {
        $this->payerPhone = $payerPhone;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayerBirthDate()
    {
        return $this->payerBirthDate;
    }

    /**
     * @param mixed $payerBirthDate
     *
     * @return self
     */
    public function setPayerBirthDate($payerBirthDate)
    {
        $this->payerBirthDate = $payerBirthDate;

        return $this;
    }
}