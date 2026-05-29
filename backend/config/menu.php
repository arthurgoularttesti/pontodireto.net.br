<?php

return [

	(object) ['label'=>'Dashboard', 'route'=>'dashboard', 'icon'=>'dashboard', 'permission'=>null, 'branch'=>false],
	(object) ['label'=>'Produtos', 'route'=>'product', 'icon'=>'inventory_2', 'permission'=>['product.view'], 'branch'=>true],
	(object) ['label'=>'Clientes', 'route'=>'client', 'icon'=>'group', 'permission'=>['client.view'], 'branch'=>true],
	(object) ['label'=>'Estoque', 'route'=>'stock', 'icon'=>'warehouse', 'permission'=>['stock.view'], 'branch'=>true],
	(object) ['label'=>'Financeiro', 'route'=>'financial', 'icon'=>'payments', 'permission'=>['finance.view'], 'branch'=>true],

];
