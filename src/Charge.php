<?php

include_once('Config.php');


class Charge {

    private $payer;
	private $description;
	private $reference;
	private $amount;
	private $totalAmount;
	private $dueDate;
	private $installments;
	private $maxOverdueDays;
	private $fine;
	private $interest;
	private $discountAmount;
	private $discountDays;
	private $notifyPayer;
	private $notificationUrl;
	private $feeSchemaToken;
	private $splitRecipient;
	private $paymentTypes;
	private $paymentAdvance;
	private $code;
	private $responseType;


	public function create()
	{
		$response = sendRequest($data, 'issue-charge');
	}



    /**
     * @return mixed
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param mixed $payer
     *
     * @return self
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

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
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @param mixed $totalAmount
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param mixed $dueDate
     *
     * @return self
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @param mixed $installments
     *
     * @return self
     */
    public function setInstallments($installments)
    {
        $this->installments = $installments;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxOverdueDays()
    {
        return $this->maxOverdueDays;
    }

    /**
     * @param mixed $maxOverdueDays
     *
     * @return self
     */
    public function setMaxOverdueDays($maxOverdueDays)
    {
        $this->maxOverdueDays = $maxOverdueDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFine()
    {
        return $this->fine;
    }

    /**
     * @param mixed $fine
     *
     * @return self
     */
    public function setFine($fine)
    {
        $this->fine = $fine;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @param mixed $interest
     *
     * @return self
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * @param mixed $discountAmount
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountDays()
    {
        return $this->discountDays;
    }

    /**
     * @param mixed $discountDays
     *
     * @return self
     */
    public function setDiscountDays($discountDays)
    {
        $this->discountDays = $discountDays;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotifyPayer()
    {
        return $this->notifyPayer;
    }

    /**
     * @param mixed $notifyPayer
     *
     * @return self
     */
    public function setNotifyPayer($notifyPayer)
    {
        $this->notifyPayer = $notifyPayer;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    /**
     * @param mixed $notificationUrl
     *
     * @return self
     */
    public function setNotificationUrl($notificationUrl)
    {
        $this->notificationUrl = $notificationUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeeSchemaToken()
    {
        return $this->feeSchemaToken;
    }

    /**
     * @param mixed $feeSchemaToken
     *
     * @return self
     */
    public function setFeeSchemaToken($feeSchemaToken)
    {
        $this->feeSchemaToken = $feeSchemaToken;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSplitRecipient()
    {
        return $this->splitRecipient;
    }

    /**
     * @param mixed $splitRecipient
     *
     * @return self
     */
    public function setSplitRecipient($splitRecipient)
    {
        $this->splitRecipient = $splitRecipient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentTypes()
    {
        return $this->paymentTypes;
    }

    /**
     * @param mixed $paymentTypes
     *
     * @return self
     */
    public function setPaymentTypes($paymentTypes)
    {
        $this->paymentTypes = $paymentTypes;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAdvance()
    {
        return $this->paymentAdvance;
    }

    /**
     * @param mixed $paymentAdvance
     *
     * @return self
     */
    public function setPaymentAdvance($paymentAdvance)
    {
        $this->paymentAdvance = $paymentAdvance;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

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