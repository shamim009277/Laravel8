<?php

namespace App\PaymentGateway;

class PaymentFacade{

	protected static function getFacadeAccess(){

		return 'payment';
	}
}