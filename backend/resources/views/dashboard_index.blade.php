@extends('_template.default')

@section('title', @$title)
@section('content')

	<!-- Dashboard Canvas -->
	<div class="p-container-padding space-y-6">

		<!-- Hero Metrics: Bento Style -->
		<div class="grid grid-cols-1 md:grid-cols-4 gap-gutter">

			<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between h-40">
				<div class="flex justify-between items-start">
					<div class="p-2 bg-green-50 rounded-lg">
						<span class="material-symbols-outlined text-green-600" data-icon="payments">payments</span>
					</div>
					<span class="text-xs font-label-bold text-green-600 bg-green-50 px-2 py-1 rounded">+12.5%</span>
				</div>
				<div>
					<p class="text-on-surface-variant font-label-bold uppercase text-[10px] tracking-widest">Daily Revenue</p>
					<h2 class="font-display-price text-display-price text-on-surface">R$ 4.280,50</h2>
				</div>
			</div>

			<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between h-40">
				<div class="flex justify-between items-start">
					<div class="p-2 bg-blue-50 rounded-lg">
						<span class="material-symbols-outlined text-blue-600" data-icon="shopping_cart">shopping_cart</span>
					</div>
					<span class="text-xs font-label-bold text-blue-600 bg-blue-50 px-2 py-1 rounded">142 items</span>
				</div>
				<div>
					<p class="text-on-surface-variant font-label-bold uppercase text-[10px] tracking-widest">Total Sales</p>
					<h2 class="font-numeral-xl text-numeral-xl text-on-surface">38 Orders</h2>
				</div>
			</div>

			<div class="bg-surface-container-lowest p-6 rounded-xl border border-outline-variant shadow-sm flex flex-col justify-between h-40">
				<div class="flex justify-between items-start">
					<div class="p-2 bg-orange-50 rounded-lg">
						<span class="material-symbols-outlined text-secondary-container" data-icon="menu_book">menu_book</span>
					</div>
					<span class="text-xs font-label-bold text-orange-600 bg-orange-50 px-2 py-1 rounded">Action Required</span>
				</div>
				<div>
					<p class="text-on-surface-variant font-label-bold uppercase text-[10px] tracking-widest">Pending (Caderneta)</p>
					<h2 class="font-display-price text-[32px] leading-tight text-secondary">R$ 1.124,00</h2>
				</div>
			</div>

			<div class="bg-error-container/20 p-6 rounded-xl border border-error/20 shadow-sm flex flex-col justify-between h-40">
				<div class="flex justify-between items-start">
					<div class="p-2 bg-error-container rounded-lg">
						<span class="material-symbols-outlined text-error" data-icon="warning">warning</span>
					</div>
				</div>
				<div>
					<p class="text-error font-label-bold uppercase text-[10px] tracking-widest">Low Stock Alerts</p>
					<h2 class="font-numeral-xl text-numeral-xl text-error">07 SKUs</h2>
				</div>
			</div>
		</div>

		<!-- Main Split Layout -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
			
			<!-- Inventory Health (Vasilhames) -->
			<div class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden">
				<div class="px-6 py-4 border-b border-outline-variant flex justify-between items-center">
					<div class="flex items-center gap-2">
						<span class="material-symbols-outlined text-primary" data-icon="liquor">liquor</span>
						<h3 class="font-headline-md text-headline-md text-primary">Inventory Health: Bottle Returns</h3>
					</div>
					<button class="text-xs font-label-bold text-secondary-container border border-secondary-container px-3 py-1 rounded hover:bg-secondary-container hover:text-white transition-colors">RECONCILE ALL</button>
				</div>
				<div class="p-6">
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						
					<!-- Bottle Stat 1 -->
						<div class="p-4 rounded-lg bg-surface border border-outline-variant flex items-center gap-4">
						<div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center">
							<span class="material-symbols-outlined text-slate-600" data-icon="nest_multi_room">nest_multi_room</span>
						</div>
						<div>
							<p class="text-xs font-label-bold text-on-surface-variant uppercase">Beer Cases (600ml)</p>
							<div class="flex items-baseline gap-2">
								<span class="font-numeral-xl text-2xl text-on-surface">42</span>
								<span class="text-xs text-slate-500">In Stock</span>
							</div>
							<div class="w-full bg-slate-200 h-1.5 rounded-full mt-2">
								<div class="bg-orange-500 h-1.5 rounded-full w-[85%]"></div>
							</div>
						</div>
					</div>

					<!-- Bottle Stat 2 -->
					<div class="p-4 rounded-lg bg-surface border border-outline-variant flex items-center gap-4">
						<div class="w-12 h-12 rounded-full bg-slate-100 flex items-center justify-center">
							<span class="material-symbols-outlined text-slate-600" data-icon="label">label</span>
						</div>
						<div>
							<p class="text-xs font-label-bold text-on-surface-variant uppercase">Empty Liters</p>
							<div class="flex items-baseline gap-2">
								<span class="font-numeral-xl text-2xl text-on-surface">118</span>
								<span class="text-xs text-slate-500">Pending Return</span>
							</div>
							<div class="w-full bg-slate-200 h-1.5 rounded-full mt-2">
								<div class="bg-secondary h-1.5 rounded-full w-[40%]"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-8 overflow-hidden rounded-lg border border-outline-variant">
					<table class="w-full text-left">
						<thead class="bg-slate-50">
							<tr>
								<th class="px-4 py-3 text-xs font-label-bold text-on-surface-variant uppercase">Type</th>
								<th class="px-4 py-3 text-xs font-label-bold text-on-surface-variant uppercase">Status</th>
								<th class="px-4 py-3 text-xs font-label-bold text-on-surface-variant uppercase text-right">Quantity</th>
								<th class="px-4 py-3 text-xs font-label-bold text-on-surface-variant uppercase text-right">Value (Dep.)</th>
							</tr>
						</thead>
						<tbody class="divide-y divide-outline-variant">
							<tr class="hover:bg-slate-50 transition-colors">
								<td class="px-4 py-3 font-body-md text-on-surface">Skol 600ml Glass</td>
								<td class="px-4 py-3">
									<span class="bg-green-100 text-green-700 text-[10px] px-2 py-0.5 rounded-full font-bold">STABLE</span>
								</td>
								<td class="px-4 py-3 font-numeral-xl text-sm text-right">240</td>
								<td class="px-4 py-3 font-numeral-xl text-sm text-right">R$ 480,00</td>
							</tr>
							<tr class="hover:bg-slate-50 transition-colors">
								<td class="px-4 py-3 font-body-md text-on-surface">Brahma 600ml Glass</td>
								<td class="px-4 py-3">
									<span class="bg-orange-100 text-orange-700 text-[10px] px-2 py-0.5 rounded-full font-bold">LOW STOCK</span>
								</td>
								<td class="px-4 py-3 font-numeral-xl text-sm text-right">12</td>
								<td class="px-4 py-3 font-numeral-xl text-sm text-right">R$ 24,00</td>
							</tr>
							<tr class="hover:bg-slate-50 transition-colors">
								<td class="px-4 py-3 font-body-md text-on-surface">Soda Liters (Coke)</td>
								<td class="px-4 py-3">
									<span class="bg-green-100 text-green-700 text-[10px] px-2 py-0.5 rounded-full font-bold">STABLE</span>
								</td>
								<td class="px-4 py-3 font-numeral-xl text-sm text-right">56</td>
								<td class="px-4 py-3 font-numeral-xl text-sm text-right">R$ 112,00</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		
		<!-- Low Stock & Notifications Panel -->
		<div class="space-y-gutter">
		<!-- Low Stock Alerts -->
		<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm h-full">
		<div class="px-6 py-4 border-b border-outline-variant flex justify-between items-center">
		<h3 class="font-headline-md text-lg text-primary">Alerts</h3>
		<span class="bg-error text-white text-[10px] px-2 py-0.5 rounded font-bold">07 CRITICAL</span>
		</div>
		<div class="p-4 space-y-3">
		<div class="p-3 bg-error-container/10 border-l-4 border-error rounded flex items-center justify-between">
		<div class="flex items-center gap-3">
		<span class="material-symbols-outlined text-error" data-icon="inventory">inventory</span>
		<div>
		<p class="text-sm font-bold text-on-surface">Skol Beats 269ml</p>
		<p class="text-[10px] text-error font-medium uppercase">Only 4 units left</p>
		</div>
		</div>
		<button class="p-2 hover:bg-error-container/20 rounded transition-colors">
		<span class="material-symbols-outlined text-error text-sm" data-icon="shopping_basket">shopping_basket</span>
		</button>
		</div>
		<div class="p-3 bg-error-container/10 border-l-4 border-error rounded flex items-center justify-between">
		<div class="flex items-center gap-3">
		<span class="material-symbols-outlined text-error" data-icon="inventory">inventory</span>
		<div>
		<p class="text-sm font-bold text-on-surface">Brahma Duplo Malte</p>
		<p class="text-[10px] text-error font-medium uppercase">Out of Stock</p>
		</div>
		</div>
		<button class="p-2 hover:bg-error-container/20 rounded transition-colors">
		<span class="material-symbols-outlined text-error text-sm" data-icon="shopping_basket">shopping_basket</span>
		</button>
		</div>
		<div class="p-3 bg-secondary-container/10 border-l-4 border-secondary-container rounded flex items-center justify-between">
		<div class="flex items-center gap-3">
		<span class="material-symbols-outlined text-secondary-container" data-icon="inventory">inventory</span>
		<div>
		<p class="text-sm font-bold text-on-surface">Cigarettes (Lucky Strike)</p>
		<p class="text-[10px] text-secondary font-medium uppercase">Below 20%</p>
		</div>
		</div>
		<button class="p-2 hover:bg-secondary-container/20 rounded transition-colors">
		<span class="material-symbols-outlined text-secondary-container text-sm" data-icon="shopping_basket">shopping_basket</span>
		</button>
		</div>
		<button class="w-full py-2 text-primary font-label-bold text-sm bg-slate-50 hover:bg-slate-100 border border-slate-200 rounded-lg transition-colors mt-2 uppercase tracking-wide">
										Full Inventory Report
									</button>
		</div>
		</div>
		<!-- Pending Payments (Caderneta) Summary -->
		<div class="bg-primary text-white rounded-xl shadow-lg p-6 relative overflow-hidden">
		<div class="relative z-10">
		<h4 class="text-orange-500 font-label-bold uppercase text-xs tracking-widest mb-1">Caderneta Balance</h4>
		<p class="text-2xl font-numeral-xl mb-4">R$ 1.124,00</p>
		<div class="space-y-3">
		<div class="flex justify-between items-center text-xs border-b border-white/10 pb-2">
		<span>José Rodrigues</span>
		<span class="font-bold">R$ 420,00</span>
		</div>
		<div class="flex justify-between items-center text-xs border-b border-white/10 pb-2">
		<span>Maria Souza</span>
		<span class="font-bold">R$ 115,50</span>
		</div>
		<div class="flex justify-between items-center text-xs border-b border-white/10 pb-2">
		<span>Antônio Carlos</span>
		<span class="font-bold">R$ 88,00</span>
		</div>
		</div>
		<button class="mt-4 w-full bg-orange-600 hover:bg-orange-500 text-white font-bold py-2 rounded shadow-md transition-all uppercase text-xs">
										View Delinquent List
									</button>
		</div>
		<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-white/5 text-[120px] pointer-events-none" data-icon="history_edu">history_edu</span>
		</div>
		</div>
		</div>
		<!-- Operational Activity Chart Mock -->
		<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-sm overflow-hidden">
		<div class="px-6 py-4 border-b border-outline-variant">
		<h3 class="font-headline-md text-headline-md text-primary">Sales Velocity (Last 24 Hours)</h3>
		</div>
		<div class="p-6">
		<div class="h-48 w-full bg-slate-50 rounded-lg border-b border-l border-slate-200 relative flex items-end px-4 gap-2">
		<!-- Simple visual bar chart mock -->
		<div class="flex-1 bg-slate-200 h-[20%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[15%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[45%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[30%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[60%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[85%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-orange-600 h-[100%] rounded-t shadow-lg relative group">
		<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-white px-2 py-1 rounded text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">Peak</div>
		</div>
		<div class="flex-1 bg-slate-200 h-[70%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[40%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[25%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[10%] rounded-t transition-all hover:bg-orange-400"></div>
		<div class="flex-1 bg-slate-200 h-[5%] rounded-t transition-all hover:bg-orange-400"></div>
		</div>
		<div class="flex justify-between mt-2 text-[10px] text-on-surface-variant font-label-bold uppercase">
		<span>08:00</span>
		<span>12:00</span>
		<span>16:00 (Peak)</span>
		<span>20:00</span>
		<span>00:00</span>
		</div>
		</div>
	</div>
	</div>
	</main>

	<!-- Floating Action Button -->
	<button class="fixed bottom-8 right-8 w-16 h-16 bg-secondary-container text-white rounded-full shadow-2xl flex items-center justify-center hover:scale-105 active:scale-95 transition-transform z-50">
		<span class="material-symbols-outlined text-[32px]" data-icon="add_shopping_cart">add_shopping_cart</span>
	</button>

@endsection