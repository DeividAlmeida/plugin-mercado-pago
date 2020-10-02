<?php 
if(isset($_GET['statusmercadopago'])){
    $status =$_GET['statusmercadopago'];
    if($status == "true"){
      $callback = "checked";
    }else{ $callback = ""; }
    $query  = DBUpdate('ecommerce_plugins', array('status' => $callback), "nome = 'mercadopago'");
  }

  if(isset($_GET['mercadopago'])){

  $data = array(
    'usuario' =>        $_GET['usuario'],
    'senha' =>          $_GET['senha'],
    'token' =>          $_GET['token'],
    'moeda' =>          $_GET['moeda'],
    'link_retorno' =>   $_GET['link_retorno'],
    'link_cancelado' => $_GET['link_cancelado']
  );
  $query  = DBUpdate('ecommerce_mercadopago', $data, "id = '1'");
}