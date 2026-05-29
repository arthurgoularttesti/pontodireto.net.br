@extends('_template.default')

@section('title', @$title)
@section('content')

	<form class="flex-1 p-6 overflow-y-auto" action="" method="post" enctype="multipart/form-data">

		@csrf
		
		<div class="flex justify-between items-center mb-8">
			<div>
				<h2 class="font-headline-lg text-headline-lg text-primary">{{ @$title }}</h2>
				<p class="font-body-md text-body-md text-on-surface-variant">{{ @$description }}</p>
			</div>
			<div class="flex gap-4 hidden sm:block md:block">
				<a href="{{ route('product') }}" class="px-6 py-target-min font-label-bold text-label-bold border-2 border-outline-variant text-primary rounded-lg hover:bg-surface-container transition-all">
					Cancelar
				</a>
				<button type="submit" class="px-8 py-target-min font-label-bold text-label-bold bg-secondary-container text-white rounded-lg hover:brightness-110 shadow-md transition-all active:scale-95">
					Salvar Alterações
				</button>
			</div>
		</div>

		<!-- Bento Grid Layout -->
		<div class="grid grid-cols-12 gap-gutter">

			<!-- Basic Info Section -->
			<section class="col-span-12 lg:col-span-8 bg-white border border-outline-variant rounded-xl p-8 shadow-sm">
				
				<div class="flex items-center gap-3 mb-6">
					<span class="material-symbols-outlined text-orange-600">info</span>
					<h3 class="font-headline-md text-headline-md">Informações Básicas</h3>
				</div>
				
				<div class="grid grid-cols-4 md:grid-cols-4 gap-6">
					
					@include('_components.text', [
						'columns'		=> 3,
						'label'			=> 'Nome do Produto',
						'field'			=> 'name',
						'data'			=> $data,
					])
					
					@include('_components.select', [
						'columns'		=> 1,
						'label'			=> 'Status',
						'placeholder'	=> 'Escolha um estado',
						'field'			=> 'status',
						'data'			=> $data,
						'options'		=> $statuses,
					])

					@include('_components.text', [
						'columns'		=> 4,
						'label'			=> 'Descrição Reduzida do Produto',
						'field'			=> 'description_short',
						'data'			=> $data,
					])

					@include('_components.textarea', [
						'columns'		=> 4,
						'label'			=> 'Descrição Comercial do Produto',
						'field'			=> 'description_long',
						'data'			=> $data,
					])
					
					@include('_components.text', [
						'columns'		=> 2,
						'label'			=> 'Código de Barras',
						'field'			=> 'sku',
						'data'			=> $data,
						'icon'			=> 'barcode_scanner',
					])

					@include('_components.select', [
						'columns'		=> 2,
						'label'			=> 'Categoria',
						'placeholder'	=> 'Escolha uma categoria',
						'field'			=> 'category_id',
						'data'			=> $data,
						'options'		=> $categories->keyBy('id')->map(function ($item) {return $item->name;}),
					])
					
				</div>
			</section>
			
			<!-- Product Image/Preview -->
			<section class="col-span-12 lg:col-span-4 bg-surface-container border border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center relative overflow-hidden group">
				<img src="{{ $data->image_or_placeholder_url }}" alt="Imagem do Produto" class="w-48 h-48 object-cover rounded-full border-4 border-white shadow-xl mb-4 z-10" data-alt="Close-up of a craft beer bottle with a minimalist label on a dark textured background with dramatic lighting" />
				<input class="w-full" type="file" name="image" accept="image/*" />
			</section>

			<!-- Pricing Section -->
			<section class="col-span-12 lg:col-span-8 bg-white border border-outline-variant rounded-xl p-8 shadow-sm">
				<div class="flex items-center gap-3 mb-6">
					<span class="material-symbols-outlined text-orange-600">payments</span>
					<h3 class="font-headline-md text-headline-md">Preço</h3>
				</div>
				<div class="space-y-6">
					<div class="flex gap-4">
						<div class="flex-1">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Preço de Venda (R$)</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-numeral-xl text-headline-md" step="0.01" type="number" name="price" step="0.01" value="{{ old('value', $data->price) }}" />
						</div>
						<div class="flex-1">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Custo Médio em Estoque (R$)</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-numeral-xl text-headline-md text-outline border-dashed" type="text" value="R$ {{ number_format($data->GetMediumPrice(), 2, ',', '.') }}" disabled />
						</div>
					</div>
					<!-- <div class="bg-surface-container-low p-6 rounded-lg border-2 border-dashed border-outline-variant">
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Margem de Venda Final</label>
						<div class="flex items-end gap-2">
							<span class="font-display-price text-display-price text-primary">38,8%</span>
							<span class="text-on-surface-variant mb-2 font-body-md">/ por unidade</span>
						</div>
						<p class="text-xs text-secondary font-label-bold mt-2">Lucro esperado: R$ 3.83 por unidade</p>
					</div> -->
				</div>
			</section>

			<section class="col-span-12 lg:col-span-4 bg-white border border-slate-200 rounded-xl shadow-sm overflow-hidden flex flex-col max-h-[600px]">
				<div class="px-6 py-4 border-b border-slate-100 bg-slate-50/50 flex items-center justify-between">
					<div class="flex items-center gap-2">
						<span class="material-symbols-outlined text-primary text-xl">history</span>
						<h2 class="font-label-bold text-primary uppercase tracking-tight">Histórico de Alterações</h2>
					</div>
					<span class="bg-slate-200 text-slate-600 text-[10px] px-2 py-0.5 rounded-full font-bold">4 ENTRADAS</span>
				</div>
				<div class="p-0 overflow-y-auto custom-scrollbar flex-1">
					<div class="divide-y divide-slate-50">
						
						<!-- Log Entry 1 -->
						<div class="p-4 hover:bg-slate-50 transition-all cursor-default">
							<div class="flex items-start justify-between mb-2">
								<div class="flex items-center gap-2">
									<div class="w-8 h-8 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xs font-bold">JS</div>
									<span class="text-sm font-bold text-primary">João Silva</span>
								</div>
								<span class="text-[10px] text-slate-400 font-medium">24/10/2023 14:30</span>
							</div>
							<p class="text-xs text-slate-500 pl-10">Campos alterados: <span class="font-semibold text-secondary">Preço, Descrição</span></p>
						</div>
						
						<!-- Log Entry 2 -->
						<div class="p-4 hover:bg-slate-50 transition-all cursor-default">
							<div class="flex items-start justify-between mb-2">
								<div class="flex items-center gap-2">
									<div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">MC</div>
									<span class="text-sm font-bold text-primary">Maria Costa</span>
								</div>
								<span class="text-[10px] text-slate-400 font-medium">20/10/2023 11:15</span>
							</div>
							<p class="text-xs text-slate-500 pl-10">Campos alterados: <span class="font-semibold text-secondary">Estoque Mínimo, Categoria</span></p>
						</div>
						
						<!-- Log Entry 3 -->
						<div class="p-4 hover:bg-slate-50 transition-all cursor-default opacity-70">
							<div class="flex items-start justify-between mb-2">
								<div class="flex items-center gap-2">
									<div class="w-8 h-8 rounded-full bg-slate-100 text-slate-600 flex items-center justify-center text-xs font-bold">SYS</div>
									<span class="text-sm font-bold text-primary">System Autom.</span>
								</div>
								<span class="text-[10px] text-slate-400 font-medium">15/10/2023 03:00</span>
							</div>
							<p class="text-xs text-slate-500 pl-10">Sincronização de estoque efetuada.</p>
						</div>
						
						<!-- Log Entry 4 -->
						<div class="p-4 hover:bg-slate-50 transition-all cursor-default opacity-70">
							<div class="flex items-start justify-between mb-2">
								<div class="flex items-center gap-2">
									<div class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">MC</div>
									<span class="text-sm font-bold text-primary">Maria Costa</span>
								</div>
								<span class="text-[10px] text-slate-400 font-medium">10/10/2023 09:45</span>
							</div>
							<p class="text-xs text-slate-500 pl-10">Produto criado no sistema.</p>
						</div>
					</div>
				</div>
				<!-- <div class="p-4 border-t border-slate-100 text-center">
					<button class="text-xs text-primary font-bold hover:underline">Ver Histórico Completo</button>
				</div> -->
			</section>
			
		</div>
		<!-- Action Footer Mobile Only (Visible on small screens) -->
		<div class="mt-8 flex flex-col gap-3 lg:hidden">
			<button class="w-full py-target-min font-label-bold text-label-bold bg-secondary-container text-white rounded-lg shadow-md">
				Save Changes
			</button>
			<button class="w-full py-target-min font-label-bold text-label-bold border-2 border-outline-variant text-primary rounded-lg">
				Cancel
			</button>
		</div>
	</form>

@endsection