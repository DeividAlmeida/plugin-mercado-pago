CREATE TABLE IF NOT EXISTS `ecommerce_mercadopago` ( 
`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ecommerce_mercadopago` (`id`,`token`) VALUES (NULL, NULL);

INSERT INTO `ecommerce_plugins` (`id`, `titulo`, `nome`, `tipo`, `path`, `img`, `status`) VALUES (2, 'Mercado Pago', 'mercadopago', 'gateways', 'ecommerce/plugins/gateways/mercadopago', 'ecommerce/plugins/gateways/mercadopago/wa/assets/img/mercadopago.jpg', '');