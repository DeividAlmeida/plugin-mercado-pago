<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
$frete = 130.00;
// Configura credenciais
MercadoPago\SDK::setAccessToken('APP_USR-6746500504163026-100511-067db8df0d5d351ad6f4efaf67c69c57-177309895');

$preference = new MercadoPago\Preference();

$shipments = new MercadoPago\Shipments();
$shipments->cost = $frete;

  
# Building an item

$item = new MercadoPago\Item();
$item->id = "00001";
$item->title = "item"; 
$item->quantity = 1;
$item->unit_price = 100.26;

$item1 = new MercadoPago\Item();
$item1->id = "00001";
$item1->title = "item"; 
$item1->quantity = 1;
$item1->unit_price = 100.25;

$preference->items = array($item, $item1);
$preference->shipments = $shipments;
$preference->save(); # Save the preference and send the HTTP Request to create

# Return the HTML code for button
header('Location:'.$preference->init_point);
