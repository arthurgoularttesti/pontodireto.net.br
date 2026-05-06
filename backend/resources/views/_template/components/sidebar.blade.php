<!-- SideNavBar -->
<aside class="h-screen w-64 fixed left-0 top-0 bg-[#1A2B48] text-white flex flex-col h-full pt-4 pb-8 border-r border-slate-700 shadow-xl z-50">
	<div class="px-2 mb-10 flex items-center gap-3">
		<img alt="Ponto Direto Logo" class="h-10 w-10 object-contain" data-alt="minimalist professional logo for a point of sale software called Ponto Direto with geometric shapes in navy and orange" src="{{ asset('logo_icon_small_bg.png') }}"/>
		<div>
			<h1 class="font-bold uppercase tracking-widest text-sm">{{ config('app.name') }}</h1>
			<p class="text-slate-400 text-xs font-inter">{{ gethostname() }}</p>
		</div>
	</div>
	<nav class="flex-1 space-y-1">
		<a class="bg-orange-600 text-white rounded-r-full mr-4 px-4 py-3 flex items-center gap-3 transition-all duration-200 ease-in-out" href="#">
			<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
			<span class="font-inter text-[14px] font-medium">Dashboard</span>
		</a>
		<a class="text-slate-300 hover:text-white hover:bg-[#2A3B58] px-4 py-3 flex items-center gap-3 transition-all duration-200 ease-in-out" href="#">
			<span class="material-symbols-outlined" data-icon="point_of_sale">point_of_sale</span>
			<span class="font-inter text-[14px] font-medium">PDV Fast</span>
		</a>
		<a class="text-slate-300 hover:text-white hover:bg-[#2A3B58] px-4 py-3 flex items-center gap-3 transition-all duration-200 ease-in-out" href="#">
			<span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
			<span class="font-inter text-[14px] font-medium">Inventory</span>
		</a>
		<a class="text-slate-300 hover:text-white hover:bg-[#2A3B58] px-4 py-3 flex items-center gap-3 transition-all duration-200 ease-in-out" href="#">
			<span class="material-symbols-outlined" data-icon="lock_clock">lock_clock</span>
			<span class="font-inter text-[14px] font-medium">Cash Closing</span>
		</a>
	</nav>
	<div class="mt-auto px-2 space-y-1">
		<a class="text-slate-300 hover:text-white hover:bg-[#2A3B58] px-4 py-3 flex items-center gap-3 transition-all duration-200 ease-in-out" href="#">
			<span class="material-symbols-outlined" data-icon="support_agent">support_agent</span>
			<span class="font-inter text-[14px] font-medium">Support</span>
		</a>
		<a class="text-slate-300 hover:text-white hover:bg-[#2A3B58] px-4 py-3 flex items-center gap-3 transition-all duration-200 ease-in-out" href="#">
			<span class="material-symbols-outlined" data-icon="logout">logout</span>
			<span class="font-inter text-[14px] font-medium">Logout</span>
		</a>
	</div>
</aside>