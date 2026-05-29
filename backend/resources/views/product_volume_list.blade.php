@extends('_template.default')

@section('title', @$title)
@section('content')

	<div class="p-3 grid grid-cols-1 lg:grid-cols-3 gap-gutter">
	
		<!-- Volume List (Transaction Style Table/Cards) -->
		<div class="lg:col-span-3 space-y-gutter">
			<div class="bg-surface-container-lowest border border-outline-variant rounded-xl shadow-sm overflow-hidden">
				<div class="p-6 border-b border-outline-variant flex items-center justify-between bg-surface-container-low">
					<h3 class="font-headline-md text-primary flex items-center gap-2">
						<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">layers</span>
						Gestão de Volumes e Empacotamento
					</h3>
					<div class="flex items-center gap-2 text-xs font-bold text-on-surface-variant">
						<span class="w-3 h-3 rounded-full bg-secondary-container"></span>
						3 Configurações Ativas
					</div>
				</div>
				<div class="divide-y divide-outline-variant">
					
					<!-- Item 1 -->
					<div class="p-6 hover:bg-surface-container-low transition-colors group">
						<div class="flex items-center justify-between">
						<div class="flex gap-4">
						<div class="w-12 h-12 rounded bg-primary-container text-white flex items-center justify-center font-black">x12</div>
						<div>
						<div class="flex items-center gap-2">
						<h4 class="font-headline-md text-primary">Fardo Plástico</h4>
						<span class="px-2 py-0.5 bg-surface-variant text-primary text-[10px] font-bold rounded">UNIDADES POR VOLUME: 12</span>
						</div>
						<p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mt-1">SKU: 7890123456789</p>
						</div>
						</div>
						<div class="text-right">
						<p class="text-xs text-on-surface-variant font-medium">Preço Proporcional</p>
						<p class="text-headline-md text-primary font-bold">R$ 222,00</p>
						</div>
						</div>
						<div class="mt-4 flex items-center justify-between">
						<div class="flex gap-3">
						<div class="flex items-center gap-1 text-[11px] font-medium px-2 py-1 bg-surface-container rounded border border-outline-variant">
						<span class="material-symbols-outlined text-[14px]">fitness_center</span> 6.2 kg
																</div>
						<div class="flex items-center gap-1 text-[11px] font-medium px-2 py-1 bg-surface-container rounded border border-outline-variant">
						<span class="material-symbols-outlined text-[14px]">square_foot</span> 40x25x20cm
																</div>
						</div>
						<div class="flex gap-2">
						<button class="material-symbols-outlined p-2 text-primary hover:bg-primary hover:text-white rounded-lg transition-all border border-primary">edit</button>
						<button class="material-symbols-outlined p-2 text-error hover:bg-error hover:text-white rounded-lg transition-all border border-error">delete</button>
						</div>
						</div>
						<!-- Visual Cost Indicator -->
						<div class="mt-4 pt-4 border-t border-dashed border-outline-variant">
						<div class="flex justify-between items-center mb-1">
						<span class="text-[10px] font-bold uppercase text-on-surface-variant">Eficiência de Custo por Unidade</span>
						<span class="text-[10px] font-bold text-secondary">R$ 18,50 / UN</span>
						</div>
						<div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
						<div class="h-full bg-secondary-container" style="width: 100%"></div>
						</div>
						</div>
					</div>

					<!-- Item 2 -->
					<div class="p-6 hover:bg-surface-container-low transition-colors group">
						<div class="flex items-center justify-between">
						<div class="flex gap-4">
						<div class="w-12 h-12 rounded bg-primary-container text-white flex items-center justify-center font-black">x24</div>
						<div>
						<div class="flex items-center gap-2">
						<h4 class="font-headline-md text-primary">Caixa Master</h4>
						<span class="px-2 py-0.5 bg-surface-variant text-primary text-[10px] font-bold rounded">UNIDADES POR VOLUME: 24</span>
						</div>
						<p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mt-1">SKU: 7890123456800</p>
						</div>
						</div>
						<div class="text-right">
						<p class="text-xs text-on-surface-variant font-medium">Preço Proporcional</p>
						<p class="text-headline-md text-secondary font-black">R$ 432,00</p>
						</div>
						</div>
						<div class="mt-4 flex items-center justify-between">
						<div class="flex gap-3">
						<div class="flex items-center gap-1 text-[11px] font-medium px-2 py-1 bg-surface-container rounded border border-outline-variant">
						<span class="material-symbols-outlined text-[14px]">fitness_center</span> 12.5 kg
																</div>
						<div class="flex items-center gap-1 text-[11px] font-medium px-2 py-1 bg-surface-container rounded border border-outline-variant">
						<span class="material-symbols-outlined text-[14px]">square_foot</span> 50x30x25cm
																</div>
						</div>
						<div class="flex gap-2">
						<button class="material-symbols-outlined p-2 text-primary hover:bg-primary hover:text-white rounded-lg transition-all border border-primary">edit</button>
						<button class="material-symbols-outlined p-2 text-error hover:bg-error hover:text-white rounded-lg transition-all border border-error">delete</button>
						</div>
						</div>
						<!-- Visual Cost Indicator (Showing discount) -->
						<div class="mt-4 pt-4 border-t border-dashed border-outline-variant">
						<div class="flex justify-between items-center mb-1">
						<span class="text-[10px] font-bold uppercase text-on-surface-variant">Eficiência de Custo por Unidade (Atacado -3%)</span>
						<span class="text-[10px] font-bold text-green-600">R$ 18,00 / UN</span>
						</div>
						<div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
						<div class="h-full bg-green-500" style="width: 97%"></div>
						</div>
						</div>
					</div>

					<!-- Item 3 -->
					<div class="p-6 hover:bg-surface-container-low transition-colors group">
						<div class="flex items-center justify-between">
						<div class="flex gap-4">
						<div class="w-12 h-12 rounded bg-primary-container text-white flex items-center justify-center font-black">xP</div>
						<div>
						<div class="flex items-center gap-2">
						<h4 class="font-headline-md text-primary">Pallet Industrial</h4>
						<span class="px-2 py-0.5 bg-surface-variant text-primary text-[10px] font-bold rounded">UNIDADES POR VOLUME: 2880</span>
						</div>
						<p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mt-1">SKU: PAL-IPA-BEER-01</p>
						</div>
						</div>
						<div class="text-right">
						<p class="text-xs text-on-surface-variant font-medium">Preço Proporcional</p>
						<p class="text-headline-md text-primary font-bold">R$ 48.960,00</p>
						</div>
						</div>
						<div class="mt-4 flex items-center justify-between">
						<div class="flex gap-3">
						<div class="flex items-center gap-1 text-[11px] font-medium px-2 py-1 bg-surface-container rounded border border-outline-variant">
						<span class="material-symbols-outlined text-[14px]">fitness_center</span> 1,440 kg
																</div>
						<div class="flex items-center gap-1 text-[11px] font-medium px-2 py-1 bg-surface-container rounded border border-outline-variant">
						<span class="material-symbols-outlined text-[14px]">square_foot</span> 120x100x160cm
																</div>
						</div>
						<div class="flex gap-2">
						<button class="material-symbols-outlined p-2 text-primary hover:bg-primary hover:text-white rounded-lg transition-all border border-primary">edit</button>
						<button class="material-symbols-outlined p-2 text-error hover:bg-error hover:text-white rounded-lg transition-all border border-error">delete</button>
						</div>
						</div>
						<!-- Visual Cost Indicator (High efficiency) -->
						<div class="mt-4 pt-4 border-t border-dashed border-outline-variant">
						<div class="flex justify-between items-center mb-1">
						<span class="text-[10px] font-bold uppercase text-on-surface-variant">Eficiência de Custo por Unidade (Atacado -8%)</span>
						<span class="text-[10px] font-bold text-green-600">R$ 17,00 / UN</span>
						</div>
						<div class="w-full h-2 bg-surface-container rounded-full overflow-hidden">
						<div class="h-full bg-green-500" style="width: 92%"></div>
						</div>
						</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection