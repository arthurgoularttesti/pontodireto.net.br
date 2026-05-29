<?php

return [

	(object) ['label'=>'Dashboard', 'route'=>'dashboard', 'icon'=>'dashboard', 'permission'=>null, 'branch'=>false],
	(object) ['label'=>'Produtos', 'route'=>'product', 'icon'=>'inventory_2', 'permission'=>['product.view'], 'branch'=>false],
	(object) ['label'=>'Clientes', 'route'=>'client', 'icon'=>'group', 'permission'=>['client.view'], 'branch'=>false],
	(object) ['label'=>'Estoque', 'route'=>'stock', 'icon'=>'warehouse', 'permission'=>['stock.view'], 'branch'=>false],
	(object) ['label'=>'Financeiro', 'route'=>'financial', 'icon'=>'payments', 'permission'=>['finance.view'], 'branch'=>false],

];
