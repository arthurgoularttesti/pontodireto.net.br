@extends('_template.default')

@section('title', @$title)
@section('content')

	<div class="flex-1 p-6 overflow-y-auto">
		
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
					<h3 class="font-headline-md text-headline-md">Basic Info</h3>
				</div>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
					<div class="col-span-2">
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Product Name</label>
						<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md" type="text" value="Premium Craft Beer - IPA 500ml">
					</div>
					<div>
						<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">SKU / Barcode</label>
						<div class="relative">
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md pr-12" type="text" value="7891234567890">
							<span class="material-symbols-outlined absolute right-3 top-3 text-outline">barcode_scanner</span>
							</div>
							</div>
							<div>
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Category</label>
							<select class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-body-md appearance-none">
							<option>Beverages</option>
							<option>Food</option>
							<option>Alcoholic Drinks</option>
							<option>Tobacco</option>
							</select>
							</div>
							</div>
							</section>
							<!-- Product Image/Preview (Decorative Bento Element) -->
							<section class="col-span-12 lg:col-span-4 bg-surface-container border border-outline-variant rounded-xl p-6 flex flex-col items-center justify-center relative overflow-hidden group">
							<img alt="Product preview" class="w-48 h-48 object-cover rounded-full border-4 border-white shadow-xl mb-4 z-10" data-alt="Close-up of a craft beer bottle with a minimalist label on a dark textured background with dramatic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_R1n_aEdMFUrOzkJmCKc0EulLc_V2G-4aROxZB7FvHL8T7fJWDMPcV34JUfrWWrtRWwiYd8hejipzhmTL-V8gO46rP_UEB3v44ttdUm4MVuimVNc8ETrD_iEP0xrCCMQgOmiRQpNrdRsEn0sYmbnDx9976A2FO2F9jaZ6iZBqcObRf0GvJ1eSC7m_uQqGulb1ic0Vya6EV690H35IAGo95kl1sBsigG0K1Q337wN2cKQs2_1fMDMhV-vqJ8veAVgP8u4Y7huDwuQ">
							<button class="z-10 bg-white text-primary px-4 py-2 rounded-full font-label-bold text-label-bold flex items-center gap-2 shadow-sm hover:bg-primary hover:text-white transition-all">
							<span class="material-symbols-outlined text-sm">edit</span>
														Change Image
													</button>
							<div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-secondary-container to-transparent"></div>
							</section>
							<!-- Pricing Section -->
							<section class="col-span-12 lg:col-span-6 bg-white border border-outline-variant rounded-xl p-8 shadow-sm">
							<div class="flex items-center gap-3 mb-6">
							<span class="material-symbols-outlined text-orange-600">payments</span>
							<h3 class="font-headline-md text-headline-md">Pricing</h3>
							</div>
							<div class="space-y-6">
							<div class="flex gap-4">
							<div class="flex-1">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Cost Price ($)</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-numeral-xl text-headline-md" step="0.01" type="number" value="8.50">
							</div>
							<div class="flex-1">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Markup (%)</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-numeral-xl text-headline-md" type="number" value="45">
							</div>
							</div>
							<div class="bg-surface-container-low p-6 rounded-lg border-2 border-dashed border-outline-variant">
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Final Sale Price</label>
							<div class="flex items-end gap-2">
							<span class="font-display-price text-display-price text-primary">$ 12.33</span>
							<span class="text-on-surface-variant mb-2 font-body-md">/ unit</span>
							</div>
							<p class="text-xs text-secondary font-label-bold mt-2">Expected Profit: $ 3.83 per unit</p>
							</div>
							</div>
							</section>
							<!-- Critical Volume Management -->
							<section class="col-span-12 lg:col-span-6 bg-white border border-outline-variant rounded-xl p-8 shadow-sm">
							<div class="flex items-center gap-3 mb-6">
							<span class="material-symbols-outlined text-orange-600">inventory</span>
							<h3 class="font-headline-md text-headline-md">Critical Volume</h3>
							</div>
							<div class="space-y-8">
							<div>
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-4">Pack Composition</label>
							<div class="grid grid-cols-2 gap-4">
							<div class="p-4 bg-surface rounded-lg border-2 border-outline-variant flex items-center justify-between">
							<span class="font-body-md">Units per Case</span>
							<input class="w-16 bg-transparent border-none text-right font-numeral-xl text-headline-md focus:ring-0" type="number" value="12">
							</div>
							<div class="p-4 bg-surface rounded-lg border-2 border-outline-variant flex items-center justify-between">
							<span class="font-body-md">Units per Pack</span>
							<input class="w-16 bg-transparent border-none text-right font-numeral-xl text-headline-md focus:ring-0" type="number" value="6">
							</div>
							</div>
							</div>
							<div class="pt-4 border-t border-slate-100">
							<div class="flex items-center justify-between p-4 bg-blue-50 rounded-lg border border-blue-100">
							<div class="flex items-center gap-3">
							<span class="material-symbols-outlined text-blue-900">recycling</span>
							<div>
							<p class="font-label-bold text-blue-900">Returnable Bottle Tracking</p>
							<p class="text-xs text-blue-700">Track and manage empty container deposits</p>
							</div>
							</div>
							<label class="relative inline-flex items-center cursor-pointer">
							<input checked="" class="sr-only peer" type="checkbox">
							<div class="w-11 h-6 bg-slate-200 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-orange-600"></div>
							</label>
							</div>
							</div>
							<div class="grid grid-cols-2 gap-4">
							<div>
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Min. Stock Alert</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md text-error" type="number" value="24">
							</div>
							<div>
							<label class="block font-label-bold text-label-bold text-on-surface-variant mb-2">Max. Capacity</label>
							<input class="w-full border-2 border-outline-variant focus:border-primary focus:ring-0 p-3 rounded-lg font-body-md" type="number" value="240">
						</div>
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
	</div>

@endsection