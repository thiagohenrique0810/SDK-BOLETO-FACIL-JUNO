<?php


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

	

	
}