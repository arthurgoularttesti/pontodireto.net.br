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
			<div class="flex gap-4">
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
				<img alt="Product preview" class="w-48 h-48 object-cover rounded-full border-4 border-white shadow-xl mb-4 z-10" data-alt="Close-up of a craft beer bottle with a minimalist label on a dark textured background with dramatic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_R1n_aEdMFUrOzkJmCKc0EulLc_V2G-4aROxZB7FvHL8T7fJWDMPcV34JUfrWWrtRWwiYd8hejipzhmTL-V8gO46rP_UEB3v44ttdUm4MVuimVNc8ETrD_iEP0xrCCMQgOmiRQpNrdRsEn0sYmbnDx9976A2FO2F9jaZ6iZBqcObRf0GvJ1eSC7m_uQqGulb1ic0Vya6EV690H35IAGo95kl1sBsigG0K1Q337wN2cKQs2_1fMDMhV-vqJ8veAVgP8u4Y7huDwuQ" />
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

			<!-- Critical Volume Management -->
			
			@if ($data->exists)

				<section class="col-span-12 bg-white border border-outline-variant rounded-xl p-8 shadow-sm">
					<div class="flex items-center gap-3 mb-6 justify-between">
						<div class="flex items-center gap-3">
							<span class="material-symbols-outlined text-orange-600">inventory</span>
							<h3 class="font-headline-md text-headline-md">Gestão de Volumes</h3>
						</div>
						<a href="{{ route('product.volume.create', [$data->id]) }}" class="flex gap-2 px-3 py-1.5 bg-blue-900 text-white text-[10px] font-bold uppercase tracking-widest rounded hover:bg-blue-800 transition-colors">
							&#35; Novo Pedido
						</a>
					</div>
					<div class="space-y-8">
						<div class="bg-surface-container-lowest overflow-hidden">
						
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
				</section>

			@endif
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