<?php

include_once('Config.php');
include_once('Charge.php');
include_once('Payer.php');
include_once('Address.php');
include_once('PaymentStatus.php');

abstract class AbstractJuno {

	private $url = '';
	private $token = '';
	private $sandbox;

	public function options($options) {

		if(isset($options['token']) && isset($options['sandbox'])) {
			//verificando se o ambiente é de desenvolvimento ou de produção
			if($options['sandbox']) {
				$this->url = 'https://sandbox.boletobancario.com/boletofacil/integration/api/v1/';
			}else {
				$this->url = 'https://www.boletobancario.com/boletofacil/integration/api/v1/';
			}

			$this->token = $options['token'];//setando o token de autenticação
		}else {
			return false;
		}
	}

	/**
	* pega a url que sera enviada as requisições
	*/
	public function getUrl() {
		return $this->url;
	}

	/**
	* METODO PARA GERAR E ENVIAR COBRAÇA
	*/
	public function createCharge($data)
	{
		//CRIANDO OBJETO COBRANCA
		$charge = new Charge();

		$charge->setToken($this->token);
		$charge->setDescription($data['description']);
		$charge->setReference($data['reference']);
		$charge->setAmount($data['amount']);
		$charge->setTotalAmount($data['totalAmount']);
		$charge->setDueDate($data['dueDate']);
		$charge->setInstallments($data['installments']);
		$charge->setMaxOverdueDays($data['maxOverdueDays']);
		$charge->setFine($data['fine']);
		$charge->setInterest($data['interest']);
		$charge->setDiscountAmount($data['discountAmount']);
		$charge->setDiscountDays($data['discountDays']);
		$charge->setNotifyPayer($data['notifyPayer']);
		$charge->setNotificationUrl($data['notificationUrl']);
		$charge->setResponseType($data['responseType']);
		$charge->setFeeSchemaToken($data['feeSchemaToken']);
		$charge->setSplitRecipient($data['splitRecipient']);
		$charge->setPaymentTypes($data['paymentTypes']);
		$charge->setPaymentAdvance($data['paymentAdvance']);
		$charge->setCode($data['code']);

		//CRIANDO OBJETO PAGADOR
		$payer = new Payer();

		$payer->setPayerName($data['payerName']);
		$payer->setPayerCpfCnpj($data['payerCpfCnpj']);
		$payer->setPayerEmail($data['payerEmail']);
		$payer->setPayerSecondaryEmail($data['payerSecondaryEmail']);
		$payer->setPayerPhone($data['payerPhone']);
		$payer->setPayerBirthDate($data['payerBirthDate']);

		$charge->setPayer($payer);

		//CRIANDO OBJETO ENDERECO DO PAGADOR
		$address = new Address();

		$address->setBillingAddressStreet($data['billingAddressStreet']);
		$address->setBillingAddressNumber($data['billingAddressNumber']);
		$address->setBillingAddressComplement($data['billingAddressComplement']);
		$address->setBillingAddressNeighborhood($data['billingAddressNeighborhood']);
		$address->setBillingAddressCity($data['billingAddressCity']);
		$address->setBillingAddressState($data['billingAddressState']);
		$address->setBillingAddressStreet($data['billingAddressPostcode']);

		$payer->setAddress($address);


		$response = sendRequest($charge, $this->url . 'issue-charge');

		return $response;
	}

	
	public function paymentStatus($data) 
	{
		$paymentStatus = new PaymentStatus();

		$paymentStatus->setToken($this->token);
		$paymentStatus->setBeginDueDate($data['beginDueDate']);
		$paymentStatus->setEndDueDate($data['endDueDate']);
		$paymentStatus->setBeginPaymentDate($data['beginPaymentDate']);
		$paymentStatus->setEndPaymentDate($data['endPaymentDate']);
		$paymentStatus->setResponseType($data['responseType']);

		$response = sendRequest($paymentStatus, $this->url . 'list-charges');

		return $response;
	}

	public function fetchPaymentDetails($data) 
	{
		$paymentStatus = new PaymentStatus();

		$paymentStatus->setToken($this->token);
		$paymentStatus->setPaymentToken($data['paymentToken']);
		$paymentStatus->setResponseType($data['responseType']);

		$response = sendRequest($paymentStatus, $this->url . 'fetch-payment-details');

		return $response;
	}

	public function cancelCharge($data) 
	{
		//CRIANDO OBJETO COBRANCA
		$charge = new Charge();

		$charge->setToken($this->token);
		$charge->setCode($data['code']);
		$charge->setResponseType($data['responseType']);

		$response = sendRequest($charge, $this->url . 'cancel-charge');
	}
	
}