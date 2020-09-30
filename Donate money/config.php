<?php
require('stripe-php-master\init.php');

$public   ="pk_test_51HQz6IGJksE3bPeWMcaCJc1qnsGEf06R6aYrbN8Hh84Nr5KWXeev0DbCNJcOgps3wqAZKlPMatB8lg9XRf8q9q0U003Nak6J9O";
$private  ="sk_test_51HQz6IGJksE3bPeW5aXgK9XzZA1kSWBfvWCmkaUZ2SyODePrhk573LQTHXZFkMOGmTf1ucSFU2FQFSv6dURHiooi00hg1kcQnc";

\Stripe\Stripe::setApiKey($private);
?>