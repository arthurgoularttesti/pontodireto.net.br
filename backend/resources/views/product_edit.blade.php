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
				<div class="grid grid-cols-3 md:grid-cols-4 gap-6">
					<div class="col-span-3">
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Nome do Produto</label>
						<input type="text" name="name" value="{{ old('name', $data->name) }}" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md"  />
					</div>
					<div>
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Status</label>
						<select name="status" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md appearance-none">
							<option disabled hidden {{ empty(old('status', $data->status)) ? 'selected' : '' }}>Escolha um estado</option>

							@foreach ($statuses as $value => $label)

								<option value="{{ $value }}" {{ old('status', $data->status) == $value ? 'selected' : '' }}>{{ $label }}</option>

							@endforeach
							
						</select>
					</div>
					<div class="col-span-2">
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">SKU / Barcode</label>
						<div class="relative">
							<input type="text" name="sku" value="{{ old('sku', $data->sku) }}" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md pr-12" />
							<span class="material-symbols-outlined absolute right-3 top-3 text-outline">barcode_scanner</span>
						</div>
					</div>
					<div class="col-span-3 md:col-span-2">
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Categoria</label>
						<select name="category_id" class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md appearance-none">
							<option disabled hidden {{ empty(old('category_id', $data->category_id)) ? 'selected' : '' }}>Escolha uma categoria</option>

							@foreach ($categories as $category)

								<option value="{{ $category->id }}" {{ old('category_id', $data->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>

							@endforeach
							
						</select>
					</div>
				</div>
			</section>
			
			<!-- Product Image/Preview (Decorative Bento Element) -->
			<section class="col-span-12 lg:col-span-4 bg-surface-container border border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center relative overflow-hidden group">
				<img src="{{ $data->image_or_placeholder_url }}" alt="Imagem do Produto" class="w-48 h-48 object-cover rounded-full border-4 border-white shadow-xl mb-4 z-10" data-alt="Close-up of a craft beer bottle with a minimalist label on a dark textured background with dramatic lighting" />
				<input type="file" name="image" accept="image/*" />
			</section>

			<!-- Pricing Section -->
			<section class="col-span-12 bg-white border border-outline-variant rounded-xl p-8 shadow-sm">
				<div class="flex items-center gap-3 mb-6">
					<span class="material-symbols-outlined text-orange-600">payments</span>
					<h3 class="font-headline-md text-headline-md">Preço</h3>
				</div>
				<div class="space-y-6">
					<div class="flex gap-4">
						<div class="flex-1">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Preço (R$)</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-numeral-xl text-headline-md" step="0.01" type="number" name="price" step="0.01" value="{{ old('value', $data->price) }}" />
						</div>
						<div class="flex-1">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Custo Médio (R$)</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-numeral-xl text-headline-md text-outline border-dashed" type="text" value="R$ {{ number_format($data->GetMediumPrice(), 2, ',', '.') }}" disabled />
						</div>
					</div>
					<div class="bg-surface-container-low p-6 rounded-lg border-2 border-dashed border-outline-variant">
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Margem de Venda Final</label>
						<div class="flex items-end gap-2">
							<span class="font-display-price text-display-price text-primary">38,8%</span>
							<span class="text-on-surface-variant mb-2 font-body-md">/ por unidade</span>
						</div>
						<p class="text-xs text-secondary font-label-bold mt-2">Lucro esperado: R$ 3.83 por unidade</p>
					</div>
				</div>
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