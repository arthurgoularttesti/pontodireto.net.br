@extends('_template.default')

@section('title', @$title)
@section('content')

	<div class="p-container-padding">
		<div class="grid grid-cols-12 gap-gutter">
			<div class="col-span-12 flex justify-between items-end mb-4">
				<div>
					<h2 class="font-headline-md text-headline-md text-primary">{{ @$title }}</h2>
					<p class="text-on-surface-variant font-body-md">{{ @$description }}</p>
				</div>
				<div class="flex gap-3">
					<!-- <button class="bg-secondary-container text-white px-6 py-3 rounded font-label-bold flex items-center gap-2 shadow-md hover:brightness-110 active:scale-95 transition-all">
						<span class="material-symbols-outlined" data-icon="upload_file">upload_file</span>
						XML Entry
					</button> -->
					<button class="bg-primary text-white px-6 py-3 rounded font-label-bold flex items-center gap-2 shadow-md hover:brightness-125 active:scale-95 transition-all">
						<span class="material-symbols-outlined" data-icon="add">add</span>
						Add Product
					</button>
				</div>
			</div>
			<div class="col-span-12 space-y-gutter">
				<div class="bg-white rounded-xl border border-outline-variant shadow-sm overflow-hidden">
					<div class="p-4 border-b border-outline-variant bg-surface-container-lowest flex justify-between items-center">
						<h3 class="font-label-bold text-primary uppercase tracking-wider">Inventário de Produtos e Conversão de Volume</h3>
						<div class="flex gap-2">
							<span class="bg-success-container text-success px-2 py-1 rounded text-xs font-bold border border-success flex items-center gap-1">
								<span class="w-2 h-2 rounded-full bg-green-500"></span>
								Stock Sync: Active
							</span>
						</div>
					</div>
					<div class="overflow-x-auto">
						<table class="w-full text-left border-collapse">
							<thead class="bg-surface text-on-surface-variant text-[12px] uppercase font-bold tracking-widest border-b border-outline-variant">
								<tr>
									<th class="px-6 py-4">Product Details</th>
									<th class="px-6 py-4">Current Stock</th>
									<th class="px-6 py-4">Unit of Measure</th>
									<th class="px-6 py-4">Volume Conversion</th>
									<th class="px-6 py-4">Min. Level</th>
									<th class="px-6 py-4 text-right">Actions</th>
								</tr>
							</thead>
							<tbody class="divide-y divide-outline-variant">
								<tr class="hover:bg-surface-container-low transition-colors group">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div class="w-10 h-10 bg-surface rounded border border-outline-variant flex items-center justify-center">
												<span class="material-symbols-outlined text-primary" data-icon="liquor">liquor</span>
											</div>
											<div>
												<div class="font-label-bold text-primary">Heineken Premium Lager 330ml</div>
												<div class="text-xs text-on-surface-variant">SKU: HEI-001-LGR</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<div class="font-numeral-xl text-lg text-primary">242 <span class="text-sm font-medium text-on-surface-variant">units</span></div>
									</td>
									<td class="px-6 py-4">
										<span class="text-xs font-bold bg-slate-100 text-slate-700 px-2 py-1 rounded">Individual</span>
									</td>
									<td class="px-6 py-4">
										<div class="text-sm text-primary font-medium">1 Case = 24 Units</div>
										<div class="text-xs text-on-surface-variant italic">10 Cases + 2 Un</div>
									</td>
									<td class="px-6 py-4">
										<div class="flex items-center gap-2">
											<span class="w-2 h-2 rounded-full bg-green-500"></span>
											<span class="text-sm">48 units</span>
										</div>
									</td>
									<td class="px-6 py-4 text-right">
										<button class="text-primary hover:bg-primary hover:text-white p-2 rounded transition-all">
											<span class="material-symbols-outlined" data-icon="edit">edit</span>
										</button>
									</td>
								</tr>
								<tr class="hover:bg-surface-container-low transition-colors group">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div class="w-10 h-10 bg-surface rounded border border-outline-variant flex items-center justify-center">
												<span class="material-symbols-outlined text-primary" data-icon="local_drink">local_drink</span>
											</div>
											<div>
												<div class="font-label-bold text-primary">Coca-Cola Classic 2L</div>
												<div class="text-xs text-on-surface-variant">SKU: CC-CLA-2L0</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<div class="font-numeral-xl text-lg text-secondary-container">12 <span class="text-sm font-medium text-on-surface-variant">units</span></div>
									</td>
									<td class="px-6 py-4">
										<span class="text-xs font-bold bg-slate-100 text-slate-700 px-2 py-1 rounded">Individual</span>
									</td>
									<td class="px-6 py-4">
										<div class="text-sm text-primary font-medium">1 Pack = 6 Units</div>
										<div class="text-xs text-on-surface-variant italic">2 Packs + 0 Un</div>
									</td>
									<td class="px-6 py-4">
										<div class="flex items-center gap-2">
											<span class="w-2 h-2 rounded-full bg-orange-500 animate-pulse"></span>
											<span class="text-sm font-bold text-secondary-container">24 units</span>
										</div>
									</td>
									<td class="px-6 py-4 text-right">
										<button class="text-primary hover:bg-primary hover:text-white p-2 rounded transition-all">
											<span class="material-symbols-outlined" data-icon="edit">edit</span>
										</button>
									</td>
								</tr>
								<tr class="hover:bg-surface-container-low transition-colors group">
									<td class="px-6 py-4">
										<div class="flex items-center gap-3">
											<div class="w-10 h-10 bg-surface rounded border border-outline-variant flex items-center justify-center">
												<span class="material-symbols-outlined text-primary" data-icon="kitchen">kitchen</span>
											</div>
											<div>
												<div class="font-label-bold text-primary">Brahma Chopp 600ml</div>
												<div class="text-xs text-on-surface-variant">SKU: BR-CHP-600</div>
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<div class="font-numeral-xl text-lg text-primary">156 <span class="text-sm font-medium text-on-surface-variant">units</span></div>
									</td>
									<td class="px-6 py-4">
										<span class="text-xs font-bold bg-slate-100 text-slate-700 px-2 py-1 rounded">Individual</span>
									</td>
									<td class="px-6 py-4">
										<div class="text-sm text-primary font-medium">1 Crate = 12 Units</div>
										<div class="text-xs text-on-surface-variant italic">13 Crates + 0 Un</div>
									</td>
									<td class="px-6 py-4">
										<div class="flex items-center gap-2">
											<span class="w-2 h-2 rounded-full bg-green-500"></span>
											<span class="text-sm">36 units</span>
										</div>
									</td>
									<td class="px-6 py-4 text-right">
										<button class="text-primary hover:bg-primary hover:text-white p-2 rounded transition-all">
											<span class="material-symbols-outlined" data-icon="edit">edit</span>
										</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="p-4 bg-surface text-center">
						<button class="text-primary font-label-bold text-sm hover:underline">View All 1,248 Products</button>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection