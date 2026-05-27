<?php

return [

	(object) ['label'=>'Dashboard', 'route'=>'dashboard', 'icon'=>'dashboard', 'permission'=>null],
	(object) ['label'=>'Produtos', 'route'=>'product', 'icon'=>'inventory_2', 'permission'=>['product.view']],
	(object) ['label'=>'Clientes', 'route'=>'client', 'icon'=>'group', 'permission'=>['client.view']],
	(object) ['label'=>'Estoque', 'route'=>'stock', 'icon'=>'warehouse', 'permission'=>['stock.view']],
	(object) ['label'=>'Financeiro', 'route'=>'financial', 'icon'=>'payments', 'permission'=>['finance.view']],

];
