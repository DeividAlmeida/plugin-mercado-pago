<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Configura credenciais
MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');

// Cria um objeto de preferência
$preference = new MercadoPago\Preference();

// Cria um item na preferência
$item = new MercadoPago\Item();
$item->title = 'Meu produto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();
?>
<form action="/processar_pagamento" method="POST">
  <script
   src="https://www.mercadopago.com.br/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id; ?>">
  </script>
</form>