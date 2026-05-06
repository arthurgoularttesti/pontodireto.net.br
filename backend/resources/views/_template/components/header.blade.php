<!-- TopAppBar -->
<header class="flex justify-between items-center h-16 px-6 w-full sticky top-0 z-40 bg-[#F8FAFC] border-b border-[#E2E8F0] flat no-shadows">
	<div class="flex items-center gap-4">
		<span class="text-xl font-black text-[#1A2B48] font-inter tracking-tight uppercase">{{ !empty(@$title) ? @$title : config('app.name') }}</span>
		<div class="h-8 w-px bg-slate-200 mx-2"></div>
		<div class="flex gap-6">
			<span class="font-inter text-sm font-semibold tracking-tight text-orange-600 border-b-2 border-orange-600 cursor-pointer">DASHBOARD</span>
			<span class="font-inter text-sm font-semibold tracking-tight text-slate-500 hover:text-slate-700 cursor-pointer transition-colors">ANALYTICS</span>
			<span class="font-inter text-sm font-semibold tracking-tight text-slate-500 hover:text-slate-700 cursor-pointer transition-colors">HISTORY</span>
		</div>
	</div>
	<div class="flex items-center gap-4">
		<div class="flex gap-2">
			<button class="p-2 text-[#1A2B48] hover:bg-slate-100 rounded-lg transition-colors active:scale-95">
				<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
			</button>
			<button class="p-2 text-[#1A2B48] hover:bg-slate-100 rounded-lg transition-colors active:scale-95">
				<span class="material-symbols-outlined" data-icon="help">help</span>
			</button>
			<button class="p-2 text-[#1A2B48] hover:bg-slate-100 rounded-lg transition-colors active:scale-95">
				<span class="material-symbols-outlined" data-icon="settings">settings</span>
			</button>
		</div>
		<div class="relative group">
			<button class="flex items-center gap-2 px-3 py-2 rounded-lg hover:bg-slate-50 transition-colors cursor-pointer group">
				<div class="text-right">
					<p class="text-xs font-bold text-[#1A2B48]">Admin User</p>
					<p class="text-[10px] text-slate-500">Super Administrator</p>
				</div>
				<img alt="Cashier Avatar" class="h-8 w-8 rounded-full" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDHTNEvJk-xBRDSWgtqMsXG4CjRrcJGElRDnyY5LU3oKYfevNaj6JCAEnrzVbE77nvf-XDMDUfQvMsxezXJ2pyHQcsu3jFdakfkvoVKNIDJZlU3eu4FMshn94or22nfyPHow0mIuA1PFaRl7qUAHUu8YDn8DrHXueOrREV4R8kDG0NDl1HrQ1wPIHC_zscdZN8vcafLM8zgF577TbZyRuQ59wQXkMVINy5akix2qVg8YfXr-XRtRS38ofxdle-QFUHhQOX8j6hH0y4"/>
				<span class="material-symbols-outlined text-slate-400 group-hover:text-blue-900">expand_more</span>
			</button>
			<!-- User Dropdown Menu -->
			<div class="absolute right-0 top-full mt-2 w-48 bg-white border border-slate-200 shadow-xl rounded-xl py-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-[60]">
				<a class="flex items-center gap-3 px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" href="#">
					<span class="material-symbols-outlined text-slate-400" data-icon="person">person</span>
					Editar Perfil
				</a>
				<div class="h-[1px] bg-slate-100 my-1"></div>
				<a class="flex items-center gap-3 px-4 py-2 text-sm text-error hover:bg-error-container" href="#">
					<span class="material-symbols-outlined" data-icon="logout">logout</span>
					Sair
				</a>
			</div>
		</div>
	</div>
</header>